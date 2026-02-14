<?php

use Livewire\Component;

new class extends Component
{
    public function render()
    {
        $todos = Todo::all();
            
        return view('components.todo-list');
    }
};
?>

<div>
    @foreach ($todos as $todo)
        <div>
            {{ $todo->title }}
        </div>
    @endforeach
</div>