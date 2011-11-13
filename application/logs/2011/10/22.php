<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-22 03:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jabjai was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-22 03:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jabjai was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-22 04:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-22 04:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-22 04:52:41 --- ERROR: ErrorException [ 2 ]: fopen(path/to/file.txt) [function.fopen]: failed to open stream: No such file or directory ~ MODPATH\storage\classes\kohana\storage.php [ 183 ]
2011-10-22 04:52:41 --- STRACE: ErrorException [ 2 ]: fopen(path/to/file.txt) [function.fopen]: failed to open stream: No such file or directory ~ MODPATH\storage\classes\kohana\storage.php [ 183 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(path/to/f...', 'C:\wamp\www\jab...', 183, Array)
#1 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage.php(183): fopen('path/to/file.tx...', 'r')
#2 C:\wamp\www\jabjai\application\classes\controller\user\welcome.php(10): Kohana_Storage->set('test.txt', 'path/to/file.tx...', true)
#3 [internal function]: Controller_User_Welcome->action_index()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Welcome))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-22 04:55:32 --- ERROR: ErrorException [ 2 ]: fopen(test-storage/file.txt) [function.fopen]: failed to open stream: No such file or directory ~ MODPATH\storage\classes\kohana\storage.php [ 183 ]
2011-10-22 04:55:32 --- STRACE: ErrorException [ 2 ]: fopen(test-storage/file.txt) [function.fopen]: failed to open stream: No such file or directory ~ MODPATH\storage\classes\kohana\storage.php [ 183 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(test-stor...', 'C:\wamp\www\jab...', 183, Array)
#1 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage.php(183): fopen('test-storage/fi...', 'r')
#2 C:\wamp\www\jabjai\application\classes\controller\user\welcome.php(10): Kohana_Storage->set('test.txt', 'test-storage/fi...', true)
#3 [internal function]: Controller_User_Welcome->action_index()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Welcome))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-22 05:15:16 --- ERROR: ErrorException [ 2048 ]: Static function Beautiful_Asset_Filter::_filter() should not be abstract ~ MODPATH\asset\classes\beautiful\asset\filter.php [ 86 ]
2011-10-22 05:15:16 --- STRACE: ErrorException [ 2048 ]: Static function Beautiful_Asset_Filter::_filter() should not be abstract ~ MODPATH\asset\classes\beautiful\asset\filter.php [ 86 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\core.php(496): Kohana_Core::error_handler(2048, 'Static function...', 'C:\wamp\www\jab...', 86, Array)
#1 C:\wamp\www\jabjai\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Beautiful_Asset...')
#3 C:\wamp\www\jabjai\modules\asset\classes\asset\filter.php(12): spl_autoload_call('Beautiful_Asset...')
#4 C:\wamp\www\jabjai\system\classes\kohana\core.php(496): require('C:\wamp\www\jab...')
#5 [internal function]: Kohana_Core::auto_load('Asset_Filter')
#6 C:\wamp\www\jabjai\modules\asset\classes\asset\filter\concat.php(12): spl_autoload_call('Asset_Filter')
#7 C:\wamp\www\jabjai\system\classes\kohana\core.php(496): require('C:\wamp\www\jab...')
#8 [internal function]: Kohana_Core::auto_load('asset_filter_co...')
#9 [internal function]: spl_autoload_call('asset_filter_co...')
#10 C:\wamp\www\jabjai\modules\userguide\classes\kohana\kodoc.php(169): ReflectionClass->__construct('asset_filter_co...')
#11 C:\wamp\www\jabjai\modules\userguide\classes\controller\userguide.php(200): Kohana_Kodoc::class_methods()
#12 [internal function]: Controller_Userguide->action_api()
#13 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Userguide))
#14 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#17 {main}
2011-10-22 05:18:24 --- ERROR: ErrorException [ 2048 ]: Static function Beautiful_Asset_Filter::_filter() should not be abstract ~ MODPATH\asset\classes\beautiful\asset\filter.php [ 86 ]
2011-10-22 05:18:24 --- STRACE: ErrorException [ 2048 ]: Static function Beautiful_Asset_Filter::_filter() should not be abstract ~ MODPATH\asset\classes\beautiful\asset\filter.php [ 86 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\core.php(496): Kohana_Core::error_handler(2048, 'Static function...', 'C:\wamp\www\jab...', 86, Array)
#1 C:\wamp\www\jabjai\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Beautiful_Asset...')
#3 C:\wamp\www\jabjai\modules\asset\classes\asset\filter.php(12): spl_autoload_call('Beautiful_Asset...')
#4 C:\wamp\www\jabjai\system\classes\kohana\core.php(496): require('C:\wamp\www\jab...')
#5 [internal function]: Kohana_Core::auto_load('Asset_Filter')
#6 C:\wamp\www\jabjai\modules\asset\classes\asset\filter\concat.php(12): spl_autoload_call('Asset_Filter')
#7 C:\wamp\www\jabjai\system\classes\kohana\core.php(496): require('C:\wamp\www\jab...')
#8 [internal function]: Kohana_Core::auto_load('asset_filter_co...')
#9 [internal function]: spl_autoload_call('asset_filter_co...')
#10 C:\wamp\www\jabjai\modules\userguide\classes\kohana\kodoc.php(169): ReflectionClass->__construct('asset_filter_co...')
#11 C:\wamp\www\jabjai\modules\userguide\classes\controller\userguide.php(200): Kohana_Kodoc::class_methods()
#12 [internal function]: Controller_Userguide->action_api()
#13 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Userguide))
#14 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#17 {main}
2011-10-22 05:28:41 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Storage::get(), called in C:\wamp\www\jabjai\application\classes\controller\user\welcome.php on line 16 and defined ~ MODPATH\storage\classes\kohana\storage.php [ 217 ]
2011-10-22 05:28:41 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Storage::get(), called in C:\wamp\www\jabjai\application\classes\controller\user\welcome.php on line 16 and defined ~ MODPATH\storage\classes\kohana\storage.php [ 217 ]
--
#0 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage.php(217): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\jab...', 217, Array)
#1 C:\wamp\www\jabjai\application\classes\controller\user\welcome.php(16): Kohana_Storage->get('test.txt')
#2 [internal function]: Controller_User_Welcome->action_index()
#3 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Welcome))
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-22 05:34:23 --- ERROR: ErrorException [ 2 ]: ftp_login() expects parameter 1 to be resource, boolean given ~ MODPATH\storage\classes\kohana\storage\ftp.php [ 62 ]
2011-10-22 05:34:23 --- STRACE: ErrorException [ 2 ]: ftp_login() expects parameter 1 to be resource, boolean given ~ MODPATH\storage\classes\kohana\storage\ftp.php [ 62 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'ftp_login() exp...', 'C:\wamp\www\jab...', 62, Array)
#1 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage\ftp.php(62): ftp_login(false, NULL, NULL)
#2 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage\ftp.php(101): Kohana_Storage_Ftp->_load()
#3 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage.php(199): Kohana_Storage_Ftp->_set('test-storage/fi...', Resource id #64, 'text/plain')
#4 C:\wamp\www\jabjai\application\classes\controller\user\welcome.php(9): Kohana_Storage->set('test-storage/fi...', 'world5555')
#5 [internal function]: Controller_User_Welcome->action_index()
#6 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Welcome))
#7 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-22 05:34:55 --- ERROR: ErrorException [ 2 ]: ftp_login() expects parameter 1 to be resource, boolean given ~ MODPATH\storage\classes\kohana\storage\ftp.php [ 62 ]
2011-10-22 05:34:55 --- STRACE: ErrorException [ 2 ]: ftp_login() expects parameter 1 to be resource, boolean given ~ MODPATH\storage\classes\kohana\storage\ftp.php [ 62 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'ftp_login() exp...', 'C:\wamp\www\jab...', 62, Array)
#1 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage\ftp.php(62): ftp_login(false, NULL, NULL)
#2 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage\ftp.php(101): Kohana_Storage_Ftp->_load()
#3 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage.php(199): Kohana_Storage_Ftp->_set('test-storage/fi...', Resource id #64, 'text/plain')
#4 C:\wamp\www\jabjai\application\classes\controller\user\welcome.php(9): Kohana_Storage->set('test-storage/fi...', 'world5555')
#5 [internal function]: Controller_User_Welcome->action_index()
#6 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Welcome))
#7 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-22 05:35:35 --- ERROR: ErrorException [ 2 ]: ftp_login() expects parameter 1 to be resource, boolean given ~ MODPATH\storage\classes\kohana\storage\ftp.php [ 62 ]
2011-10-22 05:35:35 --- STRACE: ErrorException [ 2 ]: ftp_login() expects parameter 1 to be resource, boolean given ~ MODPATH\storage\classes\kohana\storage\ftp.php [ 62 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'ftp_login() exp...', 'C:\wamp\www\jab...', 62, Array)
#1 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage\ftp.php(62): ftp_login(false, NULL, NULL)
#2 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage\ftp.php(101): Kohana_Storage_Ftp->_load()
#3 C:\wamp\www\jabjai\modules\storage\classes\kohana\storage.php(199): Kohana_Storage_Ftp->_set('test-storage/fi...', Resource id #64, 'text/plain')
#4 C:\wamp\www\jabjai\application\classes\controller\user\welcome.php(9): Kohana_Storage->set('test-storage/fi...', 'world5555')
#5 [internal function]: Controller_User_Welcome->action_index()
#6 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Welcome))
#7 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-22 11:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 11:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 11:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 11:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 11:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 11:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 11:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 11:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 11:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 11:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 11:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 11:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 11:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 11:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 11:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 11:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 11:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 11:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/jabjai/media/images/icon/option-default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:34:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:34:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jabjai/media/images/icon/websymbols-regular-webfont.eot ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jabjai/media/images/icon/websymbols-regular-webfont.eot ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:53:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:53:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 13:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 13:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-22 14:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-22 14:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}