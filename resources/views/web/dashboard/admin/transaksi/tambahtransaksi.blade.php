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
                Transaction Add
                <a href="/web.dashboard.admin.transaksi.transaksi" class="btn btn-danger float-end ">BACK</a>
              </h4>
            </div>
            <div class="card-body">
              <form action="/web.dashboard.admin.transaksi.tambahtransaksi" method="POST">
                @csrf
                <div class="mb-3">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="jaminan">Jaminan</label> <br>
                    <select id="jaminan" name="jaminan" class="form-control">
                      <option value="KTP">KTP</option>
                      <option value="SIM">SIM</option>
                      <option value="KK">KK</option>
                      <option value="KP">KP</option>
                      <option value="lainnya">lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" />
                </div>
                <div class="mb-3">
                  <label>No SIM</label>
                  <input type="text" name="no_sim" class="form-control" />
                </div>
                <div class="mb-3">
                  <label>No HP</label>
                  <input type="text" name="no_hp" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="durasi">Durasi</label> <br>
                    <select id="durasi" name="durasi" class="form-control">
                      <option value="12 jam">12 jam</option>
                      <option value="24 jam">24 jam</option>
                      <option value="48 jam">48 jam</option>
                      <option value="96 jam">96 jam</option>
                      <option value="168 jam">168 jam</option>
                      <option value="lainnya">lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Tambah</button>
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
