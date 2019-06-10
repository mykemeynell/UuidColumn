<?php

namespace UuidColumn\Concern;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Fluent;

/**
 * Trait UuidColumn.
 *
 * @package UuidColumn\Concern
 */
trait UuidColumn
{
    /**
     * Get a configured column object for blueprint.
     *
     * @param Blueprint $blueprint
     * @param string    $name
     *
     * @return Fluent
     */
    public function createUuidColumn(Blueprint $blueprint, string $name): Fluent
    {
        return $blueprint->uuid($name)->charset('utf8');
    }
}
