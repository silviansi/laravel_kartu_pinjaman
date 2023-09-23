<form action="{{ url('anggota.create') }}" method="POST" enctype="multipart/form-data">
<div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Anggota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('anggota/'.$item->noVak) }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="nama" type="text" value="{{ Session::get('nama') }}" id="nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Kebun</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="kebun" type="text" value="{{ Session::get('kebun') }}" id="kebun">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-email-input" class="col-sm-2 col-form-label">No. Vak</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="noVak" type="text" id="noVak">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-url-input" class="col-sm-2 col-form-label">Luas Baku</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="luasBaku" type="text" value="{{ Session::get('luasBaku') }}" id="luasBaku">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">No. Kontrak</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="noKontrak" type="text" value="{{ Session::get('noKontrak') }}" id="noKontrak">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-password-input" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="kategori" type="text" value="{{ Session::get('kategori') }}" id="kategori">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-number-input" class="col-sm-2 col-form-label">Periode</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="periode" type="number" value="{{ Session::get('periode') }}" id="periode">
                        </div>
                    </div>
                    <input type="submit" value="Tambah" class="btn btn-success btn-md">
                </form>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
</form>