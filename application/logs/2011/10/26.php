<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-26 10:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-26 10:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-26 10:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL r was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-26 10:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL r was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-26 10:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL re was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-26 10:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL re was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-26 10:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL regi was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-26 10:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL regi was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-26 10:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL regis was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-26 10:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL regis was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-26 10:37:50 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-10-26 10:37:50 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\jabjai\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\jabjai\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_User_Register))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-26 10:37:50 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-10-26 10:37:50 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\jabjai\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\jabjai\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_User_Register))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-26 10:50:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_User_Register::$input ~ APPPATH\classes\controller\user\register.php [ 10 ]
2011-10-26 10:50:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_User_Register::$input ~ APPPATH\classes\controller\user\register.php [ 10 ]
--
#0 C:\wamp\www\jabjai\application\classes\controller\user\register.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\jab...', 10, Array)
#1 C:\wamp\www\jabjai\application\classes\controller\user\register.php(6): Controller_User_Register->create_user()
#2 [internal function]: Controller_User_Register->action_index()
#3 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-26 10:51:57 --- ERROR: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2011-10-26 10:51:57 --- STRACE: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\wamp\www\jabjai\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\wamp\www\jabjai\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\wamp\www\jabjai\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#4 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\wamp\www\jabjai\application\classes\controller\user\register.php(11): Kohana_ORM::factory('user')
#9 C:\wamp\www\jabjai\application\classes\controller\user\register.php(6): Controller_User_Register->create_user()
#10 [internal function]: Controller_User_Register->action_index()
#11 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#12 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#15 {main}
2011-10-26 10:53:45 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in C:\wamp\www\jabjai\application\classes\controller\user\register.php on line 13 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1399 ]
2011-10-26 10:53:45 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in C:\wamp\www\jabjai\application\classes\controller\user\register.php on line 13 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1399 ]
--
#0 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1399): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\jab...', 1399, Array)
#1 C:\wamp\www\jabjai\application\classes\controller\user\register.php(13): Kohana_ORM->add(Object(Model_Role))
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(6): Controller_User_Register->create_user()
#3 [internal function]: Controller_User_Register->action_index()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-26 10:57:20 --- ERROR: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-26 10:57:20 --- STRACE: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\jabjai\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(13): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\jabjai\application\classes\controller\user\register.php(6): Controller_User_Register->create_user()
#4 [internal function]: Controller_User_Register->action_index()
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#6 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-26 11:03:55 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-26 11:03:55 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(13): Kohana_ORM->save()
#3 C:\wamp\www\jabjai\application\classes\controller\user\register.php(6): Controller_User_Register->create_user()
#4 [internal function]: Controller_User_Register->action_index()
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#6 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-26 11:05:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-26 11:05:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(13): Kohana_ORM->save()
#3 C:\wamp\www\jabjai\application\classes\controller\user\register.php(6): Controller_User_Register->create_user()
#4 [internal function]: Controller_User_Register->action_index()
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#6 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-26 11:09:36 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-26 11:09:36 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(18): Kohana_ORM->save()
#3 C:\wamp\www\jabjai\application\classes\controller\user\register.php(6): Controller_User_Register->create_user()
#4 [internal function]: Controller_User_Register->action_index()
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#6 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-26 11:16:38 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-26 11:16:38 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(18): Kohana_ORM->save()
#3 C:\wamp\www\jabjai\application\classes\controller\user\register.php(6): Controller_User_Register->create_user()
#4 [internal function]: Controller_User_Register->action_index()
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#6 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-26 11:17:32 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-26 11:17:32 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(15): Kohana_ORM->save()
#3 [internal function]: Controller_User_Register->action_index()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-26 11:18:11 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-26 11:18:11 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(15): Kohana_ORM->save()
#3 [internal function]: Controller_User_Register->action_index()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-26 11:18:53 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-26 11:18:53 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(15): Kohana_ORM->save()
#3 [internal function]: Controller_User_Register->action_index()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-26 11:26:42 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-10-26 11:26:42 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 [internal function]: Kohana_Auth->hash('admin')
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1110): call_user_func_array(Array, Array)
#2 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(655): Kohana_ORM->run_filter('password', 'admin')
#3 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('password', 'admin')
#4 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(725): Kohana_ORM->__set('password', 'admin')
#5 C:\wamp\www\jabjai\application\classes\controller\user\register.php(14): Kohana_ORM->values(Array)
#6 [internal function]: Controller_User_Register->action_index()
#7 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#8 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#11 {main}
2011-10-26 11:27:51 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-26 11:27:51 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(15): Kohana_ORM->save()
#3 [internal function]: Controller_User_Register->action_index()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-26 11:30:05 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-26 11:30:05 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(15): Kohana_ORM->save()
#3 [internal function]: Controller_User_Register->action_index()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-26 11:30:52 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-26 11:30:52 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\jabjai\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\jabjai\application\classes\controller\user\register.php(10): Kohana_ORM->save()
#3 [internal function]: Controller_User_Register->action_index()
#4 C:\wamp\www\jabjai\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User_Register))
#5 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-26 14:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL registe was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-26 14:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL registe was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-26 14:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-26 14:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\jabjai\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\jabjai\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-26 14:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-26 14:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/icon/options_default.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\jabjai\index.php(109): Kohana_Request->execute()
#1 {main}