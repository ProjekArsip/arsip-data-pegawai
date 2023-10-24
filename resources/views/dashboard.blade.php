<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARSIP DATA PEGAWAI</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <style>
        body {
            background-image: linear-gradient(to right, #001a14, #ffffff);
            color: #000;
            margin: 0;
            padding: 0;
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
            width: 250px;
            background-image: linear-gradient(to right, #001a14, #ffffff);
        }

        .logo {
            text-align: center;
            margin-top: 20px;
        }

        .logo h3 {
            color: white;
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
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s; /* Efek transisi warna */
        }



        .navi a:hover,
        .navi .active a {
            padding-left: 15px;
            transition: 0.3s;
        }

        .navi .active a {
            color: white /* Warna hitam saat aktif */
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
                    <h3>ARSIP DATA PEGAWAI</h3>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
                        </li>
                        <li><a href="insert"><i class="fa fa-tasks" aria-hidden="true"></i><span>Tambah Data</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span>Tampilkan Data</span></a>
                        </li>
                        <li><a href="login"><i class="fa fa-cog" aria-hidden="true"></i><span>Log Out</span></a></li>
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
