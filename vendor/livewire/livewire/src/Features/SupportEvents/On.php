<?php

namespace Livewire\Features\SupportEvents;

use Livewire\Features\SupportAttributes\Attribute as LivewireAttribute;

use function Livewire\store;

#[\Attribute]
class On extends LivewireAttribute
{
    public function __construct(public $event) {}

    public function boot()
    {
        store($this->component)->push(
            'listenersFromPropertyAttributes',
            $this->getName(),
            $this->event,
        );
    }
}
