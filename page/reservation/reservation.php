<div class="row">
    <div class="col-md-12">
                    <!-- Advanced Tables -->
    <div class="panel panel-default">
    <div class="panel-heading">
        Data Reservation
    </div>
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Reservation_Code</th>
                <th>Reservation_At</th>
                <th>Reservation_Date</th>
                <th>Customer_ID</th>
                <th>Seat_Code</th>
                <th>Rute_ID</th>
                <th>Depart_At</th>
                <th>Price</th>
                <th>User_ID</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                
                $no = 1;

                $sql = $koneksi->query("SELECT * FROM reservation");

                while ($data = $sql->fetch_assoc()) {
                    
             ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['reservation_code']; ?></td>
                <td><?php echo $data['reservation_at']; ?></td>
                <td><?php echo $data['reservation_date']; ?></td>
                <td><?php echo $data['customerid']; ?></td>
                <td><?php echo $data['seat_code'] ?></td>
                <td><?php echo $data['ruteid'] ?></td>
                <td><?php echo $data['depart_at'] ?></td>
                <td><?php echo $data['price'] ?></td>
                <td><?php echo $data['userid'] ?></td>
            </tr>



        <?php } ?>
        </tbody>
        </table>
    </div>
    <a href="./laporan/laporan_reservation.php" target="blank" class="btn btn-success" style="margin-top: 10px;"><i class="fa fa-print"></i> Export To Excel</a>
    <a href="./cetakpdf/cetakreservation.php" target="blank" class="btn btn-danger" style="margin-top: 10px;"><i class="fa fa-print"></i> Export To PDF</a>
    </div>
    </div>
    </div>
</div>