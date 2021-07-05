<?php

namespace Dmdrozd\ChangelessFields\Observers;

use Illuminate\Database\Eloquent\Model;
use Dmdrozd\ChangelessFields\Exceptions\UpdateChangelessFieldsException;

class ModelObserver
{
    /**
     * @throws \Throwable
     */
    public function saving(Model $model): void
    {
        throw_if(
            $model->wasRecentlyCreated && $this->modelHasDirtyChangelessFields($model),
            UpdateChangelessFieldsException::class,
        );
    }

    protected function modelHasDirtyChangelessFields(Model $model): bool
    {
        if (method_exists($model, 'getChangelessFields')) {
            return (bool)array_intersect(array_keys($model->getDirty()), $model->getChangelessFields());
        }

        return false;
    }
}