<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-12 09:36:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 09:36:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 09:36:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 09:36:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:09:53 --- ERROR: View_Exception [ 0 ]: The requested view user/left-menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-12 10:09:53 --- STRACE: View_Exception [ 0 ]: The requested view user/left-menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\view.php(137): Kohana_View->set_filename('user/left-menu')
#1 C:\wamp\www\jabjai\system\classes\kohana\view.php(30): Kohana_View->__construct('user/left-menu', NULL)
#2 C:\wamp\www\jabjai\application\views\layout\index.php(28): Kohana_View::factory('user/left-menu')
#3 C:\wamp\www\jabjai\system\classes\kohana\view.php(61): include('C:\wamp\www\jab...')
#4 C:\wamp\www\jabjai\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\jab...', Array)
#5 C:\wamp\www\jabjai\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#6 [internal function]: Kohana_Controller_Template->after()
#7 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User_Welcome))
#8 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-12 10:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:12:28 --- ERROR: View_Exception [ 0 ]: The requested view layout/main could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-12 10:12:28 --- STRACE: View_Exception [ 0 ]: The requested view layout/main could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\view.php(137): Kohana_View->set_filename('layout/main')
#1 C:\wamp\www\jabjai\system\classes\kohana\view.php(30): Kohana_View->__construct('layout/main', NULL)
#2 C:\wamp\www\jabjai\system\classes\kohana\controller\template.php(33): Kohana_View::factory('layout/main')
#3 C:\wamp\www\jabjai\application\classes\controller\user.php(5): Kohana_Controller_Template->before()
#4 [internal function]: Controller_User->before()
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_User_Welcome))
#6 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-12 10:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:13:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:13:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:13:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:13:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:25:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\user\layout\main.php [ 30 ]
2011-11-12 10:25:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\user\layout\main.php [ 30 ]
--
#0 C:\wamp\www\jabjai\application\views\user\layout\main.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\jab...', 30, Array)
#1 C:\wamp\www\jabjai\system\classes\kohana\view.php(61): include('C:\wamp\www\jab...')
#2 C:\wamp\www\jabjai\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\jab...', Array)
#3 C:\wamp\www\jabjai\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User_Welcome))
#6 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-12 10:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL product was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-12 10:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL product was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\application\classes\controller\user\welcome.php(7): Kohana_Request->execute()
#3 [internal function]: Controller_User_Welcome->action_index()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Welcome))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-12 10:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 10:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 10:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:13:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:13:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:13:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:13:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:17:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:17:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:17:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:17:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:17:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:17:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:19:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:19:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:19:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:19:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 11:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 11:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-12 20:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-12 20:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}