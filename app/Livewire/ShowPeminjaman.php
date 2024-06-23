<?php

namespace App\Livewire;

use App\Models\PinjamModel;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ShowPeminjaman extends Component
{
    use WithPagination, WithoutUrlPagination;
    public function render()
    {
        return view('livewire.show-peminjaman', 
                    ['data' => PinjamModel::paginate(5)]);
    }
}
