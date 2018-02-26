<?php

$request = new HttpRequest();
$request->setUrl('https://www.directfreight.com/api/boards/hidden_entries');
$request->setMethod(HTTP_METH_DELETE);

$request->setQueryData(array(
  'entry_id' => 'SOME_STRING_VALUE'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}