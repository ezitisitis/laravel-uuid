# UUID for Laravel Model

![Packagist Version](https://img.shields.io/packagist/v/ezitisitis/laravel-uuid)
![GitHub License](https://img.shields.io/github/license/ezitisitis/Laravel-uuid)


<a href="https://www.buymeacoffee.com/ezitisitis" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" style="height: 60px !important;width: 217px !important;" ></a>

## Installing

```bash
$ composer require ezitisitis/laravel-uuid
```

## Usage

Replace Laravel model extension (example below)

```php
use Illuminate\Database\Eloquent\Model;

class MyAwesomeModel extends Model
{
```

With

```php
use EzitisItIs\LaravelUuid\Model;

class MyAwesomeModel extends Model
{
```

If you set `$incrementing = true;` then it will continue to use incrementing ID.

## Credits

- [Marks Bogdanovs](https://www.ezitisitis.com)
