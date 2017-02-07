<?php

namespace Tangfastics\CounterCache\Traits;

/**
 * Trait CounterCacheCreated.
 *
 * @trait
 */
trait CounterCacheCreated
{
    /**
     * The "booting" of trait.
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @static
     * @return void
     */
    public static function bootCounterCacheCreated()
    {
        static::created(function ($model) {
            app('Tangfastics\CounterCache\CounterCache')->count($model);
        });
    }
}
