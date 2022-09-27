<?php
$GLOBALS['views'] = 'app\resources\views';
$GLOBALS['controller'] = 'app\http\controller';
$GLOBALS['layouts'] = 'app\resources\views\layouts';
include $GLOBALS['layouts'].'\header.php';
function render($titel, $view, $controller = null){
    titel($titel);
    echo "</head>";
    include $GLOBALS['layouts'].'\nav.php';
    echo "<div class=\"py-3\">";
    if($controller){
        include $GLOBALS['controller']."/".$controller;
    }
    include $GLOBALS['views']."/".$view;
};
include 'route.php';
?>
