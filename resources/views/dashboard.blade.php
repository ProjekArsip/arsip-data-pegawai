    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ARSIP DATA PEGAWAI</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <style>
            body {
                background-color: #434242;
                color: #000;
                margin: 0;
                padding: 0;
                font-family: poppins;
            }

            .display-table {
                width: 100%;
                height: 100vh;
                display: table;
            }

            .display-table-row {
                display: table-row;
            }

            .display-table-cell {
                display: table-cell;
                float: none;
                height: 100%;
                vertical-align: top;
            }

            #navigation {
                background-color: #F3EFE0;
                width: 250px;
            }

            .logo {
                text-align: center;
                margin-top: 20px;
            }

            .logo h3 {
                margin: 0;
            }

            .navi {
                margin-top: 20px;
            }

            .navi ul {
                padding: 0;
                list-style: none;
            }

            .navi li {
                padding: 10px 20px;
            }

            .navi a {
                color: black;
                text-decoration: none;
                font-size: 20px;
                transition: color 0.3s; /* Efek transisi warna */
            }



            .navi a:hover,
            .navi .active a {
                padding-left: 15px;
                transition: 0.3s;
            }

            .navi .active a {
                color: black /* Warna hitam saat aktif */
            }

            .content {
                padding: 20px;
            }
        </style>
    </head>

    <body>

        <div class="display-table">
            <div class="display-table-row">
                <div class="display-table-cell" id="navigation">
                    <div class="logo">
                        <h3>ARSIP DATA <br>  PEGAWAI</h3>
                    </div>
                    <div class="navi">
                        <ul>
                            <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>   Beranda</span></a>
                            </li>
                            <li><a href="insert"><i class="fa fa-tasks" aria-hidden="true"></i><span>   Tambah Data</span></a></li>
                            <li><a href="lihat"><i class="fa fa-bar-chart" aria-hidden="true"></i><span>   Tampilkan Data</span></a>
                            </li>
                            <li><a href="login"><i class="fa fa-sign-out" aria-hidden="true"></i><span>   Keluar</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="display-table-cell content">

                    <!-- Konten dashboard Anda akan ada di sini -->
                </div>
            </div>
        </div>
    </body>

    </html>
