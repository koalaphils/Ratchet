<?php
namespace Ratchet\WebSocket;
use Ratchet\ConnectionInterface;

interface PingPongInterface
{
    public function onPing(ConnectionInterface $connection);
}
