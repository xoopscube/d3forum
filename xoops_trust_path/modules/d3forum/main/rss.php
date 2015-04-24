<?php

//error_reporting(E_ALL);
//$xoopsErrorHandler =& XoopsErrorHandler::getInstance();
//$xoopsErrorHandler->activate(true);

$cache_min = 5;
$cat_ids = array();

require_once $mytrustdirpath.'/include/rss_functions.php';

$forum = (!empty($_GET['forum_id']))? intval($_GET['forum_id']) : 0;
if (! $forum ) $forum = (!empty($_GET['forum']))? intval($_GET['forum']) : 0;

if ($forum) {
	$cat = '0';
} else {
	if (empty($_GET['cat_id'])) {
		$_GET['cat_id'] = (empty($_GET['cat_ids']))? '' : $_GET['cat_ids'];
	}
	$cat = (!empty($_GET['cat_id']))? $_GET['cat_id'] : '0';
	if ($cat) {
		$cat = preg_replace('/[^0-9,]+/', '', $cat);

		$cat_ids = array() ;
		foreach( explode( ',' , $cat ) as $_id ) {
			if( $_id > 0 ) {
				$cat_ids[] = intval( $_id ) ;
			}
		}
		$cat_ids = array_unique($cat_ids);
		sort($cat_ids);
		$cat = ($cat_ids)? join(',', $cat_ids) : '0';
	}
}

$e = (!empty($_GET['e']))? $_GET['e'] : '';

if ($e === 'sjis') {
	$encode = 'SJIS';
	$encoding = 'Shift-JIS';
} else {
	$encode = $encoding = 'UTF-8';
}

if (defined('XOOPS_CACHE_PATH')) {
	$c_file = XOOPS_CACHE_PATH . '/' . rawurlencode(substr(XOOPS_URL, 7)) . '_' . $mydirname . '_' . $cat . '_' . $forum . '.rss';
} else {
	$ssl = (defined('XOOPS_IS_SSL') && XOOPS_IS_SSL)? '_ssl' : '';
	$c_file = XOOPS_ROOT_PATH . '/cache/' . $mydirname . '_' . $cat . '_' . $forum . $ssl . '.rss';
}

$outputs = array();
if (file_exists($c_file) && (filemtime($c_file) + $cache_min * 60) > time()) {
	$outputs = unserialize(file_get_contents($c_file));
	$outputs['b_time'] = filemtime($c_file);
}
if (!isset($outputs['data'])) {
	$data =  d3forum_get_rssdata ( $mydirname , 15 , 0 , $forum , $cat_ids );
	$b_time = time();

	if (sizeof($cat_ids) > 1) {
		$_titles = array();
		foreach($data as $item) {
			$_titles[] = $item['cat_title'];
		}
		$cat_title = join(', ', array_unique($_titles));
	} else {
		$cat_title = $data[0]['cat_title'];
	}

	$title = htmlspecialchars($xoopsConfig['sitename']). ' - ' . htmlspecialchars($xoopsModule->getVar('name'));
	if ($cat || $forum) $title .= ' - ' . htmlspecialchars($cat_title) ;
	if ($forum) $title .= ' - [ ' . htmlspecialchars($data[0]['forum_title']) . ' ]';
	$top_link = ($forum)? 'index.php?forum_id='.$forum : '';
	$top_link = ($cat)? 'index.php?cat_id='.$cat : $top_link;
	$top_link = XOOPS_URL.'/modules/'.$mydirname.'/'.$top_link;

	foreach($data as $key => $item) {
		$subtitles = array();
		if ((!$cat || sizeof($cat_ids) > 1) && !$forum) $subtitles[] = $item['cat_title'];
		if (!$forum) $subtitles[] = $item['forum_title'];
		$data[$key]['subject'] = htmlspecialchars(($subtitles? '[' . join(':',$subtitles) . '] ' : '') . $item['subject'], ENT_COMPAT, _CHARSET);
		$data[$key]['context'] = htmlspecialchars(d3forum_make_context(strip_tags($item['description'])), ENT_COMPAT, _CHARSET);
		$data[$key]['cat_title'] = htmlspecialchars($item['cat_title'], ENT_COMPAT, _CHARSET);
		$data[$key]['forum_title'] = htmlspecialchars($item['forum_title'], ENT_COMPAT, _CHARSET);
	}

	$outputs = array(
		'encoding' => $encoding,
		'title' => $title,
		'top_link' => $top_link,
		'b_time' => $b_time,
		'data' => $data
	);
	
	if (is_writable($c_file)) {
		file_put_contents($c_file, serialize($outputs));
	}
}

if (!isset($xoopsTpl)) {
	// make XoopsTpl
	require_once XOOPS_ROOT_PATH.'/class/template.php' ;
	$xoopsTpl = new XoopsTpl() ;
}

$xoopsTpl->assign( $outputs );

// RSS Build
$out = $xoopsTpl->fetch( 'db:'.$mydirname.'_main_rss.html' ) ;
if ($encode !== _CHARSET) {
	$out = mb_convert_encoding($out, $encode, _CHARSET);
}

// output
$out = str_replace("\0", '', $out);
ini_set('default_encoding', $encoding);
header('Content-type: application/xml; charset="'.$encoding.'"');
echo $out;
exit();
