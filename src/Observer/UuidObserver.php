<?php

namespace UuidColumn\Observer;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

/**
 * Class UuidObserver.
 *
 * @package UuidColumn\Observer
 */
class UuidObserver
{
    /**
     * Set the model created at timestamp on create.
     *
     * @param Model $model
     *
     * @throws \Exception
     */
    public function creating(Model $model): void
    {
        $model->setAttribute($model->getKeyName(), Uuid::uuid4());
    }
}
