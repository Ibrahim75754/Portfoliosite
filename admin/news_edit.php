<?php

    include 'classes/header.php';

    if(isset($_POST['update'])){
        $dc->newsEdit($_POST,$_FILES,$_GET['editid']);
        echo "<script>alert('Content Updated Successfully.')</script>";
        
    }
 
if(isset($_GET['editid'])){
    $data = $dc->ShownewsForEdit($_GET['editid']);
    $data = $data->fetch_assoc();
}
?>


<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4">News Update</h4>

                <form method="post" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Type</label>
                        <input type="text" class="form-control" name="type" value="<?php echo $data['type']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $data['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Text</label>
                        <input type="text" class="form-control" name="text" value="<?php echo $data['text']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="file" name="img">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Author</label>
                        <input type="text" class="form-control" name="author" value="<?php echo $data['author']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Author Image</label>
                        <input type="file" name="author_img">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="text" class="form-control" name="date" value="<?php echo $data['date']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Author Like</label>
                        <input type="text" class="form-control" name="author_like" value="<?php echo $data['author_like']; ?>">
                    </div>

                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>

</div>


<?php include 'classes/footer.php';
?>