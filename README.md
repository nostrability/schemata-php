# schemata-php

[![Test](https://github.com/nostrability/schemata-php/actions/workflows/test.yml/badge.svg)](https://github.com/nostrability/schemata-php/actions/workflows/test.yml)

PHP data package for [Nostr](https://nostr.com/) protocol JSON schemas.

## Usage
```php
use Nostrability\Schemata\Schemata;
$schema = Schemata::get('kind1Schema');
$keys = Schemata::keys();
```

## License
GPL-3.0-or-later
