<?php

$provider = require_once __DIR__.'/../bootstrap/initWithFabric.php';
$signatureRequestEntity = new \aslikeyou\OAuth2\Client\Provider\SignatureRequest($provider);

$e = $signatureRequestEntity->delete('4239');
dd($e);
