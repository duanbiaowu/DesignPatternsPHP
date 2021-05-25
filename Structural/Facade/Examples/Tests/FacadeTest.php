<?php

namespace DesignPatterns\Structural\Facade\Examples\Tests;

use DesignPatterns\Structural\Facade\Examples\Facade;
use DesignPatterns\Structural\Facade\Examples\MySQlInstaller;
use DesignPatterns\Structural\Facade\Examples\NginxInstaller;
use DesignPatterns\Structural\Facade\Examples\PHPInstaller;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testInitNMPProcess()
    {
        $nginxInstaller = new NginxInstaller();
        $mysqlInstaller = new MySQlInstaller();
        $phpInstaller = new PHPInstaller();

        $facade = new Facade($nginxInstaller, $mysqlInstaller, $phpInstaller);

        $facade->installNMP();
        $facade->startNMP();

        $this->expectOutputString($nginxInstaller->install() .
            $mysqlInstaller->install() .
            $phpInstaller->install() .
            $nginxInstaller->start() .
            $mysqlInstaller->start() .
            $phpInstaller->start()
        );
    }
}
