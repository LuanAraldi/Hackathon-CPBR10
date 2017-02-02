<?php

namespace App\Globals;

use Webpatser\Uuid\Uuid;

trait Uuids
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate(5, md5(uniqid(rand(), true)), Uuid::NS_DNS)->string;
        });
    }
}