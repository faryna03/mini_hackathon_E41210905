<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud laravel8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  {{-- Tempat menampilkan nama2 di table dan menampilkan data yang tersimpan di database --}}
  <body>
    <h2 class="text-center mb-4">Data Jalan Rusak</h2>
      <h4 class="text-center mb-3"> Topik Perhubungan</h4>

    <div class="container">
        <a href="/tambahpegawai"  class="btn btn-outline-success">Tambah +</a>
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nomer</th>
                    <th scope="col">Nama pelapor</th>
                    <th scope="col">Nama Daerah</th>
                    <th scope="col">No hp</th>
                    <th scope="col">Waktu Data lapor</th>
                    <th scope="col">Upload gambar</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;    
                  @endphp

                    @foreach ($data as $row)
                    
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->jeniskelamin }}</td>
                    <td>0{{ $row->nohp }}</td>
                    <td>{{ $row->created_at->diffForHumans() }}</td>
                    <td>{{ $row->picture }}</td>
                    
                    <td>
                        <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                        <a href="/delete/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
          
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>