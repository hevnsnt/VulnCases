<?php
/*
Name: Simple Vulnerable Code Test
Description: This code doesn't really do anything except is extremely vulnerable to SQLi, XSS.
Version: 1.0
Author: Bill Swearingen with ChatGPT
*/
// SQLi Example
$var = $_POST['var'];
mysql_query("SELECT * FROM sometable WHERE id = $var");


// XSS Example
$var = $_POST['var'];
echo "<div>$var</div>\n";

// Redirect example:
if ($_SESSION['user_logged_in'] !== true) {
    header('Location: /login.php');
}

#file inclusion vulnerability:
$page = $_GET['page'];
include($page . '.php');

#Command Injection:
<?php
    $name = $_GET['name'];
    system('echo Hello ' . $name);
?>

#Remote Code Execution:
<?php
    $command = $_GET['command'];
    eval($command);
?>


#Potential memory leak
public class StaticTest {
    public static List<Double> list = new ArrayList<>();

    public void populateList() {
        for (int i = 0; i < 10000000; i++) {
            list.add(Math.random());
        }
        Log.info("Debug Point 2");
    }

    public static void main(String[] args) {
        Log.info("Debug Point 1");
        new StaticTest().populateList();
        Log.info("Debug Point 3");
    }
}