<?php
    function showNoLoginMsg()
    {
        echo "Your username or password is not correct. try to login again.<br/>";

    }

        if(isset($_POST["user"]))
{
    echo "<div style='background-color:pink;border:red solid 1px;width:75%;margin:auto;'>";
    echo "Welcome ".$_SESSION['user']."<br/>";
    date_default_timezone_set("America/New_York");
    echo "Now is " . date("Y/m/d"). " ". date("h:i:sa"). "<br/>";
}
        echo "</div>";
        echo "<hr/>";
        echo "<div style='background-color:lightblue;border:red solid 1px;width:75%;margin:auto;'>";
        echo "Choose what you want do based on the following menu:";
        echo "<hr/>";
        echo "<input type=radio name='balance' value='balance'>"."Show my balance<br/>";
        echo "<input type=radio name='deposit' value='deposit'>"."Deposit this amount:<input type='number' name='student' value='0'><br/>";
        echo "<input type=radio name='withdraw' value='C'>"."Withdraw this amount:<input type='number' name='student' value='0'><br/>";
        echo "<input type=radio name='transactions' value='D'>"."Show my transactions<br/>";
        echo "<input type=radio name='password' value='E'>"."Change my password<br/>";
        echo "<input type=radio name='logout' value='F'>"."Log out<br/>";
        echo "<input type=submit name='submit' value='Submit'>";
        echo "</div>";
?>