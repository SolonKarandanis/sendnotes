<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait Uuid
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->public_id = (string) Str::uuid();
        });
    }
}