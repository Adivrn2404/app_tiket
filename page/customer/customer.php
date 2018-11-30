<div class="row">
    <div class="col-md-12">
                    <!-- Advanced Tables -->
    <div class="panel panel-default">
    <div class="panel-heading">
        Lihat Data Customer
    </div>
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                
                $no = 1;

                $sql = $koneksi->query("SELECT * FROM customer");

                while ($data = $sql->fetch_assoc()) {
                    
             ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['address']; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['gender']; ?></td>
            </tr>



        <?php } ?>
        </tbody>
        </table>
    </div>
    <a href="./laporan/laporan_datacustomer.php" target="blank" class="btn btn-success" style="margin-top: 10px;"><i class="fa fa-print"></i> Export To Excel</a>
    <a href="./cetakpdf/cetakcustomer.php" target="blank" class="btn btn-danger" style="margin-top: 10px;"><i class="fa fa-print"></i> Export To PDF</a>
    </div>
    </div>
    </div>
</div>