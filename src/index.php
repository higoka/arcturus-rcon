<?php

require_once 'function.php';

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_connect($socket, 'YOUR_HOST', YOUR_PORT);
socket_write($socket, $hotelAlert('hello world'));

$result = socket_read($socket, 2048);

socket_close($socket);
exit($result);

# $hotelAlert('message', 'url') // optional url
# $disconnect(userId)
# $sendCredit(userId, amount)
# $sendPixel(userId, amount)
# $sendPoint(userId, amount)
# $sendBadge(userId, badgeName)
# $sendGift(userId, itemId, 'message') // optional message
