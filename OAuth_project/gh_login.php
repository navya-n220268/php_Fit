<?php
session_start();

$client_id = "YOUR_GITHUB_CLIENT_ID";
$redirect_uri = "http://localhost/php_fitculture/OAuth_project/gh_callback.php";

$scope = "user";

$auth_url = "https://github.com/login/oauth/authorize?client_id=$client_id&redirect_uri=$redirect_uri&scope=$scope";


header("Location: " . $auth_url);
exit();
?>
