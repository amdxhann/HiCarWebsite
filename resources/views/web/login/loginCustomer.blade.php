<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <link rel="stylesheet" href="{{ asset('web/css/login.css') }}" />
    <link rel="shortcut icon" href="{{ asset('web/css/images/car-sport.svg') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="{{ asset('web/js/validasi_login.js') }}"></script>
  </head>
  </head>
  <body>
    <div class="container">
      <div class="jumbopict"><img src="{{ asset('web/images/loigncustomer.gif') }}" style="margin-left: 100px; margin-top: 50px;" ></div>
      <div class="login">
        <div class="signin" style="margin-bottom: 50px;">
          <a href="/signUpCustomer" class="back" aria-label="Profile">
            <ion-icon name="arrow-undo-circle-outline"></ion-icon>
          </a>
          <h1>Log In</h1> 
        </div>

        <div class="continuewith">
          <a href="" class="google choose">
            <img class="card-img" src="{{ asset('web/images/google.png') }}"/>
            <p>Continue With Google</p>
          </a>
          <a href="" class="twitter choose">
            <img class="card-img" src="{{ asset('web/images/twitter.png') }}"/>
            <p>Continue With Twitter</p>
          </a>
        </div>
        <div class="or">
          <div class="line"></div>
          <p>OR</p>
          <div class="line"></div>
        </div>

        <div class="forms">
          <form action="/" id="form">
            <div class="input-control">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" />
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="password">Your password</label>
              <input type="Password" name="password" id="password" />
              <div class="error"></div>
            </div>           

            <div class="termsOfUse">
              <a href="">Forget Your Password</a>
              <p style="margin-bottom: 10px;">Need an account?  
                <a href="/signUpCustomer">Sign up now!</a>
              </p>
              </p>
              <button type="submit" class="btn-submit">
                <a href="/dashboardCust" 
                style="color: white;
                font-size: 20px;
                letter-spacing: 2px;
                text-decoration: none;
                font-weight: bold;">
                  Login
                </a>
              </button>
          </form>
        </div>
      </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
