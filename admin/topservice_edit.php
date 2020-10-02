<?php

    include 'classes/header.php';

    if(isset($_POST['update'])){
        $dc->Card1Edit($_POST,$_GET['editid']);
        echo "<script>alert('Content Updated Successfully.')</script>";

        echo "<script>window.location.href='topservice.php'</script>";


        
    }
 
if(isset($_GET['editid'])){
    $data = $dc->ShowCard1ForEdit($_GET['editid']);
    $data = $data->fetch_assoc();
}
?>


<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4">Top Service Update</h4>

                <form method="post" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">icon</label>
                        <input type="text" class="form-control" name="icon" value="<?php echo $data['icon']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $data['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Text</label>
                        <input type="text" class="form-control" name="text" value="<?php echo $data['text']; ?>">

                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>

</div>


<?php include 'classes/footer.php';
?>