
# PHP Package Seed

PHP library / package / project starting bundle. Helps to keep coding standards (default PSR-2  but you can change) and contains predefined unit testing and code-coverage configuration for quick start of your TDD.

[![Travis](https://img.shields.io/travis/omachala/php-package-seed.svg)](https://travis-ci.org/omachala/php-package-seed)
[![Coveralls github](https://img.shields.io/coveralls/github/omachala/php-package-seed.svg)](https://coveralls.io/github/omachala/php-package-seed)

## Key Features
- [PHPUnit](https://phpunit.de/) & [Mockery](http://docs.mockery.io)
- [Code Sniffer, Beautifier and Fixer](https://github.com/squizlabs/PHP_CodeSniffer)
- [TravisCI](https://travis-ci.org/) and [Coveralls](https://coveralls.io/) ready
- [Packagist](https://packagist.org/) publishing ready

## Getting started
```bash
git clone https://github.com/omachala/php-package-seed.git
cd php-package-seed
rm -rf .git
composer install
```

Then find all "_omachala/php-package-seed_" occurrences and change to your own. Change you project namespaces and review LICENSE.

### Run Unit Tests and Coverage
```bash
composer run test
```
To enable code coverage verify that xdebug has installed. To show code-coverage results in browser (chrome) use command:

```bash
google-chrome build/coverage/index.html
```

### Run CodeSniffer
```bash
composer run sniffer
```
For more info see [Code Sniffer docs](https://github.com/squizlabs/PHP_CodeSniffer).

### Run Code Beautifier and Fixer
Will try to automatically fix your code.
```bash
composer run fixer
```
For more info see [Code Sniffer docs](https://github.com/squizlabs/PHP_CodeSniffer).


## Conclusion
Personally recommend using [PhpStorm](https://www.jetbrains.com/phpstorm/)
which enables to set code-style (to PSR-2) and integrate with PHPUnit, CodeSniffer and others.

**Pull-requests are welcome!**

### License
**MIT**, Copyright (c) 2018 Ondrej Machala, https://github.com/omachala/