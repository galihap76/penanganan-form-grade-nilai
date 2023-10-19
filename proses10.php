<html>

<head>
    <title>Program Hitung Grade Nilai Mahasiswa</title>
    <style>
        .form-container {
            margin-top: 30px;
            border: 1px solid black;
            width: 50%;
        }

        h3 {
            margin-left: 25px;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h3>Grade Nilai Mahasiswa</h3>

        <?php
        if (isset($_POST['hitung']) && $_SERVER['REQUEST_METHOD'] == "POST") {
            $nim = filter_var($_POST['nim'], FILTER_VALIDATE_INT);
            $nama = htmlentities($_POST['nama'], ENT_QUOTES);
            $nilai = filter_var($_POST['nilai'], FILTER_VALIDATE_INT);
            $pesanNilai = "";

            if ($nilai > 100){
                $pesanNilai .= "Nilai tidak boleh lebih dari 100.";
            }else if ($nilai >= 81 && $nilai <= 100) {
                $pesanNilai .= "A, dengan nilai $nilai kamu di nyatakan lulus (Y).";
            }else if ($nilai >= 61 && $nilai <= 80) {
                $pesanNilai .= "B, dengan nilai $nilai kamu di nyatakan lulus (Y).";
            }else if ($nilai >= 41 && $nilai <= 60) {
                $pesanNilai .= "C, dengan nilai $nilai kamu di nyatakan lulus (Y).";
            }else if ($nilai >= 21 && $nilai <= 40) {
                $pesanNilai .= "D, dengan nilai $nilai kamu di nyatakan tidak lulus (N).";
            }else if ($nilai >= 1 && $nilai <= 20) {
                $pesanNilai .= "E, dengan nilai $nilai kamu di nyatakan tidak lulus (N).";
            }else if($nilai >= 0){
                $pesanNilai .= "T, dengan nilai $nilai kamu di nyatakan tidak lulus (N).";
            }

        ?>

            <ul>

                <li>
                    NIM : <?php echo $nim; ?>
                </li>

                <li>
                    Nama : <?php echo $nama; ?>
                </li>

                <li>
                    Nilai : <?php echo $pesanNilai; ?>
                </li>

                <a href="input10.php"><button type="button">Ulangi</button></a>
            </ul>
        <?php } else { ?>
            <p style="color:red;">Tidak ada permintaan pada form input10.php.</p>
        <?php } ?>
    </div>
</body>

</html>
