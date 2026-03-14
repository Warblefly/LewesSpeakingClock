<?php
// time.php - return server UTC time in milliseconds since Unix epoch

// Ensure we are using UTC
date_default_timezone_set('UTC');

// microtime(true) gives seconds as float; multiply to get ms
$utcMillis = (int) round(microtime(true) * 1000);

// Output JSON
header('Content-Type: application/json');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');

echo json_encode([
    'utcMillis' => $utcMillis
]);
