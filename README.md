# UUID for Laravel Model

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
    /**
	 * Sets the UUID as defaults.
	 *
	 * @var bool
	 */
	public $incrementing = false;
```

If you leave `$incrementing = true;` then it will continue to use incrementing ID.