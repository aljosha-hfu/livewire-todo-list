<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public $todos;
    public $doneTodoCounter;
    protected $listeners = [
        'updateItems' => 'updateItems'
    ];
    public $todoInput;

    protected $rules = [
        'todoInput' => 'required'
    ];

    public function render()
    {
        $this->todos = Todo::all();
        $this->doneTodoCounter = Todo::where('is_done', true)->count();
        return view('livewire.todo-list');
    }

    public function updateItems()
    {
        $this->render();
    }

    public function addTodo()
    {
        $this->validate();
        Todo::create(array('name' => $this->todoInput));
        $this->todoInput = '';
    }
}
