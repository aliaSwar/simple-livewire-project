<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AddTask extends Component
{
    public  $name;



    public function store()
    {


        $this->validate(['name' => 'string|required|max:255']);

        $task = Task::create([
            'name'       => $this->name,
            'user_id'    => auth()->id()
        ]);
        //$this->name = '';

        session()->flash('message', 'Task added successfully 😁');
    }
    public function render()
    {

        return view('livewire.add-task', ['tasks' => Task::all()]);
    }
}