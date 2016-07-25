PHP Nginx Status Parser
===
[![Build Status](https://travis-ci.org/svenkuegler/php-nginx-status-parser.svg)](https://travis-ci.org/svenkuegler/php-nginx-status-parser) 
[![Code Climate](https://codeclimate.com/github/svenkuegler/php-nginx-status-parser/badges/gpa.svg)](https://codeclimate.com/github/svenkuegler/php-nginx-status-parser) 
[![Test Coverage](https://codeclimate.com/github/svenkuegler/php-nginx-status-parser/badges/coverage.svg)](https://codeclimate.com/github/svenkuegler/php-nginx-status-parser/coverage) 

## Installation

via Composer:
```bash
composer require svenkuegler/php-nginx-status-parser
```

## Usage

### Quick Start

```php
require 'vendor/autoload.php';

$p = new NginxStatusParser("http://127.0.0.1/nginx_status");
$nginxStatus = $p->parse();

var_dump($nginxStatus);
```

### Exception handling
...

## Running Tests
```bash
$ phpunit
```

## Contributing
Feel free to send pull requests or create issues if you come across problems or have great ideas. Any input is appreciated!

## License
This code is published under the [The MIT License](https://github.com/svenkuegler/php-nginx-status-parser/blob/HEAD/LICENSE). This means you can do almost anything with it, as long as the copyright notice and the accompanying license file is left intact.