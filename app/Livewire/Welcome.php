<?php

namespace App\Livewire;

use App\Models\PaketWisata;
use Livewire\Component;

class Welcome extends Component
{
    public $test;
    public $pilihan;
    public $datas;
    public function render()
    {
        $this->datas = PaketWisata::all();
        return view('livewire.welcome');
    }
}
