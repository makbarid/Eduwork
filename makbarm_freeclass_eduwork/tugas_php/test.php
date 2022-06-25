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
                padding: 15px 0;
                padding-left: 20px;
                font-weight: 400;
            }
            .table {
                margin: 30px auto;
            }
            th, td {
                padding: 8px;
            }
            .grey {
                background-color: grey;
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
                print_r($data);
                ?>

                <?php for($i = 0; $i < count($data); $i++) : ?>
                    <?php if( $i % 2 == 1 ) : ?>
                        <?php $clases = 'class ="white"' ?>
                        <?php else : ?>
                        <?php $clases = 'class ="grey"' ?>
                    <?php endif; ?> 

                    <tr <?= $clases ?>>
                        <td><?= $i+1 ?></td>
                        <td><?= $data[1]["nama"] ?></td>
                        
                    </tr>
                <?php endfor; ?>
                
                
                </tbody>
            </table>
        </div>
    </div>
        
    </body>
</html>