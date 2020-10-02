<?php

    include 'classes/header.php';
    if(isset($_POST['update'])){
        $dc->updatepartnar($_POST);
        echo "<script>alert('Content Updated Successfully.')</script>";
    }

$data = $dc->showpartnar();
$data = $data->fetch_assoc();

?>


<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4">Slider</h4>

                <form method="post" action="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">subtitle</label>
                        <input type="text" class="form-control" name="subtitle" value="<?php echo $data['subtitle']; ?>" id="exampleInputPassword1" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $data['title']; ?>" id="exampleInputPassword1" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">text</label>
                        <input type="text" class="form-control" name="text" value="<?php echo $data['text']; ?>" id="exampleInputPassword1" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">img</label>
                        <input type="text" class="form-control" name="img" value="<?php echo $data['img']; ?>" id="exampleInputPassword1" placeholder="Enter Address">
                    </div>

                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>

</div>


<?php include 'classes/footer.php';
?>