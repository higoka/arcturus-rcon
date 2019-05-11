<?php

require_once 'function.php';

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_connect($socket, 'YOUR_HOST', YOUR_PORT);
socket_write($socket, $sendBadge(1, 'ADM'));

$result = socket_read($socket, 2048);

socket_close($socket);
exit($result);
