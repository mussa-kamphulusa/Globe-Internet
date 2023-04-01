<?php
    require_once 'functions.php';
    $covered_cities = array('blantyre', 'lilongwe', 'zomba', 'mzuzu');

    if (isset($_POST['city'])) {
        $search_city = strtolower(sanitize_string($_POST['city']));
    }

    $data = array();
    $response = array(
        'error' => "<span class='h6 text-danger'>Sorry, currently 
        there is no coverage support in $search_city.</span>",
        'success' => "<span class='h6 text-success'>Coverage 
        in $search_city is supported.</span>"
    );

    for ($i = 0; $i < count($covered_cities) ; $i++) {
        if ($covered_cities[$i] == $search_city) {
            $data['search results'] = $search_city;
        }
    }

    if (empty($data['search results'])) {
        $data['search results'] =  $response['error'];
    }
    else {
        $data['search results'] = $response['success'];
    }

    display_hash($data)
?>