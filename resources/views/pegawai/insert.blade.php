<!DOCTYPE html>
<html lang="id">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARSIP DATA PEGAWAI</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Pegawai</title>
    <style>
        body {
            margin-top:40% ;
            font-family: poppins;
            background-color: #F3EFE0;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 8px;
            position:;
        }

        input, select {
            width: calc(100% - 160px);
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #22A39F;
            color: #fff;
            cursor: pointer;
            border-color: #22A39F;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #1f7875;
        }
        form {
    font-size: 18px; /* Ubah ukuran font formulir */
}

label {
    width: 200px; /* Lebarkan label */
}

input, select {
    width: calc(100% - 210px); /* Lebarkan input fields */
    font-size: 16px; /* Ubah ukuran font input fields */
}

input[type="submit"] {
    font-size: 18px; /* Ubah ukuran font tombol submit */
}
input[type='file'] {
    font-size: 18px;
}










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
                    <h3>ARSIP DATA <br> PEGAWAI</h3>
                </div>
                <div class="navi">
                    <ul>
                        <li class=""><a href="dashboard"><i class="fa fa-home" aria-hidden="true"></i><span> Beranda</span></a>
                        </li>
                        <li class="active"><a href="insert"><i class="fa fa-tasks" aria-hidden="true"></i><span> Tambah Data</span></a></li>
                        <li><a href="lihat"><i class="fa fa-bar-chart" aria-hidden="true"></i><span> Tampilkan Data</span></a>
                        </li>
                        <li><a href="login"><i class="fa fa-sign-out" aria-hidden="true"></i><span> Keluar</span></a></li>
                    </ul>
                </div>
            </div>
            <br><br>

            <div class="card">
                <form action="/tambah/simpan" method="post">
                    @csrf
                    <label for="nip">NIP :</label>
                    <input type="text" id="nip" name="nip" required>

                    <label for="nama">Nama :</label>
                    <input type="text" id="nama_pegawai" name="nama" required>

                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Laki-Laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <label for="tempat_lahir">Tempat Lahir :</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" required>

                    <label for="tanggal_lahir">Tanggal Lahir :</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

                    <label for="status">Status :</label>
                    <select id="status" name="status" required>
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                    </select>

                    <label for="golongan">Golongan :</label>
                    <input type="text" id="golongan" name="golongan" required>

                    <label for="tamat_golongan">Tamat Golongan :</label>
                    <input type="date" id="tamat_golongan" name="tamat_golongan" required>

                    <label for="pendidikan_terakhir">Pendidikan Terakhir :</label>
                    <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" required>

                    <label for="jenis_jabatan">Jenis Jabatan :</label>
                    <input type="text" id="jenis_jabatan" name="jenis_jabatan" required>

                    <label for="tanggal_mulai_tugas_pns">Tanggal Mulai <br> Tugas PNS :</label>
                    <input type="date" id="tmt_pns" name="tanggal_mulai_tugas_pns" required>

                    <label for="tanggal_mulai_tugas_golongan">Tanggal Mulai <br> Tugas Golongan :</label>
                    <input type="date" id="tmt_golongan" name="tanggal_mulai_tugas_golongan" required>


                    <label for="bidang">Bidang : </label>
                    <input type="text" id="bidang" name="bidang" required>

                    <div style="margin-top: 10px;">
                      <label for="file" style="margin-right: 10px;">Pilih File : </label>
                      <input type="file" id="file" name="file" style="font-size: 18px;">
                    </div>

<center>
    <input type="submit" value="Simpan">
</center>


                </form>
            </div>

                    <!-- Sisipkan elemen-elemen formulir lainnya sesuai kebutuhan -->
                </form>
            </div>
        </div>
    </div>
</body>

</html>
