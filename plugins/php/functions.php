<?php
    function sanitize_string($var) {
        $var = strip_tags($var);
        $var = stripslashes($var);
        $var = htmlentities($var);
        return $var;
    }

    function display_hash($hashing) {
        echo <<<_END
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Hashing Data</title>
            <link href="../bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
            <style type="text/css">
                .bold {
                    font-weight: bold;
                    display: inline-block;
                    width: 135px;
                    //text-align: right;
                    text-transform: capitalize;
                }
                .center {
                    float: right;
                    display: inline-block;
                    width: 10px;
                }
            </style>
        </head>
        <body>
                <div class="display-6 p-3 text-bg-dark">
                    Submitted Data
                </div>
                <div class="container-fluid pt-3">
        _END;

        foreach ($hashing as $item => $data) {
            echo "<p class='text-darj'><span class='bold'>$item
            <span class='center'>:</span></span>$data</p>";
        }

        echo "</div></html>";
    }
?>