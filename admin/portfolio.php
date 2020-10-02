<?php

include 'classes/header.php';
if(isset($_POST['insert'])){
    $dc->InsertIntoPortfolio($_POST,$_FILES);
    echo "<script>alert('Content insert Successfully.')</script>";
}
if(isset($_GET['id'])){
    $dc->PortfolioDelete($_GET['id']);
}

?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4"> Add Catagory Info</h4>

                <form method="post" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <select class="form-control form-control" name="category">
                            <option>Select Catagory</option>
                            <?php
                            $getCategorys = $dc->ShowWork();
                            if (isset($getCategorys)) {
                                while ($cate = $getCategorys->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $cate['id']; ?>"><?php echo $cate['work_name'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Text</label>
                        <input type="text" class="form-control" name="text" placeholder="Enter Text">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="file" name="img">
                    </div>

                    <button type="submit" name="insert" class="btn btn-primary">Insert</button>
                </form>
            </div>
        </div>

    </div>

</div>


<br>


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">               
            <!-- start page title -->
            <div class="row">

                <div class="col-lg-8">
                    <div class="card-box">
                        <h4 class="header-title">catagory details</h4>

                        <div class="table-responsive">

                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Work_id</th>
                                        <th>Title</th>
                                        <th>Text</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                                    $SL = 0;
                                    $get = $dc->ShowPortfolio();
                                    while($data = $get->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php $SL++; echo $SL; ?></td>
                                            <td><?php echo $data['work_id']; ?></td>
                                            <td><?php echo $data['title']; ?></td>
                                            <td><?php echo $data['text']; ?></td>
                                            <td><center><img width="50px" height="50px" src="../img/<?php echo $data["img"]; ?>"></center></td>
                                            <td><a href="portfolio_edit.php?editid=<?php echo $data["id"];?>">Edit</a> | <a onclick="return confirm('Are You Sure?')" href="portfolio.php?id=<?php echo $data["id"];?>">Delete</a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>

    </div>

</div>


<?php include 'classes/footer.php';
?>