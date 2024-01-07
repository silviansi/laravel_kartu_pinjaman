<div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kontrak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="anggota" method="POST">
                    @csrf
                        <div class="row mb-3">
                            <label for="user" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="user_id" id="user">
                                    <option value="">Pilih Nama</option>
                                    @foreach($user as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_kontrak" class="col-sm-2 col-form-label">No. Kontrak</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="no_kontrak" type="text" value="" id="no_kontrak">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kebun" class="col-sm-2 col-form-label">Kebun</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="kebun" type="text" value="" id="kebun">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="luas_kebun" class="col-sm-2 col-form-label">Luas Kebun</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="luas_kebun" type="text" value="" id="luas_kebun">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="kecamatan" type="text" value="" id="kecamatan">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="kota" type="text" value="" id="kota">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>