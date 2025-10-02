<?php
$url = 'http://127.0.0.1:8000/profile';
$opts = [
    "http" => [
        "method" => "GET",
        "timeout" => 5,
    ]
];
$context = stream_context_create($opts);
$result = @file_get_contents($url, false, $context);
if ($result === false) {
    echo "FAILED to fetch $url\n";
    var_export($http_response_header ?? []);
    exit(1);
}
echo substr($result,0,500);
