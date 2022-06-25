<!DOCTYPE html>
<html>
    <head>
        <title>array</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                font-size: 18px;
            }
            .head {
                background-color : orange;
                padding: 20px 0;
                padding-left: 35px;
                font-weight: 400;
            }
            .table {
                margin: 70px auto;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
            .grey {
                background-color: #ECECEC;
            }
            .white {
                background-color: white;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="head">
            <p>Daftar Nilai</p>
        </div>

        <div class="content">
            <table border = "1" cellpadding = "0" cellspacing = "0" class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                        <th>Nilai</th>
                        <th>Hasil</th>
                    </tr>
                </thead>

                <tbody>
                <?php 
                $filename = file_get_contents("C:/xampp/htdocs/tugas_php/data.json");
                $data = json_decode($filename, true);

                $i = 1;
                ?>

                <?php foreach($data as $siswa) : ?>
                
                        <?php if($i % 2 == 1) : ?>
                            <?php $clases = 'class ="grey"' ?>
                        <?php else : ?>
                            <?php $clases = 'class ="white"' ?>
                        <?php endif; ?>
                                
                            <tr <?= $clases ?>>
                                <td><?= $i++; ?>.</td>
                                <td><?= $siswa["nama"]; ?></td>

                                <!-- Ubah Format Tanggal -->

                                <?php 
                                $nama_bulan = array(1=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'); ?>

                                <?php $pecah = explode("-", $siswa["tanggal_lahir"]);
                                $bulan = (int)$pecah[1];
                                ?>
                                
                                <td><?= $pecah[2]." ".$nama_bulan[$bulan]." ".$pecah[0] ?></td>

                                <!-- Hitung Usia -->

                                    <?php
                                                                        
                                        $tanggal = new DateTime($siswa["tanggal_lahir"]);
                                        $today = new DateTime();
                                        $usia = $today->diff($tanggal)->y;
                                    ?>

                                <td><?= $usia ?> Tahun</td>
                                <td><?= $siswa["alamat"]; ?></td>
                                <td><?= $siswa["kelas"]; ?></td>
                                <td><?= $siswa["nilai"]; ?></td>
                                
                                <!-- Hitung Grade -->
                                
                                    <?php
                                    
                                    if($siswa["nilai"] >= 90) {
                                        $grade = "A";
                                    } else if($siswa["nilai"] >= 80 && $siswa["nilai"] < 90) {
                                        $grade = "B";
                                    } else if($siswa["nilai"] >= 70 && $siswa["nilai"] < 80) {
                                        $grade = "C";
                                    } else {
                                        $grade = "D";
                                    }
                                    
                                    ?>

                                <td><?= $grade; ?></td>

                            </tr>
                
                <?php endforeach; ?>
                
                
                </tbody>
            </table>
        </div>
    </div>
        
    </body>
</html>