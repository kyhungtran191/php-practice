<?php 

    /** */
    echo "Cookies in Php";
    //save
    setcookie("name","Hoang", time()+ 24 * 3600);
    //unsave
    setcookie("name","",time() -  24 * 3600);
        if(isset($_COOKIE["name"])){
            echo "YES";
    }
    //session
    session_start();
    session_destroy();
?>