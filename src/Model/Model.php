<?php

namespace EzitisItIs\LaravelUuid\Model;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class Model
 */
class Model extends EloquentModel
{
    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if ($this->incrementing === false) {
            $this->{$this->getKeyName()} = \Illuminate\Support\Str::ulid()->toRfc4122();
        }
    }
}
