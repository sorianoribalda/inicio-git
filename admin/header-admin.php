<?php 
    session_start();
    if(!isset($_SESSION['autenticacion']) && $_SESSION['autenticacion'] !== 'si'){
        header('location:../login');
    }