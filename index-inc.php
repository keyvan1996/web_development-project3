<?php
    session_start();

    if (isset($_POST['login'])) {
        $source = 'index.php';
        $destination = 'system.php';

        if (isset($_POST['username'])) {
            $username = $_POST['username'];
        }

        if (isset($_POST['password'])) {
            // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $password = $_POST['password'];
        }

        // if (empty($username)) {
        //     header('Location: '.$source.'?msg=empty_username');
        // }

        // if (empty($password)) {
        //     header('Location: '.$source.'?msg=empty_password');
        // }

        // if ($username != 'admin') {
        //     header('Location: '.$source.'?msg=invalid_username&username='.$username);
        // }

        //  if ($password != password_hash('admin', PASSWORD_DEFAULT)) {
        // if ($password != 'admin') {
        //     header('Location: '.$source.'?msg=invalid_password&username='.$username);
        // }

        if($username == 'admin' && $password == 'admin') {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['balance'] = 0;
            $_SESSION['transactions'] = array();
            
            header('Location: '.$destination);

        } else { 
            header('Location: '.$source.'?msg=invalid&username='.$username);
        };

    } else {
        header('Location: '.$source);
    }
?>