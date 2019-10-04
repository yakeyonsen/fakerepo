// Redirect multiple urls
<?php
// list of urls and their redirect paths
$redirect_old = array(
  'domain.com/news' => '1',
  'fr.domain.com' => '2',
  'es.domain.com' => '3',
  'cn.domain.com' => '4',
  'ru.domain.com' => '5',
  'domain.com/product' => '6',
);
//if original url visited, redirect
if ( (isset($redirect_targets[ $_SERVER['REQUEST_URI'] ] ) ) && (php_sapi_name() != "cli") ) {
  echo 'https://'. $_SERVER['HTTP_HOST'] . $redirect_targets[ $_SERVER['REQUEST_URI'] ];
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://'. $_SERVER['HTTP_HOST'] . $redirect_targets[ $_SERVER['REQUEST_URI'] ]);

  }
  exit();

?>
