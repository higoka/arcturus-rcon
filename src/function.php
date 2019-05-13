<?php

/**
 * Send a alert to all online users.
 *
 * @param string $message
 * @param string $url
 * @return string
 */
$hotelAlert = function (string $message, string $url = ''): string {
    return json_encode([
        'key' => 'hotelalert',
        'data' => [
            'message' => $message,
            'url' => $url,
        ],
    ]);
};

/**
 * Send a alert to all online staffs.
 *
 * @param string $message
 * @return string
 */
$staffAlert = function (string $message): string {
    return json_encode([
        'key' => 'staffalert',
        'data' => [
            'message' => $message,
        ],
    ]);
};

/**
 * Send a alert to a online user.
 *
 * @param int $userId
 * @param string $message
 * @return string
 */
$userAlert = function (int $userId, string $message): string {
    return json_encode([
        'key' => 'alertuser',
        'data' => [
            'user_id' => $userId,
            'message' => $message,
        ],
    ]);
};

/**
 * Mute a online user.
 *
 * @param int $userId
 * @param int $duration
 * @return string
 */
$mute = function (int $userId, int $duration): string {
    return json_encode([
        'key' => 'muteuser',
        'data' => [
            'user_id' => $userId,
            'duration' => $duration,
        ],
    ]);
};

/**
 * Disconnect a online user.
 *
 * @param int $userId
 * @return string
 */
$disconnect = function (int $userId): string {
    return json_encode([
        'key' => 'disconnect',
        'data' => [
            'user_id' => $userId,
        ],
    ]);
};

/**
 * Send credits to a online user.
 *
 * @param int $userId
 * @param int $amount
 * @return string
 */
$sendCredit = function (int $userId, int $amount): string {
    return json_encode([
        'key' => 'givecredits',
        'data' => [
            'user_id' => $userId,
            'credits' => $amount,
        ],
    ]);
};

/**
 * Send pixels to a online user.
 *
 * @param int $userId
 * @param int $amount
 * @return string
 */
$sendPixel = function (int $userId, int $amount): string {
    return json_encode([
        'key' => 'givepixels',
        'data' => [
            'user_id' => $userId,
            'pixels' => $amount,
        ],
    ]);
};

/**
 * Send points to a online user.
 *
 * @param int $userId
 * @param int $amount
 * @return string
 */
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

/**
 * Send a badge to a online user.
 *
 * @param int $userId
 * @param string $badgeName
 * @return string
 */
$sendBadge = function (int $userId, string $badgeName): string {
    return json_encode([
        'key' => 'givebadge',
        'data' => [
            'user_id' => $userId,
            'badge' => $badgeName,
        ],
    ]);
};

/**
 * Send a gift to a online user.
 *
 * @param int $userId
 * @param int $itemId
 * @param string $message
 * @return string
 */
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
