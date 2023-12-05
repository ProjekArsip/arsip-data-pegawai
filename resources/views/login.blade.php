<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Young+Serif&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  </head>
  <style>

body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #434242 ;
    background-repeat: no-repeat;
    font-family: 'poppins';
}

input, textarea {
    background-color: #F3E5F5;
    border-radius: 10px !important;
    padding: 12px 15px 12px 15px !important;
    width: 100%;
    box-sizing: border-box;
    border: none !important;
    border: 1px solid #F3E5F5 !important;
    font-size: 16px !important;
    color: #000 !important;
    font-weight: 400;
}

input:focus, textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #D500F9 !important;
    outline-width: 0;
    font-weight: 400;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

.card {
    border-radius: 28px;
    border: none;
    background-color: #F3EFE0;
}

.card1 {
    width: 60%;
}

.card2 {
    width: 40%;
}


.heading {
    margin-bottom: 60px !important;
}

::placeholder {
    color: #000 !important;
    opacity: 1;
}

:-ms-input-placeholder {
    color: #000 !important;
}

::-ms-input-placeholder {
    color: #000 !important;
}

.form-control-label {
    font-size: 12px;
    margin-left: 15px;
}

.msg-info {
    padding-left: 15px;
    margin-bottom: 30px;
}

.btn-color {
    border-radius: 20px;
    color: black;
    background-color: #22A39F;
    padding: 15px 150px; /* Saya menambahkan padding horizontal */
    cursor: pointer;
    border: none !important;
    margin-top: 40px;
    font-weight: 900;
}


.btn-color:hover {
    color: #fff;
    background-color: #209492;
    transition: 0.2s;
}


a {
    color: #000;
}



.bottom {
    width: 100%;
    margin-top: 50px !important;
}

.sm-text {
    font-size: 15px;
}

@media screen and (max-width: 992px) {
    .card1 {
        width: 100%;
        padding: 40px 30px 10px 30px;
    }

    .card2 {
    width: 50%;
    background-image: linear-gradient(to right, #12001a, #ffffff);
}


    .right {
        margin-top: 100px !important;
        margin-bottom: 100px !important;
    }
}

@media screen and (max-width: 768px) {
    .container {
        padding: 10px !important;
    }

    .card2 {
        padding: 50px;
    }

    .right {
        margin-top: 50px !important;
        margin-bottom: 50px !important;
    }
}
.eye-icon {
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    cursor: pointer;
  }
  </style>
  <body>
  <div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">

                        <p style="font-size: 45px; font-weight:700;" class="text-center border-bottom">Login</p>

                        <p style="font-weight: 800" class="text-center">ARSIP KEPEGAWAIAN DINAS CAPIL SAMARINDA</p>

                        <form onsubmit="return validateInput();" action="dashboard" method="get">
                          <div id="error-message" style="color: red; display: none;">
                            Anda harus memasukkan NIK yang benar.
                          </div>

                          <div class="form-group">
                            <label  class="form-control-label text-muted">Username</label>
                            <input type="text" id="email" name="email" placeholder="Username" class="form-control">
                          </div>
                          <div id="error-message" style="color: red; display: none;">
                            Anda harus memasukkan NIK yang benar.
                          </div>
                          <div class="form-group">
                                <label class="form-control-label text-muted">Password</label>
                                <div class="input-group">
                                  <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                  <i id="eye-icon" class="eye-icon fa fa-eye-slash" onclick="togglePasswordVisibility()"></i>
                                </div>
                              </div>
                          <div class="row justify-content-center my-3 px-3">
                            <button type="submit" class="btn-block btn-color">Login</button>
                          </div>
                        </form>



                    </div>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Logo_Kota_Samarinda.png" alt="" style="width: 265px; height:272px;">
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
      function validateInput() {
        var usernameInput = document.getElementById('email');
        var username = usernameInput.value;

        // Menghilangkan spasi dan karakter non-digit
        var numericInput = username.replace(/\D/g, '');

        var errorContainer = document.getElementById('error-message');

        if (numericInput.length === 16) {
          // Input valid
          errorContainer.style.display = 'none';
          return true;
        } else {
          // Input tidak valid
          errorContainer.style.display = 'block';
          return false;
        }
      }
      function togglePasswordVisibility() {
      var passwordInput = document.getElementById('password');
      var eyeIcon = document.getElementById('eye-icon');

      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
      } else {
        passwordInput.type = 'password';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
      }
    }
    </script>



  </body>
</html>
