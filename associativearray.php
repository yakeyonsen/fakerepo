// Redirect multiple urls
<?php
// list of urls and their redirect paths
$redirect_targets = array(
  'domain.com/news' => 'domain.com/en/news',
  'fr.domain.com' => 'domain.com/fr',
  'es.domain.com' => 'domain.com/es',
  'cn.domain.com' => 'domain.cn',
  'ru.domain.com' => 'domain.ru',
  'domain.com/product' => 'domain.com/en/product',
);
//if original url visited, redirect
if ( (isset($redirect_targets[ $_SERVER['REQUEST_URI'] ] ) ) && (php_sapi_name() != "cli") ) {
  echo 'https://'. $_SERVER['HTTP_HOST'] . $redirect_targets[ $_SERVER['REQUEST_URI'] ];
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://'. $_SERVER['HTTP_HOST'] . $redirect_targets[ $_SERVER['REQUEST_URI'] ]);

  }
  exit();

?>
