<?php

namespace EasySoapClient\ValueObject;


class ProxyOptions
{

    /**
     * @var string
     */
    private $host;

    /**
     * @var int
     */
    private $port;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * ProxyOptions constructor.
     * @param string $host
     * @param int $port
     * @param string $login
     * @param string $password
     */
    public function __construct($host, $port, $login, $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->login = $login;
        $this->password = $password;
    }

    public function getProxy()
    {
        return [
            'proxy_host'     => $this->host,
            'proxy_port'     => $this->port,
            'proxy_login'    => $this->login,
            'proxy_password' => $this->password,
        ];
    }
    
}
