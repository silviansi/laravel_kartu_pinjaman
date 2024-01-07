<div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Tutupan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="tutupan" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="user" class="col-sm-2 col-form-label">Nomor Kontrak</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="profile_id" id="profile">
                                <option value="">Pilih Nomor Kontrak</option>
                                @foreach($profile as $item)
                                    <option value="{{ $item->id }}">{{ $item->no_kontrak }} - {{ $item->user->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="user" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="user_id" id="user">
                                <option value="">Pilih Nama</option>
                                @foreach($user as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @php
                        $timestamp = $_SERVER['REQUEST_TIME'];
                        $dateNow = date('ymd', $timestamp);
                        $newDate = date('ymd', strtotime('+2 day', $timestamp));
                        $randomNum = 'TTP' . $newDate . 174;
                    @endphp
                    <div class="row mb-3">
                        <label for="no_bukti" class="col-sm-2 col-form-label">No. Bukti</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="no_bukti" value="{{$randomNum}}" id="no_bukti" readonly>
                        </div>
                    </div>
                    @php
                        $uraian = 'TUTUPAN ' . date('Y-m')
                    @endphp
                    <div class="row mb-3">
                        <label for="uraian" class="col-sm-2 col-form-label">Uraian</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="uraian" value="{{ $uraian }}" id="uraian" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jumlah_tutupan" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="jumlah_tutupan" type="number" value="" id="jumlah_tutupan">
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