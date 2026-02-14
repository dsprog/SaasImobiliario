<?php

use Livewire\Component;
use App\Models\Todo;

new class extends Component
{
    public $todos;
    public function render()
    {
        $this->todos = Todo::all();
        return view('components.todo-list.⚡index')->layout('layouts.app');
    }
};
?>

<div>
    aqui
</div>