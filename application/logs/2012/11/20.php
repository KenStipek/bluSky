<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-20 17:22:03 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-11-20 17:22:03 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('ywadp1000146705...', NULL)
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(202): Kohana_Cookie::get('ywadp1000146705...')
#2 /home/kstipek/src/bluSky/index.php(108): Kohana_Request::factory()
#3 {main}
2012-11-20 17:22:31 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-11-20 17:22:31 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('ywadp1000146705...', NULL)
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(202): Kohana_Cookie::get('ywadp1000146705...')
#2 /home/kstipek/src/bluSky/index.php(108): Kohana_Request::factory()
#3 {main}
2012-11-20 17:22:50 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-11-20 17:22:50 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('ywadp1000146705...', NULL)
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(202): Kohana_Cookie::get('ywadp1000146705...')
#2 /home/kstipek/src/bluSky/index.php(108): Kohana_Request::factory()
#3 {main}
2012-11-20 17:23:42 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-11-20 17:23:42 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('ywadp1000146705...', NULL)
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(202): Kohana_Cookie::get('ywadp1000146705...')
#2 /home/kstipek/src/bluSky/index.php(108): Kohana_Request::factory()
#3 {main}
2012-11-20 17:59:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 17:59:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 18:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-20 18:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-20 18:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-20 18:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-20 18:01:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:01:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 18:01:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:01:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 18:02:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:02:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 18:02:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:02:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 18:02:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:02:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VAR ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 18:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-20 18:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-20 18:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-20 18:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-20 18:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-20 18:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-20 18:09:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:09:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 /home/kstipek/src/bluSky/application/classes/controller/login.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 14, Array)
#1 [internal function]: Controller_Login->action_login()
#2 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-20 18:09:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: post_page ~ APPPATH/views/login.php [ 5 ]
2012-11-20 18:09:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: post_page ~ APPPATH/views/login.php [ 5 ]
--
#0 /home/kstipek/src/bluSky/application/views/login.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 5, Array)
#1 /home/kstipek/src/bluSky/system/classes/kohana/view.php(61): include('/home/kstipek/s...')
#2 /home/kstipek/src/bluSky/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kstipek/s...', Array)
#3 /home/kstipek/src/bluSky/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-20 18:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-20 18:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-20 18:24:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-20 18:24:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-20 18:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-20 18:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-20 18:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-20 18:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-20 18:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-20 18:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-20 18:29:04 --- ERROR: View_Exception [ 0 ]: The requested view login_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-20 18:29:04 --- STRACE: View_Exception [ 0 ]: The requested view login_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/view.php(137): Kohana_View->set_filename('login_page')
#1 /home/kstipek/src/bluSky/system/classes/kohana/view.php(30): Kohana_View->__construct('login_page', NULL)
#2 /home/kstipek/src/bluSky/system/classes/kohana/controller/template.php(33): Kohana_View::factory('login_page')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-20 18:32:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:32:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 18:32:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:32:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 18:32:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ']' ~ APPPATH/classes/controller/login.php [ 15 ]
2012-11-20 18:32:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ']' ~ APPPATH/classes/controller/login.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 18:32:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:32:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 /home/kstipek/src/bluSky/application/classes/controller/login.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 14, Array)
#1 [internal function]: Controller_Login->action_login()
#2 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-20 18:33:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:33:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 /home/kstipek/src/bluSky/application/classes/controller/login.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 14, Array)
#1 [internal function]: Controller_Login->action_login()
#2 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-20 18:33:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:33:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 /home/kstipek/src/bluSky/application/classes/controller/login.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 14, Array)
#1 [internal function]: Controller_Login->action_login()
#2 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-20 18:34:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:34:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 /home/kstipek/src/bluSky/application/classes/controller/login.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 14, Array)
#1 [internal function]: Controller_Login->action_login()
#2 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-20 18:34:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: password ~ APPPATH/classes/controller/login.php [ 19 ]
2012-11-20 18:34:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: password ~ APPPATH/classes/controller/login.php [ 19 ]
--
#0 /home/kstipek/src/bluSky/application/classes/controller/login.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 19, Array)
#1 [internal function]: Controller_Login->action_login()
#2 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-20 18:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/test test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-20 18:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/test test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-20 18:36:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: post_page ~ APPPATH/views/login_page.php [ 5 ]
2012-11-20 18:36:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: post_page ~ APPPATH/views/login_page.php [ 5 ]
--
#0 /home/kstipek/src/bluSky/application/views/login_page.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 5, Array)
#1 /home/kstipek/src/bluSky/system/classes/kohana/view.php(61): include('/home/kstipek/s...')
#2 /home/kstipek/src/bluSky/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kstipek/s...', Array)
#3 /home/kstipek/src/bluSky/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-20 18:39:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: post_page ~ APPPATH/views/login_page.php [ 5 ]
2012-11-20 18:39:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: post_page ~ APPPATH/views/login_page.php [ 5 ]
--
#0 /home/kstipek/src/bluSky/application/views/login_page.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 5, Array)
#1 /home/kstipek/src/bluSky/system/classes/kohana/view.php(61): include('/home/kstipek/s...')
#2 /home/kstipek/src/bluSky/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kstipek/s...', Array)
#3 /home/kstipek/src/bluSky/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-20 18:39:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: post_page ~ APPPATH/views/login_page.php [ 5 ]
2012-11-20 18:39:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: post_page ~ APPPATH/views/login_page.php [ 5 ]
--
#0 /home/kstipek/src/bluSky/application/views/login_page.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 5, Array)
#1 /home/kstipek/src/bluSky/system/classes/kohana/view.php(61): include('/home/kstipek/s...')
#2 /home/kstipek/src/bluSky/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kstipek/s...', Array)
#3 /home/kstipek/src/bluSky/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-20 18:40:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: post_page ~ APPPATH/views/login_page.php [ 5 ]
2012-11-20 18:40:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: post_page ~ APPPATH/views/login_page.php [ 5 ]
--
#0 /home/kstipek/src/bluSky/application/views/login_page.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 5, Array)
#1 /home/kstipek/src/bluSky/system/classes/kohana/view.php(61): include('/home/kstipek/s...')
#2 /home/kstipek/src/bluSky/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kstipek/s...', Array)
#3 /home/kstipek/src/bluSky/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-20 18:48:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/login.php [ 29 ]
2012-11-20 18:48:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/login.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 18:48:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/login_page.php [ 11 ]
2012-11-20 18:48:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/login_page.php [ 11 ]
--
#0 /home/kstipek/src/bluSky/application/views/login_page.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 11, Array)
#1 /home/kstipek/src/bluSky/system/classes/kohana/view.php(61): include('/home/kstipek/s...')
#2 /home/kstipek/src/bluSky/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kstipek/s...', Array)
#3 /home/kstipek/src/bluSky/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-20 18:49:04 --- ERROR: ErrorException [ 1 ]: Call to undefined function is_set() ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 18:49:04 --- STRACE: ErrorException [ 1 ]: Call to undefined function is_set() ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 19:14:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 19:14:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 19:14:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 19:14:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 19:14:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-20 19:14:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 19:15:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/model/auth.php [ 11 ]
2012-11-20 19:15:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/model/auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 19:16:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_email ~ APPPATH/classes/model/auth.php [ 33 ]
2012-11-20 19:16:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_email ~ APPPATH/classes/model/auth.php [ 33 ]
--
#0 /home/kstipek/src/bluSky/application/classes/model/auth.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 33, Array)
#1 /home/kstipek/src/bluSky/application/classes/model/auth.php(17): Model_Auth->get_user_encrypted_password('test')
#2 /home/kstipek/src/bluSky/application/classes/model/auth.php(11): Model_Auth->valid_password('test', 'test')
#3 /home/kstipek/src/bluSky/application/classes/controller/login.php(23): Model_Auth->user('test', 'test')
#4 [internal function]: Controller_Login->action_login()
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-20 19:17:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_encrypt_password ~ APPPATH/classes/model/auth.php [ 17 ]
2012-11-20 19:17:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_encrypt_password ~ APPPATH/classes/model/auth.php [ 17 ]
--
#0 /home/kstipek/src/bluSky/application/classes/model/auth.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 17, Array)
#1 /home/kstipek/src/bluSky/application/classes/model/auth.php(11): Model_Auth->valid_password('test', 'test')
#2 /home/kstipek/src/bluSky/application/classes/controller/login.php(23): Model_Auth->user('test', 'test')
#3 [internal function]: Controller_Login->action_login()
#4 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-20 19:21:27 --- ERROR: ErrorException [ 1 ]: Call to undefined function encrypt() ~ APPPATH/classes/model/auth.php [ 19 ]
2012-11-20 19:21:27 --- STRACE: ErrorException [ 1 ]: Call to undefined function encrypt() ~ APPPATH/classes/model/auth.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-20 19:21:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Auth::$user_encrypt_password ~ APPPATH/classes/model/auth.php [ 19 ]
2012-11-20 19:21:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Auth::$user_encrypt_password ~ APPPATH/classes/model/auth.php [ 19 ]
--
#0 /home/kstipek/src/bluSky/application/classes/model/auth.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/kstipek/s...', 19, Array)
#1 /home/kstipek/src/bluSky/application/classes/model/auth.php(11): Model_Auth->valid_password('test@test.com', 'salt1111')
#2 /home/kstipek/src/bluSky/application/classes/controller/login.php(23): Model_Auth->user('test@test.com', 'salt1111')
#3 [internal function]: Controller_Login->action_login()
#4 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-20 19:30:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: post_data ~ APPPATH/views/login_page.php [ 10 ]
2012-11-20 19:30:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: post_data ~ APPPATH/views/login_page.php [ 10 ]
--
#0 /home/kstipek/src/bluSky/application/views/login_page.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 10, Array)
#1 /home/kstipek/src/bluSky/system/classes/kohana/view.php(61): include('/home/kstipek/s...')
#2 /home/kstipek/src/bluSky/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kstipek/s...', Array)
#3 /home/kstipek/src/bluSky/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-20 19:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-20 19:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#3 {main}