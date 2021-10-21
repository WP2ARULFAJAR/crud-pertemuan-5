<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <center>
        <hl>Input Data Mahasiswa</hl>
        <label style="color:#FF0000"><?php echo validation_errors(); ?></label>
    </center>
    <form action="<?php echo base_url(). 'index.php/kampus/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
        <table style="margin:20px auto;">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="Pekerjaan"></td>
            </tr>
            <tr>
                <td>Upload Foto</td>
                <td><input type="file" name="foto"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"> <input type="reset" value="Batal"> <?php echo anchor('kampus/index','<input type=button value=kembali>'); ?></td>
            </tr>
        </table>
    </form>
</body>
</html>