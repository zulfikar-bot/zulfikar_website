<?php
    $error_file = isset($_GET['error_file']) ? "(" . $_GET['error_file'] . ")"  : '';
    $error_image = isset($_GET['error_image']) ? $_GET['error_image']  : '';
    $error_code = http_response_code();

    echo "<div style='text-align: center;'>";

    switch ($error_code) {
        case 400:
            echo "<img src='path/to/your/400_error_image.jpg' alt='Error 400'>";
            echo "<h1>Error 400: Bad Request</h1>";
            break;
        case 401:
            echo "<img src='path/to/your/401_error_image.jpg' alt='Error 401'>";
            echo "<h1>Error 401: Unauthorized</h1>";
            break;
        case 403:
            echo "<img src='path/to/your/403_error_image.jpg' alt='Error 403'>";
            echo "<h1>Error 403: Forbidden</h1>";
            break;
        case 404:
            echo "<img src='$error_image' width='100%' height='100%' alt='Error 404'/>";
            echo "<h1>Error 404: Not Found<br>$error_file</h1>";
            break;
        case 500:
            echo "<img src='path/to/your/500_error_image.jpg' alt='Error 500'>";
            echo "<h1>Error 500: Internal Server Error</h1>";
            break;
        case 502:
            echo "<img src='path/to/your/502_error_image.jpg' alt='Error 502'>";
            echo "<h1>Error 502: Bad Gateway</h1>";
            break;
        case 503:
            echo "<img src='path/to/your/503_error_image.jpg' alt='Error 503'>";
            echo "<h1>Error 503: Service Unavailable</h1>";
            break;
        case 504:
            echo "<img src='path/to/your/504_error_image.jpg' alt='Error 504'>";
            echo "<h1>Error 504: Gateway Timeout</h1>";
            break;
        // tambahkan kasus error lainnya di sini
        default:
            echo "<img src='path/to/your/default_error_image.jpg' alt='Error'>";
            echo "<h1>Terjadi kesalahan.</h1>";
    }

    echo "</div>";
?>
