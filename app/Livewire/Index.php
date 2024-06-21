<?php

namespace App\Livewire;

use App\Models\PaketWisata;
use Livewire\Component;

class Index extends Component
{
    public $pilihan = '200';

    public function render()
    {
        $datas = PaketWisata::all();
        return view('livewire.index', ['datas' => $datas]);
    }
}
