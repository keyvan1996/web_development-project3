<?php
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 'empty_username') {
            echo '<span style="color:red">Username is Empty!</span>';
        }

        if ($_GET['msg'] == 'empty_password') {
            echo '<span style="color:red">Password is Empty!</span>';
        }

        if ($_GET['msg'] == 'invalid_username') {
            echo '<span style="color:red">Username is Invalid!</span>';
        }

        if ($_GET['msg'] == 'invalid_password') {
            echo '<span style="color:red">Password is Invalid!</span>';
        }

        if ($_GET['msg'] == 'invalid') {
            echo '<span style="color:red">Your username or password is not correct, try again</span>';
        }
    }
?>