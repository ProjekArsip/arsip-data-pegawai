<!DOCTYPE html>
<html lang="id">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARSIP DATA PEGAWAI</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Pegawai</title>
    <style>
        body {
            margin-top:40% ; 
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
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











        body {
            background-image: linear-gradient(to right, #EDF1D6, #40513B, #40513B, #EDF1D6);
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
    background-image: linear-gradient(to right, #40513B,  #EDF1D6);
    height: 100vh; /* Ganti properti height menjadi 100vh */
    position: fixed;
}

.display-table-cell {
    display: table-cell;
    float: none;
    vertical-align: top;
    position: relative;
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
                        <li class=""><a href="dashboard"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
                        </li>
                        <li class="active"><a href="insert"><i class="fa fa-tasks" aria-hidden="true"></i><span>Tambah Data</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span>Tampilkan Data</span></a>
                        </li>
                        <li><a href="login"><i class="fa fa-cog" aria-hidden="true"></i><span>Log Out</span></a></li>
                    </ul>
                </div>
            </div>          
            <br><br>
            <div class="card">
                <form action="/tambah/simpan" method="post">
                    @csrf 
                    <label for="nip">NIP:</label>
                    <input type="text" id="nip" name="nip" required>
            
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                    
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Menikah">Laki-laki</option>
                        <option value="Belum Menikah">Perempuan</option>
                    </select>
            
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" required>
            
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
            
                    <label for="status">Status:</label>
                    <select id="status" name="status" required>
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                    </select>
            
                    <label for="golongan">Golongan:</label>
                    <input type="text" id="golongan" name="golongan" required>
            
                    <label for="tamat_golongan">Tamat Golongan:</label>
                    <input type="date" id="tamat_golongan" name="tamat_golongan" required>
            
                    <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
                    <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
            
                    <label for="jenis_jabatan">Jenis Jabatan:</label>
                    <input type="text" id="jenis_jabatan" name="jenis_jabatan" required>
            
                    <label for="tanggal_mulai_tugas_pns">Tanggal Mulai Tugas PNS:</label>
                    <input type="date" id="tanggal_mulai_tugas_pns" name="tanggal_mulai_tugas_pns" required>
            
                    <label for="tanggal_mulai_tugas_golongan">Tanggal Mulai Tugas Golongan:</label>
                    <input type="date" id="tanggal_mulai_tugas_golongan" name="tanggal_mulai_tugas_golongan" required>
            
                    <label for="bidang">Bidang:</label>
                    <input type="text" id="bidang" name="bidang" required>

                    <label for="file">Pilih File:</label>
                    <input type="file" id="file" name="file">
            
                    <center> <input type="submit" value="Simpan"> </center>
                </form>                
            </div>                

                    <!-- Sisipkan elemen-elemen formulir lainnya sesuai kebutuhan -->
                </form>
            </div>
        </div>
    </div>
</body>

</html>
