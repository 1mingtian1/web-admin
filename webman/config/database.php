<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

return [
    // 默认数据库
    'default' => 'mysql',
    // 各种数据库配置
    'connections' => [

        'mysql' => [
            // 数据库类型
            'driver'      => env('database.type', 'mysql'),
            'host'        => env('database.host', '127.0.0.1'),
            'port'        => env('database.port', '3306'),
            'database'    => env('database.database', ''),
            'username'    => env('database.username', ''),
            'password'    => env('database.password', ''),
            'unix_socket' => '',
            'charset'     => 'utf8',
            'collation'   => 'utf8_unicode_ci',
            'prefix'      => env('database.prefix', '127.0.0.1'),
            'strict'      => true,
            'engine'      => null,
        ],
    ]

    ];
