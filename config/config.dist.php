<?php

return [
    'displayErrorDetails'    => false,
    'addContentLengthHeader' => false,
    'auth0'                  => [
        'domain'       => '',
        'clientid'     => '',
        'clientsecret' => '',
        'login'        => '',
        'verify'       => '',
        'logout'       => '',
    ],
    'recaptcha'              => [
        'sitekey'  => '',
        'secret'   => '',
    ],
    'mailer'                 => [
        'from'     => '',
        'sender'   => '',
        'to'       => '',
        'host'     => '',
        'helo'     => '',
        'port'     => 587,
        'secure'   => 'tls',
        'smtpauth' => true,
        'username' => '',
        'password' => '',
    ],
];
