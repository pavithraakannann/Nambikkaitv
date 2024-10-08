<?php
session_start();

$data = json_decode(file_get_contents('php://input'), true);
if (isset($data['captchaValue'])) {
    $_SESSION['captcha_value'] = $data['captchaValue'];
}
