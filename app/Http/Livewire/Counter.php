<?php

namespace App\Http\Livewire;

use App\Services\PhoneBook;
use Livewire\Component;

class Counter extends Component
{
    public $name;

    public $contacts = [];

    public function updatedName($value)
    {
        $this->contacts = PhoneBook::searchByName($value);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
