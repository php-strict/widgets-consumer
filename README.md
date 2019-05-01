# Widgets Consumer

[![Software License][ico-license]](LICENSE.txt)

Widgets Consumer Interface repository.

Widgets consumer ask [widgets provider]() for widgets for specific 
scope/place, throught provider public interface. Or widgets provider 
can take consumer-object as parameter and inject widgets into it. 
For this purposes widgets consumer define public methods to gets 
current scope and all places for current scope.

See main [widgets](https://github.com/php-strict/widgets) repository 
for detail description.

## Requirements

*   PHP >= 7.1

## Install

Install with [Composer](http://getcomposer.org):

```bash
composer require php-strict/widgets-consumer
```

[ico-license]: https://img.shields.io/badge/license-GPL-brightgreen.svg?style=flat-square
