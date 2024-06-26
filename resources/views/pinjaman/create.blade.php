<div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Pinjaman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="pinjaman" method="POST">
                    @csrf
                        <div class="row mb-3">
                            <label for="user" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="user_id" id="user">
                                    <option value="">Pilih Nama Mitra</option>
                                    @foreach($user as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @php
                            $tgl = date('Y-m-d')   
                        @endphp
                        <div class="row mb-3">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="tanggal" type="text" value="{{ $tgl }}" id="tanggal">
                            </div>
                        </div>
                        @php
                            $randomNum = 'KSB' . date('ymdd') . 0;
                        @endphp
                        <div class="row mb-3">
                            <label for="no_bukti" class="col-sm-2 col-form-label">No. Bukti</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="no_bukti" type="text" value="{{ $randomNum }}" id="no_bukti" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_rek" class="col-sm-2 col-form-label">No. Rek</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="no_rek" type="text" value="" id="no_rek">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jumlah_pinjaman" class="col-sm-2 col-form-label">Jumlah Pinjaman</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="jumlah_pinjaman" type="text" value="" id="jumlah_pinjaman">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="uraian" class="col-sm-2 col-form-label">Uraian</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="uraian" type="text" value="" id="uraian"></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>