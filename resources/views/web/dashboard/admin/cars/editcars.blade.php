<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>Customer Edit</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>
                Car Edit
                <a href="/web.dashboard.admin.cars.cars" class="btn btn-danger float-end">BACK</a>
              </h4>
            </div>
            <div class="card-body">
              <form action="/web.dashboard.admin.cars.editcars" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$cars->id}}" />
                <div class="mb-3">
                  <label for="">Foto Mobil</label>
                    <input type="file" id="myFile" name="foto_mobil" class="form-control" value="{{$cars->foto_mobil}}">
                </div>
                <div class="mb-3">
                  <label>No. Polisi</label>
                  <input type="text" name="no_polisi" class="form-control" value="{{$cars->no_polisi}}"/>
                </div>
                <div class="mb-3">
                  <label>Merk</label>
                  <input type="text" name="merk" class="form-control" value="{{$cars->merk}}"/>
                </div>
                <div class="mb-3">
                  <label>Tahun</label>
                  <input type="text" name="tahun" class="form-control" value="{{$cars->tahun}}"/>
                </div>
                <div class="mb-3">
                  <label>Transmisi</label>
                  <select type="text" name="transmisi" class="form-control" value="{{$cars->transmisi}}"/>
                    <option value="Manual">Manual</option>
                    <option value="Matic">Matic</option>
                  </select>
                </div>
                <div class="mb-3">
                  <button type="submit" name="update_student" class="btn btn-primary">Add Car</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
