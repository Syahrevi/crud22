<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="simpan.php" method="post" name="form_input">
            <div class="h">
                <h2>Input Data Barang</h2>
            </div>
            <div class="container2">
                <table class="table" id="form">
                    <tr>
                        <td>
                            Kode
                        </td>
                        <td>:</td>
                        <td>
                            AUTO
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nama Produk
                        </td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Harga
                        </td>
                        <td>:</td>
                        <td><input type="number" name="harga" id="" class="i"></td>
                    </tr>
                    <tr>
                        <td>
                            Satuan
                        </td>
                        <td>:</td>
                        <td>
                            <select name="satuan" id="" class="i">
                                <option value="-">Pilih</option>
                                <option value="Gelas">Gelas</option>
                                <option value="Piring">Piring</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Kategori
                        </td>
                        <td>:</td>
                        <td>
                            <select name="kategori" id="" class="i">
                                <option value="-">Pilih</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            URL Gambar
                        </td>
                        <td>:</td>
                        <td>
                            <input type="url" name="url" id="" class="i">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Stok
                            </tdidth="100px">
                        <td>:</td>
                        <td>
                            <input type="number" name="stok" id="" class="i">
                        </td>
                    </tr>
                </table>
            </div>
                <input type="submit" value="Simpan" class="b">
                <input type="button" value="Lihat" onclick="window.location.href = 'tampil.php';" class="bb">
        </form>
    </div>
    <br>

</body>

</html>