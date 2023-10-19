<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu Pinjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            font-size: small;
        }
        .hr {
            position: relative;
          }
        .double-bar {
            &:after {
              content: "";
              border-bottom: 1px solid black;
              width: 100%;
              position: absolute;
              top: 9px;
              left: 0;
              z-index: 1;
            }
            
            &:before {
              content: "";
              border-bottom: 1px solid black;
              width: 100%;
              position: absolute;
              top: 13px;
              left: 0;
              z-index: 1;    
            }
          }
        .dashed{
            &:after {
              content: "";
              border-bottom: 1px dashed black;
              width: 80%;
              position: absolute;
              top: 9px;
              left: 0;
              z-index: 1;
            }
            
            &:before {
              content: "";
              border-bottom: 1px dashed black;
              width: 80%;
              position: absolute;
              top: 13px;
              left: 0;
              z-index: 1;    
            }
          }
          .line2 {
            border-top: 1px dashed black;
            margin-top: 2px;
            margin-bottom: 0px;
          }
    </style>
</head>
<body>
    <div class="container-fluid text-center mt-3 mb-4">
        <p class="mb-0">PT. PABRIK GULA CANDI BARU</p>
        <hr style="width:40%; margin: auto; margin-top: 0; margin-bottom: 0px">
        <h6>PERHITUNGAN - HASIL (PH)</h6>
    </div>


      <div class="container-fluid mb-1">
        <div class="row">
          <div class="col">
            <div class="row">
                <div class="col-2">
                  Nama
                </div>
                <div class="col-3">
                  : {{ $profile->nama }}
                </div>
                <div class="col-2">
                    
                </div>
                <div class="col-2">
                    No. PH
                  </div>
                  <div class="col-3">
                    : 0176/23
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                  Kebun
                </div>
                <div class="col-3">
                  : {{ $profile->kebun }}
                </div>
                <div class="col-2">
                    
                </div>
                <div class="col-2">
                    Kecamatan
                  </div>
                  <div class="col-3">
                    : {{ $profile->kecamatan }}
                  </div>
            </div>
            <div class="row">
                <div class="col-2">
                  No. Induk
                </div>
                <div class="col-3">
                  : {{ $profile->no_kontrak }}
                </div>
                <div class="col-2">
                    
                </div>
                <div class="col-2">
                    Kabupaten
                  </div>
                <div class="col-3">
                    : {{ $profile->kota }}
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                  No. Fak
                </div>
                <div class="col-3">
                  : {{ $profile->no_vak }}
                </div>
                <div class="col-1">
                    Periode
                  </div>
                  <div class="col-1">
                    : 2
                  </div>
                <div class="col-2">
                    Luas Areal
                </div>
                <div class="col-3">
                    : {{ $profile->luas_kebun }}
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                  Kategori
                </div>
                <div class="col-3">
                  : {{ $profile->kategori }}
                </div>
                <div class="col-2">
                    
                </div>
                <div class="col-2">
                    KUD
                  </div>
                  <div class="col-3">
                    : 0
                  </div>
            </div>
        </div>
        </div>
    </div>

    <div class="container-fluid">
        <b>Berdasarkan laporan bagian Pabrikasi, didapat data perhitungan Bagi Hasil Sbb. :</b>
        <div class="hr">
            <div class="double-bar"></div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row">
          <div class="col">
            <div class="row">
                <div class="col-5">Tebu Di Giling</div>
                <div class="col-1">:</div>
                <div class="col-3" style="text-align: right;">2.432 Ku</div>
            </div>
            <div class="row">
                <div class="col-5">
                  Rendemen Petani
                </div>
                <div class="col-1">:</div>
                <div class="col-3" style="text-align: right;">
                  4,90 %
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                  Gula Bagian Petani
                </div>
                <div class="col-1">:</div>
                <div class="col-3" style="text-align: right;">
                  119,17 Ku
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-4">
                  Gula Petani 90%
                </div>
                <div class="col-1">:</div>
                <div class="col-3" style="text-align: right;">
                  107,25 Ku
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                  Gula Petani 10%
                </div>
                <div class="col-1">:</div>
                <div class="col-3" style="text-align: right;">
                  11,92 Ku
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                  Tetes Petani
                </div>
                <div class="col-1">:</div>
                <div class="col-3" style="text-align: right;">
                  7.296 Kg
                </div>
            </div>
          </div>
        </div>
        <hr class="line2">
    </div>
    <div class="container-fluid">
        <b>Pendapatan Petani</b>
        <hr class="line2" style="width: 20%">
            <div class="row">
              <div class="col-3">Nilai Gula Petani</div>
              <div class="col-1">:</div>
              <div class="col-2" style="text-align: right;">107,25 Ku</div>
              <div class="col-1">X RP.</div>
              <div class="col-2" style="text-align: right;">1.216.000</div>
              <div class="col-3">= Rp. 130.416.000</div>
              <div class="col-1"></div>
            </div>
            <div class="row">
              <div class="col-3">Nilai Tetes Petani</div>
              <div class="col-1">:</div>
              <div class="col-2" style="text-align: right;">7.296 Kg</div>
              <div class="col-1">X RP.</div>
              <div class="col-2" style="text-align: right;">1.700</div>
              <div class="col-3">= Rp. 12.403.200</div>
              <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-9"></div>
                <div class="col-3">------------------- +</div>
            </div>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-4" style="text-align: right;">Jumlah Pendapatan Petani &nbsp;&nbsp;&nbsp;=</div>
                <div class="col-1" style="text-align: right;">Rp. </div>
                <div class="col-2" style="text-align: right;">142.819.200</div>
            </div>
    </div>

    <div class="container-fluid">
        <b>Hutang Petani</b>
        <hr class="line2" style="width: 20%">
        <div class="row">
            <div class="col-3">1. Biaya Upah Tebang</div>
            <div class="col-1">:</div>
            <div class="col-2" style="text-align: right;">2.331 Ku</div>
            <div class="col-2">tebu masuk</div>
            <div class="col-1">= Rp. </div>
            <div class="col-2" style="text-align: right;">26.502.030</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-3">2. Biaya Angkut Truk 1</div>
            <div class="col-1">:</div>
            <div class="col-2" style="text-align: right;">2.331 Ku</div>
            <div class="col-1">X Rp. </div>
            <div class="col-1" style="text-align: right;">5.850</div>
            <div class="col-1">= Rp. </div>
            <div class="col-2" style="text-align: right;">13.519.350</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-3">3. Biaya Angkut Truk 2</div>
            <div class="col-1">:</div>
            <div class="col-2" style="text-align: right;">0 Ku</div>
            <div class="col-1">X Rp. </div>
            <div class="col-1" style="text-align: right;">0</div>
            <div class="col-1">= Rp. </div>
            <div class="col-2" style="text-align: right;">0</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-3">4. Biaya Eksplo. Tetes</div>
            <div class="col-1">:</div>
            <div class="col-2" style="text-align: right;">7.296 Kg</div>
            <div class="col-1">X Rp. </div>
            <div class="col-1" style="text-align: right;">10</div>
            <div class="col-1">= Rp. </div>
            <div class="col-2" style="text-align: right;">72960</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-3">5. Biaya Contoh Tebu</div>
            <div class="col-1">:</div>
            <div class="col-2" style="text-align: right;">0,000 Ha</div>
            <div class="col-1">X Rp. </div>
            <div class="col-1" style="text-align: right;">0</div>
            <div class="col-1">= Rp. </div>
            <div class="col-2" style="text-align: right;">0</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-3">6. Beban Lintringan</div>
            <div class="col-1">:</div>
            <div class="col-2" style="text-align: right;">2.432 Ku</div>
            <div class="col-1">X Rp. </div>
            <div class="col-1" style="text-align: right;">170</div>
            <div class="col-1">= Rp. </div>
            <div class="col-2" style="text-align: right;">423.000</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-3">7. Penggantian Karung </div>
            <div class="col-1">:</div>
            <div class="col-2" style="text-align: right;">119,17 Ku</div>
            <div class="col-1">X Rp. </div>
            <div class="col-1" style="text-align: right;">9300</div>
            <div class="col-1">= Rp.</div>
            <div class="col-2" style="text-align: right;">1.108.281</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-3">8. Iuran APTRI</div>
            <div class="col-1">:</div>
            <div class="col-2" style="text-align: right;">2,432 Ku</div>
            <div class="col-1">X Rp. </div>
            <div class="col-1" style="text-align: right;">20</div>
            <div class="col-1">= Rp. </div>
            <div class="col-2" style="text-align: right;">48.640</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-3">9. Pinjaman (Garapan, dll)</div>
            <div class="col-1">:</div>
            <div class="col-4" style="text-align: center;">-------------------></div>
            <div class="col-1">= Rp.</div>
            <div class="col-2" style="text-align: right;">94.962.320</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-3">10. Biaya Bunga Pinjaman </div>
            <div class="col-1">:</div>
            <div class="col-4" style="text-align: center;">-------------------></div>
            <div class="col-1">= Rp.</div>
            <div class="col-2" style="text-align: right;">5.935.145</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-4">11. Biaya Bunga Teb & Ang </div>
            <div class="col-4" style="text-align: center;">-------------------></div>
            <div class="col-1">= Rp. </div>
            <div class="col-2" style="text-align: right;">133.405</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-4">12. Pinjaman KPTR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kont </div>
            <div class="col-4" style="text-align: center;">...................................................</div>
            <div class="col-1">= Rp.</div>
            <div class="col-2" style="text-align: right;">111.469</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-3">13. Biaya Umbal Crane</div>
            <div class="col-1">:</div>
            <div class="col-2" style="text-align: right;">2,432 Ku</div>
            <div class="col-1">X Rp. </div>
            <div class="col-1" style="text-align: right;">5</div>
            <div class="col-1">= Rp.</div>
            <div class="col-2" style="text-align: right;">12.160</div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3">------------------- +</div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-4" style="text-align: right;">Jumlah Hutang Petani Pada PG &nbsp;&nbsp;&nbsp;=</div>
            <div class="col-1" style="text-align: right;">Rp. </div>
            <div class="col-2" style="text-align: right;">142.819.200</div>
        </div>
        <div class="row">
            <div class="col-10"></div>
            <div class="col-2" style="text-align: right;">----------------- </div>
        </div>
        <div class="row">
            <div class="col-3">Sisa Pinjaman :</div>
            <div class="col-2">0</div>
            <div class="col-4" style="text-align: right;">Jumlah Pendapatan Petani (A - B) &nbsp;&nbsp;&nbsp;=</div>
            <div class="col-1" style="text-align: right;">Rp. </div>
            <div class="col-2" style="text-align: right;">0</div>
        </div>
        <div class="hr">
            <div class="double-bar dashed"></div>
        </div>
    </div>
    <div class="container-fluid mt-3 mb-5">
        <div class="row">
            <div class="col-3" style="font-size:smaller">Lembar 1 untuk Petani</div>
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-5" style="text-align: center;">Sidoarjo, 4-Sep-2023</div>
        </div>
        <div class="row">
            <div class="col-3" style="font-size:smaller">Lembar 1 untuk Arsip ATR</div>
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-5" style="text-align: center;">PT. PABRIK GULA CANDI BARU</div>
        </div>
    </div>
    <div class="container-fluid mt-5 mb-0">
        <div class="row text-center">
            <div class="col-4"></div>
            <div class="col-4">TEJO PONCOYOGA</div>
            <div class="col-4">SUHARNO</div>
        </div>
        <div class="row text-center">
            <div class="col-4"></div>
            <div class="col-4">--------------------------------</div>
            <div class="col-4">--------------------------------</div>
        </div>
        <div class="row text-center">
            <div class="col-4"></div>
            <div class="col-4">Kabag. Tanaman</div>
            <div class="col-4">Kabag. AKT-KEU</div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>