<?php

function gittitle(){
    global $title;
    if(isset($title)){
        echo $title;
    }else{
        echo "default";
    }
}

function redirect($themsg, $url=null,$second=2){

    if($url === null){
        $url = 'index.php';
    }else{
    
    if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER'])){
        $url =$_SERVER['HTTP_REFERER'];
    }else{
        $url = 'index.php';
    }
    }
    
    
    echo $themsg;
    header("refresh:$second;url=$url");
    
    exit();
    }

?>