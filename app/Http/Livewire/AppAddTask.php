<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AppAddTask extends Component
{
    public $title;

    protected $rules = [
        'title' => 'required|min:6',
    ];

    public function addNewTask()
    {
        $validatedData = $this->validate();
        auth()->user()->tasks()->create([
            'title' => $this->title,
            'status' => false,
        ]);
        $this->title = "";

        $this->emit('myNewTask');
        session()->flash('success','task added successfully');
    }

    public function updated($title)
    {
        $this->validateOnly($title);
    }

    public function render()
    {
        return view('livewire.app-add-task');
    }
}
