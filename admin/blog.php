<?php 
include 'classes/header.php';

?>






<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">               
            <!-- start page title -->
            <div class="row">

                <div class="col-lg-8">
                    <div class="card-box">
                        <h4 class="header-title">Blog List</h4>

                        <div class="table-responsive">

                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <?php 
                                        $SL = 0;
                                        $get = $dc->ShowAllBlog();
                                        while($data = $get->fetch_assoc()){
                                            ?>
                                            <tr>
                                            <td><?php $SL++; echo $SL; ?></td>
                                            <td><?php echo $data['blog_list']; ?></td>
                                            <td><?php echo $data['link']; ?></td>
                                            <td><a href="#?editid=<?php echo $data["id"];?>">Edit</a> | <a onclick="return confirm('Are You Sure?')" href="#?id=<?php echo $data["id"];?>">Delete</a></td>
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