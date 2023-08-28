<?php

namespace App\Livewire;

use Livewire\Component;

class QnaIndex extends Component
{
    public function render()
    {
        return view('livewire.qna-index')
        ->layout('layouts.app');
    }
}
