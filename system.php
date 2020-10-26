<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}

echo '<div style="background-color:pink;border:red solid 1px;width:75%;margin:auto;">';

if (isset($_POST['choice'])) {
    if ($_POST['choice'] == 'balance') {
        echo 'Your Balance is: '.$_SESSION['balance'].'$';

    } elseif ($_POST['choice'] == 'deposit') {

        $info = array();
        $info['type'] = 'Deposite';
        $info['amount'] = $_POST['deposit_amount'];
        $info['date'] = date('Y/m/d');
        $info['time'] = date('h:i:sa');
        $info['ip'] = $_SERVER['REMOTE_ADDR'];

        array_push($_SESSION['transactions'], $info);
        $_SESSION['balance'] = $_SESSION['balance'] + $_POST['deposit_amount'];
        echo 'Now, Your Balance is: '.$_SESSION['balance'].'$';

    } elseif ($_POST['choice'] == 'withdraw') {

        $info = array();
        $info['type'] = 'Withdraw';
        $info['amount'] = $_POST['withdraw_amount'];
        $info['date'] = date('Y/m/d');
        $info['time'] = date('h:i:sa');
        $info['ip'] = $_SERVER['REMOTE_ADDR'];
        array_push($_SESSION['transactions'], $info);

        $_SESSION['balance'] = $_SESSION['balance'] - $_POST['withdraw_amount'];
        echo 'Now, Your Balance is: '.$_SESSION['balance'].'$';

    } elseif ($_POST['choice'] == 'transactions') {
        foreach ($_SESSION['transactions'] as $key => $value) {
            echo ($key + 1).'. '.$value['type'].': $'.$value['amount'].', on '.$value['date'].', at '.$value['time'].', from '.$value['ip'].'<br>';
        };
    } elseif ($_POST['choice'] == 'password') {
        echo '<div>';
        echo '<form method="POST" action="">';
        echo '<label for="old_password">Old Password</label>';
        echo '<input type="text" name="old_password">';
        echo '<br>';
        echo '<label for="new_password_1">New Password</label>';
        echo '<input type="text" name="new_password_1">';
        echo '<br>';
        echo '<label for="new_password_2">Re-type New Password</label>';
        echo '<input type="text" name="new_password_2">';
        echo '<br>';
        echo '<input type="submit" value="Change Password"';
        echo '</form';
        echo '</div>';
        echo '</div>';
    } elseif ($_POST['change_password']) {
        echo '';

    } elseif ($_POST['choice'] == 'logout') {
        session_unset();
        session_destroy();
        header('Location: index.php');
    }
} else {
    echo '<span>Welcome '.$_SESSION['username'].'</span>';
    echo '<br>';
    date_default_timezone_set("America/New_York");
    echo '<span>Now is '.date("Y/m/d h:i:sa").'</span>';
}

echo '</div>';
?>

<br>

<div style='background-color:lightblue;border:red solid 1px;width:75%;margin:auto;'>
    <form method='POST' action=''>
        <div>
            <span>Choose what you want do based on the following menu:</span>
        </div>

        <hr/>

        <div>
            <input type=radio name='choice' value='balance'>Show my balance<br/>
            <input type=radio name='choice' value='deposit'>Deposit this amount:
            <input type='number' name='deposit_amount' default=0><br/>
            <input type=radio name='choice' value='withdraw'>Withdraw this amount:
            <input type='number' name='withdraw_amount' default=0><br/>
            <input type=radio name='choice' value='transactions'>Show my transactions<br/>
            <input type=radio name='choice' value='password'>Change my password<br/>
            <input type=radio name='choice' value='logout'>Log out<br/>
        </div>

        <div>
            <input type=submit name='submit' value='Submit'>
        </div>
    </form>
</div>

