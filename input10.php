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

        input[type=text],
        input[type=number] {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h3>Program Hitung Grade Nilai Mahasiswa</h3>
        <form method="post" action="proses10.php">
            <ul>

                <li>
                    <label for="nim">NIM : </label>
                    <input type="number" name="nim" id="nim" required>
                </li>

                <li>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" maxlength="30" autocomplete="off" required>
                </li>

                <li>
                    <label for="nilai">Nilai : </label>
                    <input type="number" name="nilai" id="nilai" required>
                </li>

                <button type="submit" name="hitung">Hitung</button>
            </ul>
        </form>
    </div>
</body>

</html>
