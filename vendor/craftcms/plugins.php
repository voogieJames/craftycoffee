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
  'craftcms/ckeditor' => 
  array (
    'class' => 'craft\\ckeditor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/ckeditor/src',
    'handle' => 'ckeditor',
    'aliases' => 
    array (
      '@craft/ckeditor' => $vendorDir . '/craftcms/ckeditor/src',
    ),
    'name' => 'CKEditor',
    'version' => '1.0.0-beta.2',
    'description' => 'Edit rich text content in Craft CMS using CKEditor.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/ckeditor',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/ckeditor/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/ckeditor/archive/master.zip',
  ),
  'craftcms/contact-form' => 
  array (
    'class' => 'craft\\contactform\\Plugin',
    'basePath' => $vendorDir . '/craftcms/contact-form/src',
    'handle' => 'contact-form',
    'aliases' => 
    array (
      '@craft/contactform' => $vendorDir . '/craftcms/contact-form/src',
    ),
    'name' => 'Contact Form',
    'version' => '2.2.2',
    'description' => 'Add a simple contact form to your Craft CMS site',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/contact-form',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/contact-form/v2/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/contact-form/archive/v2.zip',
    'components' => 
    array (
      'mailer' => 'craft\\contactform\\Mailer',
    ),
  ),
);
