<?php

    include 'classes/header.php';

    if(isset($_POST['update'])){
        $dc->ClientEdit($_POST,$_FILES,$_GET['editid']);
        echo "<script>alert('Content Updated Successfully.')</script>";
        
    }
 
if(isset($_GET['editid'])){
    $data = $dc->ShowClientForEdit($_GET['editid']);
    $data = $data->fetch_assoc();
}
?>


<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4">Client Update</h4>

                <form method="post" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $data['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Quote</label>
                        <input type="text" class="form-control" name="quote" value="<?php echo $data['quote']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Grade</label>
                        <input type="int" class="form-control" name="grade" value="<?php echo $data['obtain_grade']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="file" name="img">
                    </div>

                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>

</div>


<?php include 'classes/footer.php';
?>