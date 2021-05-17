<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoItem extends Component
{
    public $todoItem;

    public function mount($todoItem)
    {
        $this->todoItem = $todoItem;
    }

    public function render()
    {
        return view('livewire.todo-item');
    }

    public function changeTodoState()
    {
        $todo = Todo::findorFail($this->todoItem->id);
        $todo->is_done = $todo->is_done ? false : true;
        $todo->save();
        $this->todoItem = $todo;
        $this->emit('updateItems');
    }

    public function deleteTodo()
    {
        Todo::destroy($this->todoItem->id);
        $this->emit('updateItems');
    }
}
