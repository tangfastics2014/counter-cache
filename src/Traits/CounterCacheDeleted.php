<?php

namespace Tangfastics\CounterCache\Traits;

/**
 * Trait CounterCacheDeleted.
 *
 * @trait
 */
trait CounterCacheDeleted
{
    /**
     * The "booting" of trait.
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @static
     * @return void
     */
    public static function bootCounterCacheDeleted()
    {
        static::deleted(function ($model) {
            app('Tangfastics\CounterCache\CounterCache')->count($model);
        });
    }
}
