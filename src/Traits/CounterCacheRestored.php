<?php

namespace Tangfastics\CounterCache\Traits;

/**
 * Trait CounterCacheRestored.
 *
 * @trait
 */
trait CounterCacheRestored
{
    /**
     * The "booting" of trait.
     *
     * @author Morten Rugaard <moru@nodes.dk>
     *
     * @static
     * @return void
     */
    public static function bootCounterCacheRestored()
    {
        if (method_exists(__CLASS__, 'restored')) {
            static::restored(function ($model) {
                app('Tangfastics\CounterCache\CounterCache')->count($model);
            });
        }
    }
}
