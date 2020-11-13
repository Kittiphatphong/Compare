<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\DataNcc;
class View extends Component
{
    public $searchTel;
    public $searchAmount;

    public function render()
    {
        return view('livewire.view',[
            'data_nccs' =>DataNcc::where('tel', 'like', '%'.$this->searchTel.'%')
                ->where('amount', 'like', '%'.$this->searchAmount.'%')
                ->paginate(100),
        ]);
    }
}
