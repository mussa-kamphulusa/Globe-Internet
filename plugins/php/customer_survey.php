<?php
    require_once "functions.php";

    $data = array();
    
    if (isset($_POST['branch'])) {
        $data['branch'] = sanitize_string($_POST['branch']);
    }

    if (isset($_POST['customer_name'])) {
        $data['name'] = sanitize_string($_POST['customer_name']);
    }

    if (isset($_POST['contact_number'])) {
        $data['number'] = sanitize_string($_POST['contact_number']);
    }

    if (isset($_POST['email'])) {
        $data['email'] = sanitize_string($_POST['email']);
    }

    if (isset($_POST['experience'])) {
        $data['experience'] = sanitize_string($_POST['experience']);
    }

    if (isset($_POST['service'])) {
        $data['service'] = sanitize_string($_POST['service']);
    }

    if (isset($_POST['speed'])) {
        $data['speed'] = sanitize_string($_POST['speed']);
    }

    if (isset($_POST['reliability'])) {
        $data['reliability'] = sanitize_string($_POST['reliability']);
    }

    if (isset($_POST['responsiveness'])) {
        $data['responsiveness'] = sanitize_string($_POST['responsiveness']);
    }

    if (isset($_POST['professionalism'])) {
        $data['professionalism'] = sanitize_string($_POST['professionalism']);
    }

    display_hash($data);
?>