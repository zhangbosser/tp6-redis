<?php
/**
 * Qiniu.php
 * 文件描述
 * Created on 2021/2/5 12:40
 * Created by Administrator
 * Ide PhpStorm
 */

namespace think\filesystem\driver;

use League\Flysystem\AdapterInterface;
use Overtrue\Flysystem\Qiniu\QiniuAdapter;
use think\filesystem\Driver;

class Qiniu extends Driver
{
    protected function createAdapter(): AdapterInterface
    {
        // TODO: Implement createAdapter() method.
        return new QiniuAdapter(
            $this->config['accessKey'],
            $this->config['secretKey'],
            $this->config['bucket'],
            $this->config['domain']
        );
    }
}