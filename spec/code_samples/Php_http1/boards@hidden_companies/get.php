<?php

$request = new HttpRequest();
$request->setUrl('https://www.directfreight.com/api/boards/hidden_companies');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData(array(
  'company_name' => 'SOME_ARRAY_VALUE'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}