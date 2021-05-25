<?php


namespace DesignPatterns\Structural\Facade\Examples;


class MySQlInstaller implements Installer
{
    public function install()
    {
        return 'yum -y install mysql-community-server' . PHP_EOL;
    }

    public function start()
    {
        return 'systemctl start mysqld' . PHP_EOL;
    }
}