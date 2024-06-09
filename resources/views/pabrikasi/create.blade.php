<div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Laporan Harian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="pabrikasi" method="POST">
                    @csrf
                        <div class="row mb-3">
                            <label for="user" class="col-sm-2 col-form-label">Nomor Kontrak</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="profile" id="profile">
                                    <option value="">Pilih Nomor Kontrak</option>
                                    @foreach($profile as $item)
                                        <option value="{{ $item->id }}">{{ $item->no_kontrak }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="user" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="nama" type="text" value="" id="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tebu_giling" class="col-sm-2 col-form-label">Tebu Giling</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="tebu_giling" type="number" value="" id="tebu_giling">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="rendemen_petani" class="col-sm-2 col-form-label">Rendemen Petani</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="rendemen_petani" type="number" min="0" step="0.01" value="" id="rendemen_petani">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gula_petani" class="col-sm-2 col-form-label">Gula Petani</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="gula_petani" type="number" min="0" step="0.01" value="" id="gula_petani">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tetes_petani" class="col-sm-2 col-form-label">Tetes Petani</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="tetes_petani" type="number" value="" id="tetes_petani">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gula_masuk" class="col-sm-2 col-form-label">Gula Masuk</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="gula_masuk" type="number" value="" id="gula_masuk">
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

@push('script')
<script>
    $(document).ready(function () {
        $('#profile').change(function () {
            var id = $(this).val();
            if (id) {
                $.ajax({
                    url: '/get-nama/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#nama').val(data.nama).attr('readonly', true);
                    },
                    error: function () {
                        alert('Gagal mengambil data nama.');
                    }
                });
            } else {
                $('#nama').val('').removeAttr('readonly');
            }
        });
    });
</script>
@endpush