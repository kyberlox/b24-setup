<?php
return array(
  'utf_mode' => array(
    'value' => true,
    'readonly' => true,
  ),
  'debug' => array(
    'value' => true,  // Включаем режим отладки
    'readonly' => false,
  ),
  'connections' => [
    'value' => [
        'default' => [
            'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
            'host' => 'mysql',
            'database' => "bitrix",
            'login' => getenv('user'),
            'password' => getenv('pswd'),
            'options' => 2,
        ]
    ],
    'readonly' => true,
  ]
  'exception_handling' => array(
    'value' => array(
      'debug' => true,  // Показывать детали ошибок
      'handled_errors_types' => E_ALL,  // Все типы ошибок
      'exception_errors_types' => E_ALL,
      'log' => array(
        'settings' => array(
          'file' => '/var/www/bitrix/bitrix/logs/errors.log',
          'log_size' => 1000000,
        ),
      ),
    ),
    'readonly' => false,
  ),
);