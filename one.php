<?php 
session_start();

function setUsername(){
    if(isset($_GET['user'])){
        $_SESSION['user'] = $_GET['user'];
    }
}

function getUsername(){
  return $_SESSION['user'];
}

?>