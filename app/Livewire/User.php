<?php

namespace App\Livewire;

use Livewire\Component;

class User extends Component
{
    public $title = 'Users';
    public $myField = 'asd';

    public function render()
    {
        return view('livewire.user')->layout('layouts.app');
    }
    public function myFunc()
    {
        sleep(2);
        dd(1);
    }
}
