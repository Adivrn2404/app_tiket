<div class="row">
    <div class="col-md-12">
                    <!-- Advanced Tables -->
    <div class="panel panel-default">

    <div class="panel-heading">
        Lihat Rute
    </div>
<a href="?page=rute&aksi=tambah" class="btn btn-success"  style="margin-top: 10px; margin-left: 15px;"><i class="fa fa-plus"></i> Tambah Rute Kereta</a>
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Depart_At</th>
                <th>Rute_From</th>
                <th>Rute_To</th>
                <th>Price</th>
                <th>Transportation_id</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                
                $no = 1;

                $sql = $koneksi->query("SELECT * FROM rute");

                while ($data = $sql->fetch_assoc()) {
                    
             ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['depart_at']; ?></td>
                <td><?php echo $data['rute_from']; ?></td>
                <td><?php echo $data['rute_to']; ?></td>
                <td><?php echo $data['price'] ?></td>
                <td><?php echo $data['transportationid'] ?></td>
                <td>
                    <a href="?page=rute&aksi=ubah&id=<?php echo $data['id'];?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Anda yakin akan menghapusnya?')" href="?page=rute&aksi=hapus&id=<?php echo $data['id'];?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>



        <?php } ?>
        </tbody>
        </table>
    </div>
    <a href="./laporan/laporan_ruteka.php" target="blank" class="btn btn-success" style="margin-top: 10px;"><i class="fa fa-print"></i> Export To Excel</a>
    <a href="./cetakpdf/cetakruteka.php" target="_blank" class="btn btn-danger" style="margin-top: 10px;"><i class="fa fa-print"></i> Export To PDF</a>
    </div>
    </div>
    </div>
</div>