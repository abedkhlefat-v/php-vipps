Test SDK with examples
==========

You can test different features supported by this SDK by simply starting PHP server:

```bash
$ php -S 0.0.0.0.8123
```

and visiting one of the php files in your browser, ex. http://127.0.0.1:8123/examples/authorization/01-token.php

But before you start make sure to create a config file in the /examples directory, ie.

```bash
$ touch examples/config.yml
```

and add required configuration

```bash
mode: test
client_id:
client_secret:
subscription_key:
merchant_serial_number:
```
Happy testing!
