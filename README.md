# Nova Custom Action Selector

[![Latest Version on Packagist](https://img.shields.io/packagist/v/Energon7/custom-action-selector?style=flat-square)](https://packagist.org/packages/energon7/custom-action-selector)
![Licence](https://img.shields.io/github/license/Energon7/custom-action-selector?style=flat-square)
[![Total Downloads](https://poser.pugx.org/energon7/custom-action-selector/downloads?format=flat-square)](https://packagist.org/packages/energon7/custom-action-selector)

This package allows you to change the action select box to a button view.
## Installation

```shell
composer require energon7/custom-action-selector
```

## Usage

NovaServiceProvider.php:

```php
use Energon7\CustomActionSelector\CustomActionSelector;

//...

public function tools()
{
    return [
         new CustomActionSelector()
    ];
}
```
Then create any action:
```
php artisan nova:action SomeAction

```

You can add icon to a action button.

SomeAction.php:
```php

  public $icon = '<svg> ... </svg>';
  public function __construct()
  {
      $this->withMeta([
          'icon' => $this->icon
      ]);
  }
  
```


## Credits

- [Azer Mammadov](https://github.com/energon7)

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
