<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventComponent extends Component
{
    use WithPagination;

    public function render()
    {

        return view('livewire.event-component', ['events' => Event::paginate(6)]);
    }
}
