![X-Updare Store](https://img.shields.io/website?down_color=red&down_message=Offline&label=X-Update%20Store&style=for-the-badge&up_color=308311&up_message=online&url=https%3A%2F%2Fxoopscube.xyz%2Fuploads%2Fxupdatemaster%2Fstores_json_V1.txt)
[![XOOPSCube powered-by-electricity](https://img.shields.io/badge/Powered%20by-Electricity-face74?style=for-the-badge&labelColor=203244&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxwYXRoIGZpbGw9IiNmYWNlNzQiIGQ9Ik0xNC42OSAyLjIxTDQuMzMgMTEuNDljLS42NC41OC0uMjggMS42NS41OCAxLjczTDEzIDE0bC00Ljg1IDYuNzZjLS4yMi4zMS0uMTkuNzQuMDggMS4wMWMuMy4zLjc3LjMxIDEuMDguMDJsMTAuMzYtOS4yOGMuNjQtLjU4LjI4LTEuNjUtLjU4LTEuNzNMMTEgMTBsNC44NS02Ljc2Yy4yMi0uMzEuMTktLjc0LS4wOC0xLjAxYS43Ny43NyAwIDAgMC0xLjA4LS4wMnoiLz48L3N2Zz4=)](https://github.com/xoopscube)
[![XCL](https://img.shields.io/badge/XCL-Made%20with%20passion-b0201d?style=for-the-badge&labelColor=991015&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxwYXRoIGZpbGw9IndoaXRlIiBkPSJtMTIgMjEuMzVsLTEuNDUtMS4zMkM1LjQgMTUuMzYgMiAxMi4yNyAyIDguNUMyIDUuNDEgNC40MiAzIDcuNSAzYzEuNzQgMCAzLjQxLjgxIDQuNSAyLjA4QzEzLjA5IDMuODEgMTQuNzYgMyAxNi41IDNDMTkuNTggMyAyMiA1LjQxIDIyIDguNWMwIDMuNzctMy40IDYuODYtOC41NSAxMS41M0wxMiAyMS4zNVoiLz48L3N2Zz4=)](https://github.com/xoopscube)

[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/2.0.0/active.svg)](https://github.com/xoopscube/d3forum)
![License GPL](https://img.shields.io/badge/License-GPL-green)
![X-Updare Store](https://img.shields.io/badge/XOOPSCube%20Package-XCL-blue)

## ///// — D3Forum :: Discussion Forum Management

![alt text](https://repository-images.githubusercontent.com/469831419/6032bf18-5c1e-4f27-aa2f-2b8e60f4e5)

MODULE |  D3FORUM
------------ | -------------
Description  | Duplicatable module for discussion forum management
Render Engine| Smarty v2 and XCube Layout
Version | 2.40.0
Author | Nobuhiro Yasutomi @nbuy XCL PHP8  
Author | Nuno Luciano @gigamaster XCL PHP7 
Author      | @domifara, @naao Naoki Okino, @nao-pon Naoki Sawada
Author       | Gijoe (peak.ne.jp) and Jidaikbo 
Copyright    | 2005-2024 Authors
License      | XCL module distributed under a GPL 2.0 License.

##### :computer: The Minimum Requirements



          Apache, Nginx, etc. PHP 8.x.x
          MySQL ^5.7, MariaDB  InnoDB utf8 / utf8mb4
          XCL version 2.4.0



-----

# D3Forum Module Overview

D3Forum is a powerful forum and comment system module for XOOPSCube Legacy. It's designed to be flexible and can be used both as a standalone forum system and as a comment integration solution for other modules.

## Key Features

1. **Multi-instance Support**
   - Can be installed multiple times with different directory names
   - Each instance can be configured independently

2. **Flexible Forum Structure**
   - Hierarchical categories and forums
   - Threaded discussions with unlimited nesting
   - Topic-based organization

3. **Comment Integration**
   - Seamlessly integrates with other modules like Pico
   - Replaces the native XOOPS comment system with more features
   - Provides a unified comment experience across the site

4. **Advanced Permissions System**
   - Granular permission control at category and forum levels
   - User group-based access control
   - Moderator capabilities

5. **Notification System**
   - Users can subscribe to categories, forums, or specific topics
   - Email notifications for new posts and replies
   - Multiple notification types (global, category, forum, topic)

6. **Post Management**
   - Rich text editing
   - File attachments
   - Post history tracking
   - Post approval workflow

7. **User Features**
   - User profiles integration
   - Post counting
   - Topic marking (read/unread)
   - Topic subscription

8. **Administration Tools**
   - Forum synchronization
   - Comment import/export
   - Batch operations
   - Statistics and reporting

9. **Customization Options**
   - Template-based design
   - Multiple language support
   - Configurable display options

10. **Search Integration**
    - Full-text search capabilities
    - Integration with site-wide search

D3Forum is particularly valuable because it serves dual purposes - it can be a complete forum solution while also providing enhanced commenting capabilities for content across your site, creating a more integrated user experience.


# How Notification Works in XOOPSCube

The notification system in XOOPSCube allows users to subscribe to various events within modules and receive notifications when those events occur.

![D3Forum Notification](https://github.com/xoopscube/artwork-social-media/blob/bb0d45b8cfcb7d5da8aaf821747aa12150bc1897/modules/d3-forum-notification.jpg)

## Key Components of the Notification System

1. **Dynamic Function Creation**:
   - The file uses `eval()` to dynamically create a module-specific notification function named `{$mydirname}_notify_iteminfo()`
   - This function serves as a bridge between the core notification system and the module-specific implementation

2. **Base Function Implementation**:
   - The `d3forum_notify_base()` function handles the actual notification logic
   - It's defined once but can be used by multiple instances of the module with different directory names

3. **Category-Based Notifications**:
   - The system supports different notification categories:
     - `global`: Module-wide notifications
     - `category`: Notifications for specific forum categories
     - `forum`: Notifications for specific forums
     - `topic`: Notifications for specific topics

4. **Item Information Retrieval**:
   - For each notification type, the system retrieves relevant information:
     - The name of the item (category, forum, or topic title)
     - The URL to access the item
   - This information is used to construct notification messages

5. **Permission Checking**:
   - The system checks if the user has permission to read the content before sending notifications
   - Functions like `d3forum_get_categories_can_read()` and `d3forum_get_forums_can_read()` filter content based on user permissions

## Notification Flow

1. When a user subscribes to an event (e.g., new posts in a topic), the subscription is stored in the database
2. When the event occurs (e.g., someone posts in that topic), the module triggers the notification
3. The notification system calls the module's `{$mydirname}_notify_iteminfo()` function to get information about the item
4. This function calls `d3forum_notify_base()` with the module directory name, category, and item ID
5. The notification system uses this information to construct and send notifications to subscribed users

This architecture allows for flexible notifications across different module instances while maintaining consistent behavior.
