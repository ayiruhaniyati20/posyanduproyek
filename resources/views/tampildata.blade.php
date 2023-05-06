<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD laravel 8</title>
  </head>

  <body>
    <h1 class="text-center mb-4">Edit Data Pegawai</h1>
        
    <div class="container">
      
      <div class="row justify-content-center">
         <div class="col-8">
          <div class="card">
            <div class="card-body">
             <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
              @csrf
               <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                 <input type="text" name="nama" class="form-control" id="exampleInputEmail1" 
                 aria-describedby="emailHelp" value="{{ $data->nama }}">
               </div>
               <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
               <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                      <option selected>{{ $data->jeniskelamin }}</option>
                      <option value="cowo">cowo</option>
                      <option value="cewe">cewe</option>
                    </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomer Telepon</label>
                <input type="number" name="nomertelepon" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" value="{{ $data->nomertelepon }}">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                <input type="file" name="foto" class="form-control" value="{{ $data->foto }}">
              </div>










               <button type="submit" class="btn btn-primary">Submit</button>
             </form>
            </div>
           </div>
         </div>

      </div>
    </div>