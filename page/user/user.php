<div class="row">
    <div class="col-md-12">
                    <!-- Advanced Tables -->
    <div class="panel panel-default">
    <div class="panel-heading">
        Lihat Data User
    </div>
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Fullname</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                
                $no = 1;

                $sql = $koneksi->query("SELECT * FROM user");

                while ($data = $sql->fetch_assoc()) {
                    
             ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><?php echo $data['fullname']; ?></td>
                <td><?php echo $data['level']; ?></td>
            </tr>



        <?php } ?>
        </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
</div>