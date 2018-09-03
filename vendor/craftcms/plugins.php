<?php

$vendorDir = dirname(__DIR__);

return array (
  'originas/contactz' => 
  array (
    'class' => 'originas\\contactz\\Contactz',
    'basePath' => $vendorDir . '/originas/contactz/src',
    'handle' => 'contactz',
    'aliases' => 
    array (
      '@originas/contactz' => $vendorDir . '/originas/contactz/src',
    ),
    'name' => 'Contactz',
    'version' => '1.0.0',
    'description' => 'Cool stuff build with Craft 3',
    'developer' => 'voogieJames',
    'developerUrl' => 'https://origin.no',
    'documentationUrl' => 'http://nullpointer.no',
    'changelogUrl' => '???',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
);
