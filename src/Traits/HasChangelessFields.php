<?php

namespace Dmdrozd\ChangelessFields\Traits;

use Dmdrozd\ChangelessFields\Observers\ModelObserver;

trait HasChangelessFields
{
    public static function boot()
    {
        parent::boot();

        static::observe(ModelObserver::class);
    }

    public function getChangelessFields(): array
    {
        return $this->changeless ?: [];
    }
}