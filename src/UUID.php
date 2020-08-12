<?php

namespace RecycledBeans\EloquentUUID;

trait UUID
{
    public static function bootUUID()
    {
        static::creating(function ($model) {
            $primary_key = (new static)->getKeyName();

            if (empty($model->$primary_key)) {
                $model->$primary_key = \Ramsey\Uuid\Uuid::uuid4()->toString();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }
}
