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
            $nim = htmlspecialchars($_POST['nim']);
            $nama = htmlspecialchars($_POST['nama']);
            $nilai = htmlspecialchars($_POST['nilai']);
            $pesanNilai = "";

            if ($nilai >= 81) {
                $pesanNilai .= "A, dengan nilai $nilai kamu di nyatakan lulus (Y).";
            } else if ($nilai >= 61) {
                $pesanNilai .= "B, dengan nilai $nilai kamu di nyatakan lulus (Y).";
            } else if ($nilai >= 41) {
                $pesanNilai .= "C, dengan nilai $nilai kamu di nyatakan lulus (Y).";
            } else if ($nilai >= 21) {
                $pesanNilai .= "D, dengan nilai $nilai kamu di nyatakan tidak lulus (N).";
            } else if ($nilai >= 1) {
                $pesanNilai .= "E, dengan nilai $nilai kamu di nyatakan tidak lulus (N).";
            } else {
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
            <?php } ?>

            <a href="input10.php"><button type="button">Ulangi</button></a>
            </ul>
    </div>
</body>

</html>