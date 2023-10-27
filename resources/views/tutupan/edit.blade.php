@foreach ($data as $item)
    
    <div class="modal fade text-left" id="ModalEditTutupan-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Tutupan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <form action="{{ url('tutupan/'.$item->id) }}" method="POST">
                            @csrf
                            @method("PUT")
                                <div class="row mb-3">
                                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="tgl" type="text" value="{{ $item->tgl }}" id="tanggal">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_bukti" class="col-sm-2 col-form-label">No. Bukti</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="no_bukti" type="text" value="{{ $item->no_bukti }}" id="no_bukti">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_tutupan" class="col-sm-2 col-form-label">Jumlah Tutupan</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="jumlah_tutupan" type="text" value="{{ $item->jumlah_tutupan }}" id="jumlah_tutupan">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="uraian" class="col-sm-2 col-form-label">Uraian</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="uraian" type="text" value="{{ $item->uraian }}" id="uraian">
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