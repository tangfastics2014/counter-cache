<?php

namespace Tangfastics\CounterCache\Traits;

/**
 * Trait CounterCache.
 *
 * @trait
 */
trait CounterCache
{
    use CounterCacheSaved,
        CounterCacheDeleted,
        CounterCacheRestored;
}
