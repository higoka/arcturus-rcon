<?php

$hotelAlert = function (string $message, string $url = ''): string {
    return json_encode([
        'key' => 'hotelalert',
        'data' => [
            'message' => $message,
            'url' => $url,
        ],
    ]);
};

$disconnect = function (int $userId): string {
    return json_encode([
        'key' => 'disconnect',
        'data' => [
            'user_id' => $userId,
        ],
    ]);
};

$sendCredit = function (int $userId, int $credit): string {
    return json_encode([
        'key' => 'givecredits',
        'data' => [
            'user_id' => $userId,
            'credits' => $credit,
        ],
    ]);
};

$sendPixel = function (int $userId, int $pixel): string {
    return json_encode([
        'key' => 'givepixels',
        'data' => [
            'user_id' => $userId,
            'pixels' => $pixel,
        ],
    ]);
};

$sendPoint = function (int $userId, int $point): string {
    return json_encode([
        'key' => 'givepoints',
        'data' => [
            'user_id' => $userId,
            'points' => $point,
            'type' => 5,
        ],
    ]);
};

$sendBadge = function (int $userId, string $badgeName): string {
    return json_encode([
        'key' => 'givebadge',
        'data' => [
            'user_id' => $userId,
            'badge' => $badgeName,
        ],
    ]);
};

$sendGift = function (int $userId, int $itemId, string $message = ''): string {
    return json_encode([
        'key' => 'sendgift',
        'data' => [
            'user_id' => $userId,
            'itemid' => $itemId,
            'message' => $message,
        ],
    ]);
};
