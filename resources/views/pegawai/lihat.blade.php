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
        .display-table-cell.content {
    padding: 20px;
    overflow-x: auto; /* Membuat area konten dapat di-scroll secara horizontal */
}

table {
    max-width: 100%; /* Mengatur lebar maksimum tabel agar dapat di-lebarkan */
    width: 100%;
    white-space: nowrap; /* Mencegah teks dalam sel tabel untuk melipat baris */
}
tr {
    background-color: #F3EFE0;
    border: 1px solid gainsboro;
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
                        <li><a href="dashboard"><i class="fa fa-home" aria-hidden="true"></i><span>   Beranda</span></a>
                        </li>
                        <li><a href="insert"><i class="fa fa-tasks" aria-hidden="true"></i><span>   Tambah Data</span></a></li>
                        <li class="active"><a href="lihat"><i class="fa fa-bar-chart" aria-hidden="true"></i><span>   Tampilkan Data</span></a>
                        </li>
                        <li><a href="login"><i class="fa fa-sign-out" aria-hidden="true"></i><span>   Keluar</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="display-table-cell content">
                <div class="display-table-cell content">
                    <h2 style="color: white">Daftar Pegawai</h2>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIP</th>
                                <th>Nama Pegawai</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Status</th>
                                <th>Golongan</th>
                                <th>Tamat Golongan</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Jenis Jabatan</th>
                                <th>TMT CPNS</th>
                                <th>TMT PNS</th>
                                <th>TMT Golongan</th>
                                <th>Bidang</th>
                                <th>ID Berkas</th>
                                <th>Timestamps</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            // Ambil data dari tabel pegawai
                            $pegawaiList = DB::table('pegawai')->get();

                            foreach ($pegawaiList as $pegawai) {
                                echo "<tr>";
                                echo "<td>{$pegawai->id}</td>";
                                echo "<td>{$pegawai->nip}</td>";
                                echo "<td>{$pegawai->nama_pegawai}</td>";
                                echo "<td>{$pegawai->tempat_lahir}</td>";
                                echo "<td>{$pegawai->tanggal_lahir}</td>";
                                echo "<td>{$pegawai->status}</td>";
                                echo "<td>{$pegawai->golongan}</td>";
                                echo "<td>{$pegawai->tamat_golongan}</td>";
                                echo "<td>{$pegawai->pendidikan_terakhir}</td>";
                                echo "<td>{$pegawai->jenis_jabatan}</td>";
                                echo "<td>{$pegawai->tmt_cpns}</td>";
                                echo "<td>{$pegawai->tmt_pns}</td>";
                                echo "<td>{$pegawai->tmt_golongan}</td>";
                                echo "<td>{$pegawai->bidang}</td>";
                                echo "<td>{$pegawai->id_berkas}</td>";
                                echo "<td>{$pegawai->timestamps}</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
