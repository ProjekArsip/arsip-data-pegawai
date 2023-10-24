<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Young+Serif&display=swap" rel="stylesheet">
  </head>
  <style>

body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: linear-gradient(to right, #ffffff, #001a14);
    background-repeat: no-repeat;
}

input, textarea {
    background-color: #F3E5F5;
    border-radius: 50px !important;
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
    border-radius: 0;
    border: none;
}

.card1 {
    width: 50%;
    padding: 40px 30px 10px 30px;
}

.card2 {
    width: 50%;
    background-image: linear-gradient(to right,  #121212, #cecacc);
    font-family: 'Young Serif';
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
    border-radius: 50px;
    color: #fff;
    background-image: linear-gradient(to right, #001a14, #ffffff);
    padding: 15px 150px; /* Saya menambahkan padding horizontal */
    cursor: pointer;
    border: none !important;
    margin-top: 40px;
}


.btn-color:hover {
    color: #fff;
    background-image: linear-gradient(to right, #ffffff, #001a14, #ffffff);
    transition: 0.3s;
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
  </style>
  <body>
  <div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        
                        <h2 class="mb-5 text-center heading">MASUK</h2>

                        <h6 class="msg-info">Please login to your account</h6>

                        <form onsubmit="return validateInput();" action="dashboard" method="get">
                          <div id="error-message" style="color: red; display: none;">
                            Anda harus memasukkan NIK yang benar.
                          </div>
                          
                          <div class="form-group">
                            <label class="form-control-label text-muted">Username</label>
                            <input type="text" id="email" name="email" placeholder="Username" class="form-control">
                          </div>
                          <div id="error-message" style="color: red; display: none;">
                            Anda harus memasukkan NIK yang benar.
                          </div>
                          <div class="form-group">
                            <label class="form-control-label text-muted">Password</label>
                            <input type="password" id="email" name="email" placeholder="Password" class="form-control">
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
                    <h1 class="text-white">ARSIP DATA PEGAWAI</h1>
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
    </script>
    
      
    
  </body>
</html>