<?php

it('connect', function () {
    $client = client();
    $contentUrl = 'https://raw.githubusercontent.com/Azure-Samples/cognitive-services-REST-api-samples/master/curl/form-recognizer/sample-layout.pdf';
    $url = $client->analyze($contentUrl, 'prebuilt-layout');
    do {
        $response = $client->analyzeResult($url);
    } while ($response->status === 'running');
})->throwsNoExceptions();
