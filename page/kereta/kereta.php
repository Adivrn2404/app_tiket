<div class="row">
    <div class="col-md-12">
                    <!-- Advanced Tables -->
    <div class="panel panel-default">
    <div class="panel-heading">
        Lihat Daftar Kereta
    </div>
    <a href="?page=kereta&aksi=tambah" class="btn btn-success"  style="margin-top: 10px; margin-left: 15px;"><i class="fa fa-plus"></i> Tambah Data Kereta</a>
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Code</th>
                <th>Description</th>
                <th>Seat_qty</th>
                <th>Transportation_typeid</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                
                $no = 1;

                $sql = $koneksi->query("SELECT * FROM transportation");

                while ($data = $sql->fetch_assoc()) {
                    
             ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['code']; ?></td>
                <td><?php echo $data['description']; ?></td>
                <td><?php echo $data['seat_qty']; ?></td>
                <td><?php echo $data['transportation_typeid']; ?></td>

                <td>
                    <a href="?page=kereta&aksi=ubah&id=<?php echo $data['id'];?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Anda yakin akan menghapusnya?')" href="?page=kereta&aksi=hapus&id=<?php echo $data['id'];?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
    <a href="./laporan/laporan_kereta.php" target="blank" class="btn btn-success" style="margin-top: 10px;"><i class="fa fa-print"></i> Export To Excel</a>
    <a href="./cetakpdf/cetakkereta.php" target="blank" class="btn btn-danger" style="margin-top: 10px;"><i class="fa fa-print"></i> Export To PDF</a>
    </div>
    </div>
    </div>
</div>