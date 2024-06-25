<?php

namespace App\Livewire;

use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\PetugasModel;
use App\Models\PinjamModel;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ShowPeminjaman extends Component
{
    use WithPagination, WithoutUrlPagination;

    #[On('peminjaman-created')]
    public function peminjamanCreated()
    {
        session()->flash('message', 'Data Peminjaman Berhasil ditambahkan.');
    }

    public function render()
    {
        $datapetugas    = PetugasModel::all();
        $dataanggota    = AnggotaModel::all();
        $databuku       = BukuModel::all();

        return view('livewire.show-peminjaman', 
                    ['data' => PinjamModel::paginate(5),
                    'petugas' => $datapetugas,
                    'anggota' => $dataanggota,
                    'buku' => $databuku]);
    }
}
