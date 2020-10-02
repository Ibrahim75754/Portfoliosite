<?php

include 'classes/header.php';

$data = $dc->showpartnar();
$data = $data->fetch_assoc();
?>


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">               
            <!-- start page title -->
            <div class="row">

                <div class="col-lg-8">
                    <div class="card-box">
                        <h4 class="header-title">Slider</h4>

                        <div class="table-responsive">

                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Subtitle</th>
                                        <th>Title</th>
                                        <th>Text</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><?php echo $data['subtitle']; ?></td>
                                        <td><?php echo $data['title']; ?></td>
                                        <td><?php echo $data['text']; ?></td>
                                        <td><center><img width="50px" height="50px" src="img/<?php echo $data["img"]; ?>"></center></td>
                                        <td><a href="edit_slider.php?id=<?php echo $data["id"];?>">Edit</a></td>
                                    </tr>
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