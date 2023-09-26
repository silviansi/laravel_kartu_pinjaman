<form action="{{ url('pinjaman') }}" method="POST" enctype="multipart/form-data">
<div class="modal fade text-left" tabindex="-1" role="dialog" id="ModalCreatePinjaman" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('pinjaman') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <div class="input-group" id="datepicker2">
                                <input type="text" class="form-control" placeholder="dd/mm/yyyy" 
                                data-date-format="dd/mm/yyyy" data-date-container='#datepicker2' data-provide="datepicker"
                                data-date-autoclose="true">

                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                            </div><!-- input-group -->
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-search-input" class="col-sm-2 col-form-label">No. Bukti</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="KSB230306060" id="example-search-input">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Debet</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="71,932,320" id="example-email-input">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-url-input" class="col-sm-2 col-form-label">Kredit</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" placeholder="0" id="example-url-input">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Uraian</label>
                        <div class="col-sm-10">
                            <textarea type="text" id="uraian-input"></textarea>
                        </div>
                    </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>