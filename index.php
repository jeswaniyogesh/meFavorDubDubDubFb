<?php

   require 'config.php';

   $session = $facebook->getSession();


   $me = null;
   if ($session) {
     try {
       $uid = $facebook->getUser();
       $me = $facebook->api('/me');
     } catch (FacebookApiException $e) {
       error_log($e);
       $facebook->setSession(null);
     }
   }

   if ($me) {
      $logoutUrl = $facebook->getLogoutUrl(array(
         'next'=>'http://localhost/fb/logout.php'
      ));
   } else {
      $loginUrl = $facebook->getLoginUrl(array(
         'next'=>'http://localhost/fb/login.php'
      ));
   }

?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>php-sdk</title>
  </head>
  <body>
    <?php if ($me): ?>
    <?php echo "Welcome, ".$me['first_name']. ".<br />"; ?>
    <a href="<?php echo $logoutUrl; ?>">
      <img src="http://static.ak.fbcdn.net/rsrc.php/z2Y31/hash/cxrz4k7j.gif">
    </a>
    <?php else: ?>
      <a href="<?php echo $loginUrl; ?>">
       
	   You will be redirected to Facebook for Login!!!!
      </a>
    <?php endif ?>
  </body>
</html>
