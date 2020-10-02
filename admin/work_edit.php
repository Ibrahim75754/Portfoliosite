<?php

    include 'classes/header.php';

    if(isset($_POST['update'])){
        $dc->WorkEdit($_POST,$_GET['editid']);
        echo "<script>alert('Content Updated Successfully.')</script>";
        
    }
 
if(isset($_GET['editid'])){
    $data = $dc->ShowWorkForEdit($_GET['editid']);
    $data = $data->fetch_assoc();
}
?>


<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4">Work Update</h4>

                <form method="post" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Work Name</label>
                        <input type="text" class="form-control" name="type" value="<?php echo $data['work_name']; ?>">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>

</div>


<?php include 'classes/footer.php';
?>