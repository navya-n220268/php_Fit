<?php
include "config.php";

$google_auth_url = "https://accounts.google.com/o/oauth2/v2/auth?" . http_build_query([
    "client_id" => $google_client_id,
    "redirect_uri" => $google_redirect_uri,
    "response_type" => "code",
    "scope" => "email profile",
    "access_type" => "online"
]);

header("Location: $google_auth_url");
exit();
?>
