<?php

$config = require_once __DIR__ . '/config.php';

$auth_users = [
    $config['auth']['username'] => password_hash($config['auth']['password'], PASSWORD_DEFAULT),
];

require_once __DIR__ . '/core/files.php';