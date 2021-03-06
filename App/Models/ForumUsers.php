<?php

namespace Extensions\Plugins\Forum_arckene__421339390\App\Models;

use Geeky\Database\CacheQueryBuilder;
use Illuminate\Database\Eloquent\Model;

class ForumUsers extends Model
{
    use CacheQueryBuilder;


    protected $fillable = ['banned'];


    protected $table = 'forum__users';

    public function create(array $attributes = [])
    {
        return parent::create($attributes); // TODO: Change the autogenerated stub
    }

    public function getLastRow($column = "id")
    {
        if (!$this->count())
            return null;

        return $this->latest($column)->first();
    }
}
