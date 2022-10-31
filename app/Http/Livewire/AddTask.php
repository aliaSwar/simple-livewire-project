<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AddTask extends Component
{
    public  $name, $user;

    public function store()
    {
        $task = Task::create([
            'name'       => $this->name,
            'user_id'    => auth()->id()
        ]);
        dd($task);
    }
    public function render()
    {
        return view('livewire.add-task');
    }
}