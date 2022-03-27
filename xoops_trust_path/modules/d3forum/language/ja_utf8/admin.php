<?php
// Syntax replace define with const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

const _MD_A_MYMENU_MYTPLSADMIN = 'テンプレート管理';
const _MD_A_MYMENU_MYBLOCKSADMIN = 'ブロック管理/アクセス権限';
const _MD_A_MYMENU_MYPREFERENCES = '一般設定';

// forum_access and category_access
const _MD_A_D3FORUM_LABEL_SELECTFORUM = 'フォーラムを選択';
const _MD_A_D3FORUM_LABEL_SELECTCATEGORY = 'カテゴリーを選択';
const _MD_A_D3FORUM_H2_GROUPPERMS = 'グループ毎の権限';
const _MD_A_D3FORUM_H2_USERPERMS = 'ユーザー毎の権限';
const _MD_A_D3FORUM_TH_CAN_READ = '閲覧権限';
const _MD_A_D3FORUM_TH_CAN_POST = '投稿権限';
const _MD_A_D3FORUM_TH_CAN_EDIT = '編集権限';
const _MD_A_D3FORUM_TH_CAN_DELETE = '削除権限';
const _MD_A_D3FORUM_TH_POST_AUTO_APPROVED = '承認不要';
const _MD_A_D3FORUM_TH_IS_MODERATOR = 'モデレータ';
const _MD_A_D3FORUM_TH_CAN_MAKEFORUM = 'フォーラム作成権限';
const _MD_A_D3FORUM_TH_UID = 'ユーザID';
const _MD_A_D3FORUM_TH_UNAME = 'ユーザ名';
const _MD_A_D3FORUM_TH_GROUPNAME = 'グループ名';
const _MD_A_D3FORUM_NOTICE_ADDUSERS = '※ユーザを個別に新規追加する場合、ユーザID（数字）かユーザ名のいずれかを直接入力してください。<br />閲覧権限と投稿権限の両方を外せば、そのユーザはこのリストからも消えます。';
const _MD_A_D3FORUM_ERR_CREATECATEGORYFIRST = 'まずカテゴリーを作成してください';
const _MD_A_D3FORUM_ERR_CREATEFORUMFIRST = 'まずフォーラムを作成してください';

// advanced
const _MD_A_D3FORUM_H2_SYNCALLTABLES = '冗長情報の同期';
const _MD_A_D3FORUM_MAX_TOPIC_ID = '最終トピック番号';
const _MD_A_D3FORUM_LABEL_SYNCTOPICS_START = '開始トピック番号';
const _MD_A_D3FORUM_LABEL_SYNCTOPICS_NUM = '同時処理トピック数';
const _MD_A_D3FORUM_BTN_DOSYNCTABLES = '同期実行';
const _MD_A_D3FORUM_FMT_SYNCTOPICSDONE = '%s件のトピックを同期しました';
const _MD_A_D3FORUM_MSG_SYNCTABLESDONE = '同期完了しました';
const _MD_A_D3FORUM_HELP_SYNCALLTABLES = 'フォーラムにおける総投稿数など、速度をかせぐために持たせている冗長情報がおかしくなった時に上から順に実行してください。インポートした直後にも実行が必要です。';
const _MD_A_D3FORUM_H2_IMPORTFROM = 'インポート';
const _MD_A_D3FORUM_H2_COMIMPORTFROM = 'XOOPSコメントのインポート';
const _MD_A_D3FORUM_LABEL_SELECTMODULE = 'モジュール選択';
const _MD_A_D3FORUM_BTN_DOIMPORT = 'インポート実行';
const _MD_A_D3FORUM_CONFIRM_DOIMPORT = '本当にインポートを実行してよろしいですか？';
const _MD_A_D3FORUM_MSG_IMPORTDONE = 'インポート完了しました';
const _MD_A_D3FORUM_MSG_COMIMPORTDONE = '指定されたモジュールのXOOPSコメントをコメント統合としてインポートしました';
const _MD_A_D3FORUM_ERR_INVALIDMID = '指定されたモジュールからはインポートできません';
const _MD_A_D3FORUM_ERR_SQLONIMPORT = 'インポートに失敗しました。インポート元とインポート先で、テーブル構造が違う可能性があります。両方とも最新版にアップデートしているか確認してください';
const _MD_A_D3FORUM_HELP_IMPORTFROM = 'インポート可能なのは、newbb1・xhnewbbおよび他のd3forumモジュールです。可能な限りオリジナル情報を損なわない形でインポートしますが、完全な再現はできません。各種権限・モデレータについてチェックしてください。なおインポートの成功・不成功にかかわらず、現在のモジュール内の情報は全削除されます。';
const _MD_A_D3FORUM_HELP_COMIMPORTFROM = 'XOOPSコメントをコメント統合としてインポートします。コメント統合を有効にするためには、このインポートとは別に、コメント統合対象モジュールでなんらかの処理を行う必要があります。（テンプレート書換えや、一般設定の変更など）';

// post_histories
const _MD_A_D3FORUM_H2_POSTHISTORIES = '投稿編集/削除履歴';
const _MD_A_D3FORUM_LINK_REFERDELETED = '削除済';
