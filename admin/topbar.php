<?php

    include 'classes/header.php';
    if(isset($_POST['topbar'])){
        $dc->insertintotopbar($_POST);
        echo "<script>alert('Content Updated Successfully.')</script>";
    }

$data = $dc->showall();
$data = $data->fetch_assoc();

?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4">Top Bar</h4>

                <form method="post" action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $data['address']; ?>" id="exampleInputPassword1" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Number</label>
                        <input type="text" class="form-control" name="number" value="<?php echo $data['phone']; ?>" id="exampleInputPassword1" placeholder="Enter Number">
                    </div>

                    <button type="submit" name="topbar" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>

</div>


<?php include 'classes/footer.php';
?>