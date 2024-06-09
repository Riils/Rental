<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rental Motor</title>
        <style>
            body {
                background-color: darkolivegreen;
            }

            form {
                max-width: 600px;
                margin: 50px auto;
                padding: 20px;
                background-color: grey;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .form-label {
                color: white;
            }

            .btn-primary {
                background-color: orange ;
                border-color: orangered;
            }

            .btn-primary:hover {
                background-color: orangered;
                border-color: orange;
            }

            .form-group {
                margin-bottom: 15px;
            }
            .kanan {
                text-align: end;
            }
        </style>
    </head>

    <body>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama" class="form-label">Masukan nama :</label>
                <input type="text" name="member" id="nama" class="form-control" placeholder="Masukan nama" required>
            </div>
            <div class="form-group">
                <label for="jenis" class="form-label">Pilih Jenis Motor : </label>
                <select name="jenis" id="jenis" class="form-select" required>
                    <option value="default" selected disabled>Pilih Motor</option>
                    <option value="Scooter">Scooter</option>
                    <option value="Motorbebek">Motorbebek</option>
                    <option value="Beat">Beat</option>
                    <option value="Revo">Revo</option>
                    <option value="Supra">Supra</option>
                   
                
                </select>
            </div>
            <div class="form-group">
                <label for="waktu" class="form-label">Masukan waktu sewa : </label>
                <input type="number" name="waktu" id="waktu" class="form-control" min="1" placeholder="Minimal 1 hari" required>
            </div>
            <div class="kanan">
            <button type="submit" name="submit" class="btn btn-primary">Sewa</button>
            </div>  
        </form>

        <?php

        include 'Logic.php';

        $logic = new Rental();
        $logic->setHarga(50000, 150000, 100000, 75000, 500000,);

        if (isset($_POST['submit'])) {
            $logic->member = $_POST['member'];
            $logic->jenis = $_POST['jenis'];
            $logic->waktu = $_POST['waktu'];

            $logic->Pembayaran();
        }
        ?>
    </body>

    </html>