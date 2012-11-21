<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-21 05:38:00 --- ERROR: ErrorException [ 1 ]: Call to undefined function curl_init() ~ MODPATH/twitter/tmhOAuth.php [ 589 ]
2012-11-21 05:38:00 --- STRACE: ErrorException [ 1 ]: Call to undefined function curl_init() ~ MODPATH/twitter/tmhOAuth.php [ 589 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 05:39:24 --- ERROR: ErrorException [ 1 ]: Call to undefined function curl_init() ~ MODPATH/twitter/tmhOAuth.php [ 589 ]
2012-11-21 05:39:24 --- STRACE: ErrorException [ 1 ]: Call to undefined function curl_init() ~ MODPATH/twitter/tmhOAuth.php [ 589 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 05:39:25 --- ERROR: ErrorException [ 1 ]: Call to undefined function curl_init() ~ MODPATH/twitter/tmhOAuth.php [ 589 ]
2012-11-21 05:39:25 --- STRACE: ErrorException [ 1 ]: Call to undefined function curl_init() ~ MODPATH/twitter/tmhOAuth.php [ 589 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 05:41:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/twitter.php [ 23 ]
2012-11-21 05:41:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/twitter.php [ 23 ]
--
#0 /home/kstipek/src/bluSky/application/classes/model/twitter.php(23): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kstipek/s...', 23, Array)
#1 /home/kstipek/src/bluSky/application/classes/controller/twitter.php(18): Model_Twitter->get_tweets('kenstipek')
#2 [internal function]: Controller_Twitter->action_twitter()
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Twitter))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-21 00:20:40 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Request::is_ajax() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-21 00:20:40 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Request::is_ajax() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 /home/kstipek/src/bluSky/application/classes/controller/login.php(14): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/kstipek/s...', 14, Array)
#1 [internal function]: Controller_Login->action_login()
#2 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 00:21:10 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Request::is_ajax() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/login.php [ 14 ]
2012-11-21 00:21:10 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Request::is_ajax() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/login.php [ 14 ]
--
#0 /home/kstipek/src/bluSky/application/classes/controller/login.php(14): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/kstipek/s...', 14, Array)
#1 [internal function]: Controller_Login->action_login()
#2 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 09:01:31 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/twitter.php [ 23 ]
2012-11-21 09:01:31 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/twitter.php [ 23 ]
--
#0 /home/kstipek/src/bluSky/application/classes/controller/twitter.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/home/kstipek/s...', 23, Array)
#1 [internal function]: Controller_Twitter->action_twitter()
#2 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Twitter))
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 09:02:45 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/twitter.php [ 23 ]
2012-11-21 09:02:45 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/twitter.php [ 23 ]
--
#0 /home/kstipek/src/bluSky/application/classes/controller/twitter.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/home/kstipek/s...', 23, Array)
#1 [internal function]: Controller_Twitter->action_twitter()
#2 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Twitter))
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 09:06:57 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/twitter.php [ 23 ]
2012-11-21 09:06:57 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/twitter.php [ 23 ]
--
#0 /home/kstipek/src/bluSky/application/classes/controller/twitter.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/home/kstipek/s...', 23, Array)
#1 [internal function]: Controller_Twitter->action_twitter()
#2 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Twitter))
#3 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 09:43:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/model/auth.php [ 23 ]
2012-11-21 09:43:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/model/auth.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 09:43:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/model/auth.php [ 22 ]
2012-11-21 09:43:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/model/auth.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 09:44:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/model/auth.php [ 22 ]
2012-11-21 09:44:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/classes/model/auth.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 09:47:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: show_alert ~ APPPATH/views/login_page.php [ 20 ]
2012-11-21 09:47:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: show_alert ~ APPPATH/views/login_page.php [ 20 ]
--
#0 /home/kstipek/src/bluSky/application/views/login_page.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 20, Array)
#1 /home/kstipek/src/bluSky/system/classes/kohana/view.php(61): include('/home/kstipek/s...')
#2 /home/kstipek/src/bluSky/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kstipek/s...', Array)
#3 /home/kstipek/src/bluSky/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-21 09:47:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: show_alert ~ APPPATH/views/login_page.php [ 20 ]
2012-11-21 09:47:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: show_alert ~ APPPATH/views/login_page.php [ 20 ]
--
#0 /home/kstipek/src/bluSky/application/views/login_page.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kstipek/s...', 20, Array)
#1 /home/kstipek/src/bluSky/system/classes/kohana/view.php(61): include('/home/kstipek/s...')
#2 /home/kstipek/src/bluSky/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kstipek/s...', Array)
#3 /home/kstipek/src/bluSky/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/kstipek/src/bluSky/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/kstipek/src/bluSky/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kstipek/src/bluSky/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kstipek/src/bluSky/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-21 10:42:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH/classes/model/twitter.php [ 41 ]
2012-11-21 10:42:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH/classes/model/twitter.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 10:42:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH/classes/model/twitter.php [ 41 ]
2012-11-21 10:42:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH/classes/model/twitter.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 10:42:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH/classes/model/twitter.php [ 41 ]
2012-11-21 10:42:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH/classes/model/twitter.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 10:43:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH/classes/model/twitter.php [ 41 ]
2012-11-21 10:43:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH/classes/model/twitter.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}