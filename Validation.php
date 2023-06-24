<?php

$id = $_POST['id'];
$password = $_POST['password'];
// $account = $_POST['account'];
// var_dump($_POST);

//redirect in another page
if ($id=="github"&&$password=="tiktokpanel") {
    header("Location:dashboard.html");
    exit;
}
else{
    echo "<h3>OOPs! Invalid id or password!</h3><a href='login.php'>Go Back</a>";
}

?>