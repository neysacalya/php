<?php

$siswa = array(
        ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'], 
        ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'], 
        ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'], 
        ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'], 
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style></style>
    <?php foreach ($siswa as $sswa) : ?>
        <div class="kotak">
        <?= $sswa["nama"];?>
        <br>
        <?=$sswa["kelas"]; ?>
        <?=$sswa["jurusan"]; ?>
        </div>
    <?php endforeach?>
</body>
</html>