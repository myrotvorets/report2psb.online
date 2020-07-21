<?php

namespace Myrotvorets;

use Myrotvorets\Handler\Index;
use Myrotvorets\Handler\Login;
use Myrotvorets\Handler\Logout;
use Myrotvorets\Handler\Heartbeat;
use Myrotvorets\Handler\Start;
use Myrotvorets\Handler\Success;
use Myrotvorets\Handler\Submit;
use Myrotvorets\Handler\Verify;
use Myrotvorets\Middleware\CloudflareIpRewrite;
use Slim\App;
use Slim\Container;

class Application extends App
{
    public function initialize()
    {
        session_start();
        $this->setUpDI($this->getContainer());
        $this->setUpMiddleware();
        $this->setUpRoutes();
    }

    protected function setUpDI(Container $c)
    {
        $provider = new ServicesProvider();
        $provider->register($c);
    }

    protected function setUpMiddleware()
    {
        $this->add(new CloudflareIpRewrite($this));
    }

    protected function setUpRoutes()
    {
        $this->get('/',           new Index($this));
        $this->get('/start',      new Start($this));
        $this->get('/success',    new Success($this));
        $this->get('/login',      new Login($this));
        $this->get('/verify',     new Verify($this));
        $this->get('/logout',     new Logout($this));
        $this->post('/heartbeat', new Heartbeat($this));
        $this->post('/submit',    new Submit($this));
    }
}
