<?php

include 'classes/header.php';
if(isset($_POST['insert'])){
    $dc->InsertIntoLogo($_POST,$_FILES);
    echo "<script>alert('Content insert Successfully.')</script>";
}
if(isset($_GET['id'])){
    $dc->LogoDelete($_GET['id']);
}

?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4"> Add More Logo</h4>

                <form method="post" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Logo</label>
                        <input type="file" class="form-control" name="logo">
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
                        <h4 class="header-title">Logo details</h4>

                        <div class="table-responsive">

                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th><center>Logo</center></th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                                    $SL = 0;
                                    $get = $dc->ShowLogo();
                                    while($data = $get->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php $SL++; echo $SL; ?></td>
                                            <td><center><img width="100px" height="50px" src="../img/<?php echo $data["logo"]; ?>"></center></td>
                                            <td><a onclick="return confirm('Are You Sure?')" href="logo.php?id=<?php echo $data["id"];?>">Delete</a></td>
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