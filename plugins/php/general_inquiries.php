<?php
    require_once 'functions.php';

    $data = array();

    if (isset($_POST['full_name'])) {
        $data['name'] = sanitize_string($_POST['full_name']);
    }
    if (isset($_POST['email_address'])) {
        $data['email'] = sanitize_string($_POST['email_address']);
    }
    if (isset($_POST['message'])) {
        $data['message'] = sanitize_string($_POST['message']);
    }

    display_hash($data);
?>