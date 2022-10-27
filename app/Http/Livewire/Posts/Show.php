<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;

class Show extends Component
{
    public $count = 1;
    public function encrement()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.posts.show', ['counter' => $this->count]);
    }
}
