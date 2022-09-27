<?php 
//including the links and there informations
include 'route/web.php';
//geting the url
$request = $_SERVER['REQUEST_URI'];
//getting the page
function getPage($request , $routs){
    foreach ($routs as $key => $rout){
        if($request === $key){
           $title =  $rout['title'];
           $view =  $rout['view'];
           if($rout['controller']){
            $controller = $rout['controller'];
           }else{
            $controller = null;
           }
           return compact('title','view','controller');
        }
    }
}
$page = getPage($request , $routs);
//check if the rout exist 
if(isset($page)){
    render($page['title'],$page['view'], $page['controller']);
}else{
    render('error','errors/404.php');
}
?>