<?php
include 'mqttSet.inc.php';

class Mqtt
{
    protected $server;
    protected $port;
    protected $username;
    protected $password;
    protected $client_id;

    protected function setmqtt()
    {
        $this->server = "192.168.1.6";
        $this->port = "1883";
        $this->username = "car";
        $this->password = "123456";
        $this->client_id = "phpMQTT-publisher_1239u31231233";

        $mqtt = new phpMQTT($this->server, $this->port, $this->client_id);
        return $mqtt;
    }
}