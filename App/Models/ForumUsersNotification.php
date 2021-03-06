<?php

namespace Extensions\Plugins\Forum_arckene__421339390\App\Models;

use Geeky\Database\CacheQueryBuilder;
use Illuminate\Database\Eloquent\Model;

class ForumUsersNotification extends Model
{
    use CacheQueryBuilder;

    protected $table = 'forum__users__notification';

    public function create(array $attributes = [])
    {
        return parent::create($attributes); // TODO: Change the autogenerated stub
    }
}
