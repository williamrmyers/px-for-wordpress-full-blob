<?php
  require __DIR__ . '/vendor/autoload.php';
  use Perimeterx\Perimeterx;
  // echo $Perimeterx;
  $APP_ID = getenv('APP_ID');
  $PX_TOKEN = getenv('PX_TOKEN');
  $PX_SECRET = getenv('PX_SECRET');

  $perimeterxConfig = [
      'app_id' => $APP_ID,
      'cookie_key' => $PX_SECRET,
      'auth_token' =>  $PX_TOKEN,
      'blocking_score' => 80,
      'module_mode' => Perimeterx::$ACTIVE_MODE,
      'custom_logo' => 'https://s.perimeterx.net/logo.png',
      'js_ref' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
  ];

  /* Obtain PerimeterX SDK instance */
  $px = Perimeterx::Instance($perimeterxConfig);

  /* run verify at the beginning of a page request */
  $px->pxVerify();
?>
