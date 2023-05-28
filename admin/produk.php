<h2>Data Produk</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Berat</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <tbody>
            <?php $nomor=1; ?>
            <?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
            <?php while($pecah = $ambil->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td>
                <img src="../foto_produk/<?php echo $pecah['foto_produk'];?>" width="100px"> 
                </td>
                <td><?php echo $pecah['nama_produk']; ?></td>
                <td><?php echo $pecah['deskripsi_produk']; ?></td>
                <td><?php echo $pecah['harga_produk']; ?></td>
                <td><?php echo $pecah['berat_produk']; ?></td>
                <td><?php echo $pecah['stok_produk']; ?></td>
                <td>
                    <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah ['id_produk']; ?>" class="btn-danger btn">Hapus</a>
                    <a href="index.php?halaman=ubahproduk&id=<?php echo $pecah ['id_produk']; ?>" class="btn-warning btn">Ubah</a>
                </td>
            </tr>
            <?php $nomor++; ?>
            <?php } ?>
        </tbody>
    </thead>
</table>
<a href="index.php?halaman=tambahproduk" class="btn-primary btn">Tambah Data</a>