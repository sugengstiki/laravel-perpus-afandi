<div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalPinjamTambah">
    Tambah Peminjaman
</button>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="modalPinjamTambah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form name="formpinjamtambah" id="formpinjamtambah" wire:submit.prevent="save">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Pinjam</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group row">
                        <label for="id_petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="id_petugas" wire:model="id_petugas">
                                <option value="" hidden>Pilih petugas</option>
                                @foreach($petugas as $pt)
                                <option value="{{ $pt->id_petugas }}">{{ $pt->nama_petugas }}</option>
                                @endforeach
                            </select>
                            @error('id_petugas') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="id_anggota" class="col-sm-4 col-form-label">Nama Anggota</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="id_anggota" wire:model="id_anggota" placeholder="Pilih Nama Anggota">
                            <option value="" hidden>Pilih anggota</option>
                                @foreach($anggota as $a)
                                <option value="{{ $a->id_anggota }}">{{ $a->nama_anggota }}</option>
                                @endforeach
                            </select>
                            @error('id_anggota') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="id_buku" class="col-sm-4 col-form-label">Judul Buku</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="id_buku" wire:model="id_buku" placeholder="Pilih Judul Buku">
                            <option value="" hidden>Pilih buku</option>
                                @foreach($buku as $bk)
                                <option value="{{ $bk->id_buku }}">{{ $bk->judul }}</option>
                                @endforeach
                            </select>
                            @error('id_buku') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
