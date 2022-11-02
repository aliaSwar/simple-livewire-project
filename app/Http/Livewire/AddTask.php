<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AddTask extends Component
{
    public  $name;

    public function updated($faild)
    {
        $this->validateOnly($faild, ['name' => 'string|required|max:255|min:4']);
    }

    public function store()
    {


        $this->validate(['name' => 'string|required|max:255|min:4']);

        Task::create([
            'name'       => $this->name,
            'user_id'    => auth()->id()
        ]);
        //$this->name = '';

        session()->flash('message', 'Task added successfully 😁');
    }
    public function remove($task)
    {
        dd($task);
    }

    public function render()
    {

        return view('livewire.add-task', ['tasks' => Task::latest()->get()]);
    }
}