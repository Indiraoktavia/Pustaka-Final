<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
</head>
<body>
    <center>
        <form action=" <?= base_url('datasiswa/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3"> 
                    Form Input Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3"> 
                    <hr>
                </td>
            </tr>
            <tr>
               <th>nis</th>
                <th>:</th>
                <td>
                    <input required type="text" name="nis" id="nis">
                </td>
            </tr>
            <tr>
                <th>Nama </th>
                <td>:</td>
                <td>
                    <input required type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
               <th>kelas</th>
                <th>:</th>
                <td>
                    <input required type="text" name="kelas" id="kelas">
                </td>
            </tr>
            <tr>
               <th>tanggal lahir</th>
                <th>:</th>
                <td>
                    <input required type="text" name="tanggallahir" id="tanggal lahir">
                </td>
            </tr>
            <tr>
               <th>tempat lahir</th>
                <th>:</th>
                <td>
                    <input required type="text" name="tempatlahir" id="tempat lahir">
                </td>
            </tr>
            <tr>
               <th>alamat</th>
                <th>:</th>
                <td>
                    <input required type="text" name="alamat" id="alamat">
                </td>
            </tr>
            <tr>
                <th>agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">Pilih Agama</option>
                        <option value="2">Islam</option>
                        <option value="3">Kristen</option>
                        <option value="4">Katolik</option>
                        <option value="4">Budha</option>
                        <option value="4">Hindu</option>
                        <option value="4">Protestan</option>
                        <option value="4">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type= "submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>