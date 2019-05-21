# Widgets Consumer

[![Software License][ico-license]](LICENSE.txt)
[![Codacy Badge][ico-codacy]][link-codacy]

Widgets Consumer Interface repository.

Widgets consumer ask [widgets provider](https://github.com/php-strict/widgets-provider) 
for widgets for specific scope/place, throught provider public interface. 
Or widgets provider can take consumer-object as parameter and inject widgets into it. 
For this purposes widgets consumer define public methods to gets 
current scope and all places for current scope.

See main [widgets](https://github.com/php-strict/widgets) repository 
for detail description and examples.

## Requirements

*   PHP >= 7.1

## Install

Install with [Composer](http://getcomposer.org):

```bash
composer require php-strict/widgets-consumer
```

[ico-license]: https://img.shields.io/badge/license-GPL-brightgreen.svg?style=flat-square
[ico-codacy]: https://api.codacy.com/project/badge/Grade/20d3903e6e824745b85905320123b5d7
[link-codacy]: https://www.codacy.com/app/php-strict/widgets-consumer?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=php-strict/widgets-consumer&amp;utm_campaign=Badge_Grade
