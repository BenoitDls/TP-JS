<?php
/**
 * Created by IntelliJ IDEA.
 * User: Benoît
 * Date: 14/03/2017
 * Time: 15:44
 */

// ajax_login.php

session_start();
header('Content-Type: application/json');
if(!empty($_POST['login']) && $_POST['login'] == 'root@tour.us' && !empty($_POST['password']) && $_POST['password'] == 'toor'){
    $_SESSION['connected'] = true;
    echo json_encode(['connected' => 'true']);
} else {
    echo json_encode(['connected' => 'false']);
}