<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data DataSiswa</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>nama</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>nis</td>
                <td>:</td>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <td>kelas</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <td>tanggal</td>
                <td>:</td>
                <td>
                    <?= $tanggallahir; ?>
                </td>
            </tr>
            <tr>
                <td>tempat</td>
                <td>:</td>
                <td>
                    <?= $tempatlahir; ?>
                </td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <td>agama</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('datasiswa');
        ?>"></a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>