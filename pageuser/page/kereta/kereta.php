<?php 
include 'koneksi.php';
 ?>
<div class="row">
    <div class="col-md-12">
                    <!-- Advanced Tables -->
    <div class="panel panel-default">
    <div class="panel-heading">
        Lihat Daftar Kereta
    </div>
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
            </tr>



        <?php } ?>
        </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
</div>