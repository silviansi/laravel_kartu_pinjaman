@foreach ($data as $item)
    
    <div class="modal fade text-left" id="ModalEditPabrikasi-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Pabrikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <form action="{{ url('pabrikasi/'.$item->id) }}" method="POST">
                            @csrf
                            @method("PUT")
                                <div class="row mb-3">
                                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input class="form-control border-0" name="username" type="text" value="{{ $item->user->username }}" id="username" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tebu_giling" class="col-sm-2 col-form-label">Tebu Giling</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="tebu_giling" type="text" value="{{ $item->tebu_giling }}" id="tebu_giling">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="rendemen_petani" class="col-sm-2 col-form-label">Rendemen Petani</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="rendemen_petani" type="text" value="{{ $item->rendemen_petani }}" id="rendemen_petani">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gula_petani" class="col-sm-2 col-form-label">Gula Petani</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="gula_petani" type="text" value="{{ $item->gula_petani }}" id="gula_petani">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tetes_petani" class="col-sm-2 col-form-label">Tetes Petani</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="tetes_petani" type="text" value="{{ $item->tetes_petani }}" id="tetes_petani">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gula_masuk" class="col-sm-2 col-form-label">Gula Masuk</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="gula_masuk" type="text" value="{{ $item->gula_masuk }}" id="gula_masuk">
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