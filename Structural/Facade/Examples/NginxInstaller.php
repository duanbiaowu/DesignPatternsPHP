<?php


namespace DesignPatterns\Structural\Facade\Examples;


class NginxInstaller implements Installer
{
    public function install()
    {
        return 'yum -y install nginx' . PHP_EOL;
    }

    public function start()
    {
        return 'systemctl start nginx' . PHP_EOL;
    }
}