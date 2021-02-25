# Get Started
```
git clone https://github.com/williamrmyers/px-for-wordpress-full-blob
```

### Install the dependencies with:
```
composer require perimeterx/php-sdk
```

Setup your ENV variables in the apache Config file.
```

SetEnv APP_ID {app_id}
SetEnv PX_TOKEN {token}

SetEnv PX_SECRET {secret}
```

### You can then require the px enforcer into your code.
```
<?php
  require 'px.php';
 ?>
```
