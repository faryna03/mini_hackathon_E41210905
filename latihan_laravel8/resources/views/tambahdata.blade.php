<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud laravel8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  {{-- Tempat menampilkannya data yang di page tambah --}}
  <body>
    <h1 class="text-center mb-4">Tambah Data</h1>

    <div class="container">
       
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="card-body">
                <form action="/insertdata" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Jenis Daerah</label>
                      <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                        <option selected>pilih</option>
                        <option value="jember">Jember</option>
                        <option value="bondowoso">bondowoso</option>
                        
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">No hp</label>
                      <input type="number" name="nohp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Upload image</label>
                      {{-- <input menthod="post" enctype="multipart" name="file" file="true" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
                      <input type="file" name="picture" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                      @csrf
                    </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>

            </div>
          </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="text/javascript">
      Dropzone.options.imageUpload = {
          maxFilesize: 10,
          acceptedFiles: ".jpeg,.jpg,.png,.gif",
          addRemoveLinks: true,
          createImageThumbnails: true,
          autoProcessQueue: false,
          init: function() {
              var myDropzone = this;
              // aksi ketika button diklik
              $('#submit').click(function(e) {
                  e.preventDefault();
                  myDropzone.processQueue();
              });
              this.on('sending', function(file, xhr, formData) {
                  // Tambahkan semua input form ke formData dropzone yang akan dipost
                  var data = $('#image-upload').serializeArray();
                  $.each(data, function(key, el) {
                      formData.append(el.name, el.value);
                  });
              });
          }
      }
  </script>
  </body>
</html>