<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('web/css/singup.css') }}" />
    <link rel="shortcut icon" href="{{ asset('web/css/images/car-sport.svg') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="{{ asset('web/js/validasi_signup.js') }}"></script>
  </head>
  
</head>
  <body>
    <div class="container">
      <div class="jumbopict"><img src="{{ asset('web/images/loigncustomer2.gif') }}" style="margin-left: 100px; margin-top: 50px;" ></div>
      <div class="login">
        <div class="signin">
          <a href="/index" class="back" aria-label="Profile">
            <ion-icon name="arrow-undo-circle-outline"></ion-icon>
          </a>
          <h1 style="margin-bottom: 50px;">Create an account</h1>
        </div>

        <div class="forms">
          <form action="/" id="form">
            <div class="input-control">
              <label for="email">Email Adress</label>
              <input type="text" name="email" id="email" />
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" />
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="password">Password</label>
              <input type="Password" name="password" id="password" />
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="password">Confirm Password</label>
              <input type="Password" name="password" id="password2" />
              <div class="error"></div>
            </div>

            <div class="termsOfUse">
              <p style="margin-bottom: 0px;">Already have an account? 
                <a href="/loginCustomer">Login</a>
              </p>
              <p>
                By creating an account, you aggre to our
                <a href="">Terms of Use</a> and <a href="">Privacy Policy</a>
              </p>
            </div>
            <button type="submit" class="btn-submit">Create an account</button>
          </form>
        </div>
      </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
