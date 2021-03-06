<?php

namespace Extensions\Plugins\Forum_arckene__421339390\App\Models;

use Geeky\Database\CacheQueryBuilder;
use Illuminate\Database\Eloquent\Model;

class ForumConfiguration extends Model
{
    use CacheQueryBuilder;

    protected $fillable = ['forum', 'theme', 'widget__button', 'button_link', 'button_name', 'widget__staff', 'widget__online', 'widget__discord', 'discord', 'widget__statistics', 'widget__latest_post', 'widget__share', 'updated_at'];
    protected $table = 'forum__configuration';

    public function create(array $attributes = [])
    {
        return parent::create($attributes); // TODO: Change the autogenerated stub
    }
}
