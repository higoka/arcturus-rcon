# arcturus-rcon
A simple PHP wrapper for Arcturus Emulator RCON.

### Installation
Just download and put it in your cms. 
Edit line 7 in index.php with the same RCON host and port which arcturus uses.

### Commands
```php
# Send a hotelAlert. Optionally with an URL.
$hotelAlert('message', 'url')

# Disconnect a user.
$disconnect(userId)

# Send credits to a user.
$sendCredit(userId, amount)

# Send pixels to a user. (aka. Duckets)
$sendPixel(userId, amount)

# Send points to a user. (aka. Diamonds)
$sendPoint(userId, amount)

# Send a badge to a user.
$sendBadge(userId, badgeName)

# Send a gift to a user. Optionally with a message.
$sendGift(userId, itemId, 'message')
```

### Example
Sending a hotelAlert.
```php
socket_write($socket, $hotelAlert('hello world'));
````

Giving a user 10k credits.
```php
socket_write($socket, $sendCredit(5, 10000));
````
