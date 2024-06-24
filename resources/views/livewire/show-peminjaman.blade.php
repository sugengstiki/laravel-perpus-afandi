<div>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@include('livewire.ModalAddPeminjaman')

<table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID Pinjam</td>
                <td align="center">Nama Petugas</td>
                <td align="center">Nama Anggota</td>
                <td align="center">Judul Buku</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @forelse ($data as $row)
                <tr>
                    <td align="center" scope="row">{{ $loop->iteration + ($data->currentPage() - 1) * $data->perPage() }}</td>
                    <td align="center">{{$row->id_pinjam}}</td>
                    <td>{{$row->petugas->nama_petugas}}</td>
                    <td>{{$row->anggota->nama_anggota}}</td>
                    <td>{{$row->buku->judul}}</td>
                    <td align="center">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalPinjamEdit{{$row->id_pinjam}}"> 
                            Edit
                        </button>                        |
                        <a href="pinjam/hapus/{{$row->id_pinjam}}" onclick="return confirm('Yakin mau dihapus?')">
                            <button class="btn-danger">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!--awal pagination-->
    Halaman : {{ $data->currentPage() }} <br />
    Jumlah Data : {{ $data->total() }} <br />
    Data Per Halaman : {{ $data->perPage() }} <br />

    {{ $data->links(data: ['scrollTo' => false]) }}
    <!--akhir pagination-->
</div>
