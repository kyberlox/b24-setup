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
            'database' => getenv('MYSQL_DATABASE'),
            'login' => getenv('MYSQL_USER'),
            'password' => getenv('MYSQL_PASSWORD'),
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