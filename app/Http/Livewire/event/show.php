<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;

class Show extends Component
{
    public $events;

    public function mount()
    {
        $this->events = app(Event::class)->all();
    }

    public function render()
    {
        return view('livewire.event.show');
    }
}
