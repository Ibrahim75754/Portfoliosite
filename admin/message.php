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
                        <h4 class="header-title">Messages</h4>

                        <div class="table-responsive">

                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>text</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                                    $SL = 0;
                                    $get = $dc->ShowMessage();
                                    while($data = $get->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php $SL++; echo $SL; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td><?php echo $data['text']; ?></td>
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