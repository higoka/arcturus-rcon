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

$sendCredit = function (int $userId, int $amount): string {
    return json_encode([
        'key' => 'givecredits',
        'data' => [
            'user_id' => $userId,
            'credits' => $amount,
        ],
    ]);
};

$sendPixel = function (int $userId, int $amount): string {
    return json_encode([
        'key' => 'givepixels',
        'data' => [
            'user_id' => $userId,
            'pixels' => $amount,
        ],
    ]);
};

$sendPoint = function (int $userId, int $amount): string {
    return json_encode([
        'key' => 'givepoints',
        'data' => [
            'user_id' => $userId,
            'points' => $amount,
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
