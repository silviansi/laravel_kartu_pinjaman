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
      table, td, th {
          border: 1px solid black;
      }
      table {
          border-collapse: collapse
      }
  </style>
  </head>
<body>
    <div class="container-fluid text-center">
        <div class="row mt-3 mb-5">
          <div class="col">
            <b>Pabrik Gula "CANDI BARU"</b><br>
            <b>SIDOARJO</b>
          </div>
          <div class="col">
            <h3>KARTU PINJAMAN</h3>
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>


      <div class="container-fluid mb-3">
        <div class="row">
          <div class="col-2">Nama</div>
          <div class="col-4">: {{ $profile->nama }}</div>
          <div class="col-2">Luas Baku</div>
          <div class="col-4">: {{ $profile->luas_kebun }}</div>
        </div>
        <div class="row">
          <div class="col-2">Kebun</div>
          <div class="col-4">: {{ $profile->kebun }}</div>
          <div class="col-2">No. Kontrak</div>
          <div class="col-4">: {{ $profile->no_kontrak }}</div>
        </div>
        <div class="row">
          <div class="col-2">No. Vak</div>  
          <div class="col-4">: {{ $profile->no_vak }}</div>  
          <div class="col-2">Kategori</div>
          <div class="col-4">: {{ $profile->kategori }}</div>
        </div>
        <div class="row">
          <div class="col-2"></div>
          <div class="col-4"></div>
          <div class="col-2">Periode</div>
          <div class="col-4">: 1</div>
        </div>
    </div>

    <div class="container-fluid">
      <table style="width:100%;text-align:center">
        <thead>
          <tr>
            <th rowspan="2">TANGGAL</th>
            <th rowspan="2">NO. BUKTI</th>
            <th rowspan="2">URAIAN</th>
            <th colspan="2">MUTASI</td>
            <th rowspan="2">Jlm S/D</th>
            <th rowspan="2">KETERANGAN<br>(Sisa Pinjaman)</th>
          </tr>
          <tr>
            <th>DEBIT</th>
            <th>KREDIT</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
            <tr>
                <td style="border-bottom: hidden">{{ $item->tanggal }}</td>
                <td style="border-bottom: hidden">{{ $item->no_bukti }}</td>
                <td style="text-align:left;border-bottom: hidden">{{ $item->uraian }}</td>
                <td style="text-align:right;border-bottom: hidden">{{ number_format($item->jumlah_pinjaman,0,'','.') }}</td>
                <td style="text-align:right;border-bottom: hidden">0</td>
                <td style="text-align:right;border-bottom: hidden">{{ $item->jumlah_pinjaman }}</td>
                <td style="border-bottom: hidden"></td>
            </tr>
            @endforeach
            <tr>
              <th>JUMLAH :</th>
              <td></td>
              <td></td>
              <td style="text-align:right">{{ number_format($q,0,'','.') }}</td>
              <td style="text-align:right">101.303.387</td>
              <td style="text-align:center">-</td>
              <td style="text-align:right">6.938.338</td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>