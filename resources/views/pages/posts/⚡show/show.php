<?php

use Livewire\Component;

new class extends Component
{
    public function render()
    {
        return view('pages::posts.show')
            ->layout('layouts.app');
    }
};
