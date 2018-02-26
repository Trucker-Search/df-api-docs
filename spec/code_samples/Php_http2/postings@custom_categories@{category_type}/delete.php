<?php

$client = new http\Client;
$request = new http\Client\Request;

$request->setRequestUrl('https://www.directfreight.com/api/postings/custom_categories/%7Bcategory_type%7D');
$request->setRequestMethod('DELETE');
$request->setQuery(new http\QueryString(array(
  'category_id' => 'SOME_ARRAY_VALUE'
)));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();