<?php
// Constante base URL 
define('BASE_URI', str_replace('\\', '/', substr(__DIR__,strlen($_SERVER['DOCUMENT_ROOT']))));
// echo basename(__DIR__);

require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
$app = new \Core\Core();
$app->run();

// echo params;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

// echo "<pre>";
// var_dump($_POST); 
// echo '<br/>';
// var_dump($_GET);
// echo '<br/>';
// var_dump($_SERVER); 
// echo"</pre>";
