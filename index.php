<?php
    if(session_start()){
        header("Location: Auth.php");
    }else{
        header("Location: loginform.php");
    }
?>