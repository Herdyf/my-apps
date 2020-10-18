<?php

// 
// Requires "guzzle" to be installed (see guzzlephp.org)

$client = new GuzzleHttp\Client();
$res = $client->post('https://api.remove.bg/v1.0/removebg', [
    'multipart' => [
        [
            'name'     => 'image_url',
            'contents' => 'https://www.remove.bg/example.jpg'
        ],
        [
            'name'     => 'size',
            'contents' => 'auto'
        ]
    ],
    'headers' => [
        'X-Api-Key' => 'aeSniUZfVyPNhJULrvzpmh2w'
    ]
]);

$fp = fopen("no-bg.png", "wb");
fwrite($fp, $res->getBody());
fclose($fp);
