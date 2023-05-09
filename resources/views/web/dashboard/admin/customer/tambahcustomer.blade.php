<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('web/images/car-sport.svg') }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>Customer Add</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>
                Customer Add
                <a href="/web.dashboard.admin.customer.customers" class="btn btn-danger float-end ">BACK</a>
              </h4>
            </div>
            <div class="card-body">
              <form action="/web.dashboard.admin.customer.tambahcustomer" method="POST">
                @csrf
                <div class="mb-3">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control"/>
                </div>
                <div class="mb-3">
                  <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" style="margin-top: 10px;">
                </div>
                <div class="mb-3">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control"/>
                </div>
                <div class="mb-3">
                  <label>No. SIM</label>
                  <input type="text" name="no_sim" class="form-control"/>
                </div>
                <div class="mb-3">
                  <label>Jenis Kelamin</label> <br>
                  <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                </div>
                <div class="mb-3">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control"/>
                </div>
                <div class="mb-3">
                  <label>No. HP</label>
                  <input type="text" name="no_hp" class="form-control"/>
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary ">Tambah</button>
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
