<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-02 08:05:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:05:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:44:22 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\wamp\www\jabjai\application\views\user\product\form.php on line 6 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
2011-11-02 08:44:22 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\wamp\www\jabjai\application\views\user\product\form.php on line 6 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\form.php(35): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\wamp\www\jab...', 35, Array)
#1 C:\wamp\www\jabjai\application\views\user\product\form.php(6): Kohana_Form::open('', 'form_add_produc...')
#2 C:\wamp\www\jabjai\system\classes\kohana\view.php(61): include('C:\wamp\www\jab...')
#3 C:\wamp\www\jabjai\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\jab...', Array)
#4 C:\wamp\www\jabjai\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\wamp\www\jabjai\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\wamp\www\jabjai\application\classes\controller\user\products.php(15): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_User_Products->action_form()
#8 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Products))
#9 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#12 {main}
2011-11-02 08:44:24 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\wamp\www\jabjai\application\views\user\product\form.php on line 6 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
2011-11-02 08:44:24 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\wamp\www\jabjai\application\views\user\product\form.php on line 6 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\form.php(35): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\wamp\www\jab...', 35, Array)
#1 C:\wamp\www\jabjai\application\views\user\product\form.php(6): Kohana_Form::open('', 'form_add_produc...')
#2 C:\wamp\www\jabjai\system\classes\kohana\view.php(61): include('C:\wamp\www\jab...')
#3 C:\wamp\www\jabjai\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\jab...', Array)
#4 C:\wamp\www\jabjai\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\wamp\www\jabjai\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\wamp\www\jabjai\application\classes\controller\user\products.php(15): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_User_Products->action_form()
#8 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Products))
#9 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#12 {main}
2011-11-02 08:44:47 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\wamp\www\jabjai\application\views\user\product\form.php on line 6 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
2011-11-02 08:44:47 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\wamp\www\jabjai\application\views\user\product\form.php on line 6 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\form.php(35): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\wamp\www\jab...', 35, Array)
#1 C:\wamp\www\jabjai\application\views\user\product\form.php(6): Kohana_Form::open('#', 'form_add_produc...')
#2 C:\wamp\www\jabjai\system\classes\kohana\view.php(61): include('C:\wamp\www\jab...')
#3 C:\wamp\www\jabjai\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\jab...', Array)
#4 C:\wamp\www\jabjai\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\wamp\www\jabjai\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\wamp\www\jabjai\application\classes\controller\user\products.php(15): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_User_Products->action_form()
#8 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Products))
#9 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#12 {main}
2011-11-02 08:44:48 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\wamp\www\jabjai\application\views\user\product\form.php on line 6 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
2011-11-02 08:44:48 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\wamp\www\jabjai\application\views\user\product\form.php on line 6 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\form.php(35): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\wamp\www\jab...', 35, Array)
#1 C:\wamp\www\jabjai\application\views\user\product\form.php(6): Kohana_Form::open('#', 'form_add_produc...')
#2 C:\wamp\www\jabjai\system\classes\kohana\view.php(61): include('C:\wamp\www\jab...')
#3 C:\wamp\www\jabjai\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\jab...', Array)
#4 C:\wamp\www\jabjai\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\wamp\www\jabjai\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\wamp\www\jabjai\application\classes\controller\user\products.php(15): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_User_Products->action_form()
#8 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Products))
#9 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#12 {main}
2011-11-02 08:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:44:58 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\wamp\www\jabjai\application\views\user\product\form.php on line 6 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
2011-11-02 08:44:58 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\wamp\www\jabjai\application\views\user\product\form.php on line 6 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\form.php(35): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\wamp\www\jab...', 35, Array)
#1 C:\wamp\www\jabjai\application\views\user\product\form.php(6): Kohana_Form::open('#', 'form_add_produc...')
#2 C:\wamp\www\jabjai\system\classes\kohana\view.php(61): include('C:\wamp\www\jab...')
#3 C:\wamp\www\jabjai\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\jab...', Array)
#4 C:\wamp\www\jabjai\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\wamp\www\jabjai\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\wamp\www\jabjai\application\classes\controller\user\products.php(15): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_User_Products->action_form()
#8 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Products))
#9 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#12 {main}
2011-11-02 08:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL p was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-02 08:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL p was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-02 08:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pro was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-02 08:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pro was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-02 08:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL produ was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-02 08:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL produ was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-02 08:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL produc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-02 08:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL produc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-02 08:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL product was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-02 08:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL product was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-02 08:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL products/a was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-02 08:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL products/a was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-02 08:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 08:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 08:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 09:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 09:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 09:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL products/ad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-02 09:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL products/ad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-02 09:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 09:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 09:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 09:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 09:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 09:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 09:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 09:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 09:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 09:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 11:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 11:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 11:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 11:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 11:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 11:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 11:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 11:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 12:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 12:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-02 12:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-02 12:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}