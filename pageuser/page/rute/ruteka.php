<?php  
include 'koneksi.php';
?>
<div class="row">
    <div class="col-md-12">
                    <!-- Advanced Tables -->
    <div class="panel panel-default">

    <div class="panel-heading">
        Lihat Rute
    </div>
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
                <th>Pesan Tiket</th>
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
                <td><a  href="?page=rute&aksi=pesan&id=<?php echo $data['id'];?>" class="btn btn-danger">Pesan</a></td>
            </tr>



        <?php } ?>
        </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
</div>