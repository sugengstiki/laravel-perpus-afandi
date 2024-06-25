@extends('index')
@section('title', 'Peminjaman')

@section('isihalaman')
    <h3><center>Data Peminjaman Buku</center><h3>
    <h3><center>Perpustakaan Stiki</center></h3>

    <livewire:add-peminjaman />
    <livewire:show-peminjaman />
@endsection

@section('script')
<script>
    window.addEventListener('tutup-modal', event => {
        $('.modal-backdrop').remove();
        $('#modalPinjamTambah').modal('hide');  
    });
</script>
@endsection