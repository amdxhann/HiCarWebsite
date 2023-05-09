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
                Customer Edit
                <a href="customers.html" class="btn btn-danger float-end ">BACK</a>
              </h4>
            </div>
            <div class="card-body">
              <form action="code.php" method="POST">
                <input type="hidden" name="student_id" ? />

                <div class="mb-3">
                  <label>Nama</label>
                  <input type="text" name="name" class="form-control" />
                </div>
                <div class="mb-3">
                  <label for="">Jaminan</label>
                  <form action="/action_page.php">
                    <input type="file" id="myFile" name="filename" class="form-control">
                    <input type="submit" style="margin-top: 10px;">
                  </form>
                </div>
                <div class="mb-3">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" />
                </div>
                <div class="mb-3">
                  <label>No. SIM</label>
                  <input type="text" name="course" class="form-control" />
                </div>
                <div class="mb-3">
                  <label>No. HP</label>
                  <input type="text" name="course" class="form-control" />
                </div>
                <div class="mb-3">
                  <label>Durasi</label>
                  <input type="text" name="Durasi" class="form-control" />
                </div>
                <div class="mb-3">
                  <button type="submit" name="update_student" class="btn btn-primary ">Edit Customer</button>
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
