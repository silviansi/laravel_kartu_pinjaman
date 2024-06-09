@foreach ($data as $item)
    
    <div class="modal fade text-left" id="ModalEdit-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Anggota</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <form action="{{ url('anggota/'.$item->id) }}" method="POST">
                            @csrf
                            @method("PUT")
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="nama" type="text" value="{{ $item->user->nama }}" id="nama">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kebun" class="col-sm-2 col-form-label">Kebun</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="kebun" type="text" value="{{ $item->kebun }}" id="kebun">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="luas_kebun" class="col-sm-2 col-form-label">Luas Kebun</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="luas_kebun" type="text" value="{{ $item->luas_kebun }}" id="luas_kebun">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_vak" class="col-sm-2 col-form-label">No. Vak</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="no_vak" type="text" value="{{ $item->no_vak }}" id="no_vak">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_kontrak" class="col-sm-2 col-form-label">No. Kontrak</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="no_kontrak" type="text" value="{{ $item->no_kontrak }}" id="no_kontrak">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="kategori" type="text" value="{{ $item->kategori }}" id="kategori">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="kecamatan" type="text" value="{{ $item->kecamatan }}" id="kecamatan">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="kota" type="text" value="{{ $item->kota }}" id="kota">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach