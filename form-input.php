<html>
    <head>
        <title>Form Input</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" nama="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" nama="nama"></td></tr>
                <tr><td>JENIS KELAMIN</td><td>
                        <input type="radio" nama="jenis_kelamin" value="L">Laki laki
                        <input type="radio" nama="jenis_kelamin" value="P">Perempuan
                    </td><td> 
                <tr><td>JURUSAN</td><td>
                        <select nama="jurusan">
                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option> 
                        </select
                    </td></tr>
                    <tr><td>ALAMAT</td><td><input type="text"  nama="alamat"</td></td>
                    <tr><td colspan="2"><button type="submit"  value="simpan">SIMPAN</button></td></td>
                </table>
            </form>
        </body> 
    </html>