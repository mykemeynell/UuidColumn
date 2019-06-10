<?php

namespace UuidColumn\Concern;

use UuidColumn\Observer\UuidObserver;

/**
 * Trait HasUuidObserver.
 *
 * @package UuidColumn\Concern
 */
trait HasUuidObserver
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        static::observe(UUIDObserver::class);
    }
}
