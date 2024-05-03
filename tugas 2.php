
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tugas2.css">
</head>
<body>
    <form action="tugas2php.php" method="POST">
    <br>
    <div>
        <label>Nama : </label><br>
        <input type="text" placeholder="Masukkan nama" name="nama">
    </div>    
    <br>
    <div>
        <label>Jenis Kelamin : </label>
        <br>
        <input type="radio" name="JenisKelamin" value="L">Laki-Laki
        <input type="radio" name="JenisKelamin" value="P">Perempuan
    </div>
    <br>
    <div>
        <label>Agama : </label>
        <select name="agama" >
    <option value="Islam">Islam</option>
    <option value="Buddha">Buddha</option>
    <option value="Kristen">Kristen</option>
    <option value="Katolik">Katolik</option>
    <option value="Konghucu">Konghucu</option>
    <option value="Hindu">Hindu</option>
        </select>
    </div>
    <br>
    <div>
        <Label for="tempat">Tempat Lahir</Label><br>
        <input type="text" placeholder="Masukkan Tempat Lahir" name="tempatlahir">
    </div>
    <br>
    <div>
        <label for="datemin">Tanggal Lahir :</label><br>
        <input type="date" id="datemin" name="datemin"><br>
    </div>
    <br>
    <div>
    <label>Hobi :</label>
    <br>
    <input type="text" placeholder="Masukkan Hobi" name="Hobi">
    </div>
    <br>
    <div>
    <label>Cita-cita :</label>
    <br>
    <input type="text" placeholder="Masukkan Cita-cita" name="citacita">
    </div>
    <br>
    <div>
        <label>Usia : </label>
        <br>
        <input type="text" placeholder="Masukkan Usia" name="usia">
    </div>
    <br>
    <div>
        <label>Asal Sekolah : </label>
        <br>
        <input type="text" placeholder="Masukkan Asal Sekolah" name="Asalsekolah">
        <br>
        <br>
        <button>Submit</button>
    </div>


    </form>

    </body>
    </html>