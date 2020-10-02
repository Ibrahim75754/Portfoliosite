<?php

include 'classes/header.php';
if(isset($_POST['insert'])){
    $dc->InsertIntoWork($_POST);
    echo "<script>alert('Content insert Successfully.')</script>";
}
if(isset($_GET['id'])){
    $dc->WorkDelete($_GET['id']);
}

?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4"> Insert work</h4>

                <form method="post" action="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Work Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <button type="submit" name="insert" class="btn btn-primary">Insert</button>
                </form>
            </div>
        </div>

    </div>

</div>



<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">               
            <!-- start page title -->
            <div class="row">

                <div class="col-lg-8">
                    <div class="card-box">
                        <h4 class="header-title">Clients</h4>

                        <div class="table-responsive">

                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Work Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <?php 
                                        $SL = 0;
                                        $get = $dc->ShowWork();
                                        while($data = $get->fetch_assoc()){
                                            ?>
                                            <tr>
                                            <td><?php $SL++; echo $SL; ?></td>
                                            <td><?php echo $data['work_name']; ?></td>

                                            <td><a href="work_edit.php?editid=<?php echo $data["id"];?>">Edit</a> | <a onclick="return confirm('Are You Sure?')" href="work.php?id=<?php echo $data["id"];?>">Delete</a></td>
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