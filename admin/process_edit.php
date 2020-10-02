<?php

    include 'classes/header.php';

    if(isset($_POST['update'])){
        $dc->ProcessEdit($_POST,$_FILES,$_GET['editid']);
        echo "<script>alert('Content Updated Successfully.')</script>";
        
    }
 
if(isset($_GET['editid'])){
    $data = $dc->ShowProcessForEdit($_GET['editid']);
    $data = $data->fetch_assoc();
}
?>


<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4">process Update</h4>

                <form method="post" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Icon</label>
                        <input type="text" class="form-control" name="icon" value="<?php echo $data['icon']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Text</label>
                        <input type="text" class="form-control" name="text" value="<?php echo $data['text']; ?>">
                    </div>

                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>

</div>


<?php include 'classes/footer.php';
?>