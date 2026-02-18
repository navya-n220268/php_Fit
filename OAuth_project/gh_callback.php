<?php
session_start();

$client_id = "YOUR_CLIENT_ID";
$client_secret = "YOUR_CLIENT_SECRET";
$redirect_uri = "http://localhost/php_fitculture/OAuth_project/github_callback.php";

if (!isset($_GET['code'])) {
    die("GitHub Login Failed! No code received.");
}

$code = $_GET['code'];


$token_url = "https://github.com/login/oauth/access_token";

$post_data = [
    "client_id" => $client_id,
    "client_secret" => $client_secret,
    "code" => $code,
    "redirect_uri" => $redirect_uri
];

$ch = curl_init($token_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json"]);

$response = curl_exec($ch);
curl_close($ch);

$token_data = json_decode($response, true);

if (!isset($token_data['access_token'])) {
    die("GitHub Login Failed! Access token not received.<br><pre>$response</pre>");
}

$access_token = $token_data['access_token'];


$user_api_url = "https://api.github.com/user";

$ch = curl_init($user_api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "User-Agent: FitCultureApp",
    "Authorization: token $access_token"
]);

$user_response = curl_exec($ch);
curl_close($ch);

$user_data = json_decode($user_response, true);

if (!isset($user_data['login'])) {
    die("GitHub Login Failed! User data not received.<br><pre>$user_response</pre>");
}


$_SESSION['github_user'] = $user_data;


header("Location: ../dashboard.php");
exit();
?>
