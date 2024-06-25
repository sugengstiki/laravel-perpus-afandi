<?php


namespace App\Livewire;

use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\PetugasModel;
use App\Models\PinjamModel;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddPeminjaman extends Component
{
    #[Validate('required', message:'Data Petugas harus diisi')]
    public $id_petugas;

    #[Validate('required', message:'Data Anggota harus diisi')]
    public $id_anggota;

    #[Validate('required', message:'Data Buku harus diisi')]
    public $id_buku;
    
    public function save()
    {
        $this->validate();

        $peminjaman = PinjamModel::create($this->only(['id_petugas', 'id_anggota', 'id_buku']));
        
        // session()->flash('message', 'Data Peminjaman Berhasil ditambahkan.');
        // $this->emit('alert', ['type' => 'success', 'message' => 'Data Peminjaman Berhasil ditambahkan.']);

        $this->reset();
        $this->dispatch('peminjaman-created', $peminjaman);
        $this->dispatch('tutup-modal');

    }

    public function render()
    {
        $datapetugas    = PetugasModel::all();
        $dataanggota    = AnggotaModel::all();
        $databuku       = BukuModel::all();

        return view('livewire.add-peminjaman', 
                    ['petugas' => $datapetugas,
                    'anggota' => $dataanggota,
                    'buku' => $databuku]);
    }
}
