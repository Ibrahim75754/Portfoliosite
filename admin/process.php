<?php

include 'classes/header.php';
if(isset($_POST['insert'])){
    $dc->InsertIntoProcess($_POST,$_FILES);
    echo "<script>alert('Content insert Successfully.')</script>";
}
if(isset($_GET['id'])){
    $dc->ProcessDelete($_GET['id']);
}

?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4"> Add More Process</h4>

                <form method="post" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">icon</label>
                        <input type="text" class="form-control" name="icon" placeholder="Enter Icon">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Text</label>
                        <input type="text" class="form-control" name="text" placeholder="Enter Text">
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
                        <h4 class="header-title">process details</h4>

                        <div class="table-responsive">

                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>icon</th>
                                        <th>name</th>
                                        <th>Text</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                                    $SL = 0;
                                    $get = $dc->ShowProcess();
                                    while($data = $get->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php $SL++; echo $SL; ?></td>
                                            <td><?php echo $data['icon']; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['text']; ?></td>
                                            <td><a href="process_edit.php?editid=<?php echo $data["id"];?>">Edit</a> | <a onclick="return confirm('Are You Sure?')" href="process.php?id=<?php echo $data["id"];?>">Delete</a></td>
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