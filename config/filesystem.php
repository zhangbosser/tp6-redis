<?php

return [
    // 默认磁盘
    'default' => env('filesystem.driver', 'local'),
    // 磁盘列表
    'disks' => [
        'local' => [
            'type' => 'local',
            'root' => app()->getRuntimePath() . 'storage',
        ],
        'public' => [
            // 磁盘类型
            'type' => 'local',
            // 磁盘路径
            'root' => app()->getRootPath() . 'public/storage',
            // 磁盘路径对应的外部URL路径
            'url' => '/storage',
            // 可见性
            'visibility' => 'public',
        ],
        // 更多的磁盘配置信息
    ],
    //七牛云配置项
    'qiniu' => [    //可以完全自定义的名称
        'type' => 'qiniu',   //可以自定义,实际上是类名小写
        'accessKey' => '',  //七牛云的配置,accessKey
        'secretKey' => '',//七牛云的配置,secretKey
        'bucket' => '',//七牛云的配置bucket空间名
        'domain' => '',//七牛云的配置,domain,域名
    ]
];
