<?php


namespace DesignPatterns\Structural\Facade\Examples;


class Facade
{
    private NginxInstaller $nginxInstaller;

    private MySQlInstaller $mysqlInstaller;

    private PHPInstaller $phpInstaller;

    /**
     * LNMPFacade constructor.
     * @param NginxInstaller $nginxInstaller
     * @param MySQlInstaller $mysqlInstaller
     * @param PHPInstaller $phpInstaller
     */
    public function __construct(NginxInstaller $nginxInstaller, MySQlInstaller $mysqlInstaller, PHPInstaller $phpInstaller)
    {
        $this->nginxInstaller = $nginxInstaller;
        $this->mysqlInstaller = $mysqlInstaller;
        $this->phpInstaller = $phpInstaller;
    }

    public function installNMP()
    {
        // echo() will be replaced by exec() in the real world
        echo $this->nginxInstaller->install();
        echo $this->mysqlInstaller->install();
        echo $this->phpInstaller->install();
    }

    public function startNMP()
    {
        // echo() will be replaced by exec() in the real world
        echo $this->nginxInstaller->start();
        echo $this->mysqlInstaller->start();
        echo $this->phpInstaller->start();
    }
}