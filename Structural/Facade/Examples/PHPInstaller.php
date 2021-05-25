<?php


namespace DesignPatterns\Structural\Facade\Examples;


class PHPInstaller implements Installer
{
    public function install()
    {
        return 'yum -y install php72 php72-fpm' . PHP_EOL;
    }

    public function start()
    {
        return 'systemctl start php-fpm' . PHP_EOL;
    }
}