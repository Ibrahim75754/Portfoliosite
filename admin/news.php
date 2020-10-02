<?php

include 'classes/header.php';
if(isset($_POST['insert'])){
    $dc->InsertIntonews($_POST,$_FILES);
    echo "<script>alert('Content insert Successfully.')</script>";
}
if(isset($_GET['id'])){
    $dc->newsDelete($_GET['id']);
}

?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <h4 class="header-title mb-4"> Insert News</h4>

                <form method="post" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Type</label>
                        <input type="text" class="form-control" name="type">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Title</label>
                        <input type="text" class="form-control" name="title" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">text</label>
                        <input type="text" class="form-control" name="text">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="file" name="img">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Author</label>
                        <input type="text" class="form-control" name="author">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Author Image</label>
                        <input type="file" name="author_img">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="text" class="form-control" name="date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Author Like</label>
                        <input type="text" class="form-control" name="author_like">
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
                                        <th>Type</th>
                                        <th>Title</th>
                                        <th>Text</th>
                                        <th>Image</th>
                                        <th>Author</th>
                                        <th>Author Image</th>
                                        <th>Date</th>
                                        <th>Author like</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <?php 
                                        $SL = 0;
                                        $get = $dc->Shownews();
                                        while($data = $get->fetch_assoc()){
                                            ?>
                                            <tr>
                                            <td><?php $SL++; echo $SL; ?></td>
                                            <td><?php echo $data['type']; ?></td>
                                            <td><?php echo $data['title']; ?></td>
                                            <td><?php echo $data['text']; ?></td>
                                            <td><center><img width="50px" height="50px" src="../img/<?php echo $data["img"]; ?>"></center></td>
                                            <td><?php echo $data['author']; ?></td>
                                            <td><center><img width="50px" height="50px" src="../img/<?php echo $data["author_img"]; ?>"></center></td>
                                            <td><?php echo $data['date']; ?></td>
                                            <td><?php echo $data['author_like']; ?></td>

                                            <td><a href="news_edit.php?editid=<?php echo $data["id"];?>">Edit</a> | <a onclick="return confirm('Are You Sure?')" href="news.php?id=<?php echo $data["id"];?>">Delete</a></td>
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