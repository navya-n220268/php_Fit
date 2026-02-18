<?php
include "config.php";

if(isset($_GET["code"])) {

    $code = $_GET["code"];

    $token_url = "https://oauth2.googleapis.com/token";

    $post_data = [
        "code" => $code,
        "client_id" => $google_client_id,
        "client_secret" => $google_client_secret,
        "redirect_uri" => $google_redirect_uri,
        "grant_type" => "authorization_code"
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $token_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $token_data = json_decode($response, true);

    if(isset($token_data["access_token"])) {
        $access_token = $token_data["access_token"];

        // Get User Info
        $user_info_url = "https://www.googleapis.com/oauth2/v2/userinfo";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $user_info_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer $access_token"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $user_response = curl_exec($ch);
        curl_close($ch);

        $user_data = json_decode($user_response, true);

        $_SESSION["user"] = $user_data;

        header("Location: ../dashboard.php");
        exit();
    }
}
echo "Google Login Failed!";
?>
