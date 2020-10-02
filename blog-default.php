<?php 
include "include/header.php";
 ?>
<!--header section end-->

<!--body content wrap start-->
<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Blog Default</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Blog</li>
                                <li class="list-inline-item breadcrumb-item active">Blog Default</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--blog section start-->
    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading mb-5">
                        <h2>Our Latest News</h2>
                        <p class="lead">
                            Enthusiastically drive revolutionary opportunities before emerging leadership. Phosfluorescently cultivate emerging alignments time methods of empowerment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
               <?php 
                $news=mysqli_query($con,"SELECT * FROM news");
                while($row=mysqli_fetch_array($news)){
                    ?>
                    <div class="col-md-6 col-lg-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <a href="#"><span class="category position-absolute"><?php echo $row["type"]; ?></span></a>
                            <a href="#"><img src="img/<?php echo $row['img']; ?>" class="card-img-top position-relative img-fluid" alt="blog"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2 card-title"><a href="#"><?php echo $row["title"]; ?></a></h3>
                            <p class="card-text"><?php echo $row["text"]; ?></p>
                        </div>
                        <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                            <div class="author-meta d-flex align-items-center">
                                <img style="height: 100px;width: 100px;" src="img/<?php echo $row['author_img']; ?>" class="mr-2 p-3 bg-white rounded-circle border">
                                <div class="author-content">
                                    <a href="#" class="d-block"><?php echo $row["author"]; ?></a>
                                    <small><?php echo $row["date"]; ?></small>
                                </div>
                            </div>
                            <div class="author-like">
                                <a href="#"><span class="fa fa-share-alt"></span> <?php echo $row["author_like"]; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?> 
                
                
            </div>


            <!--pagination start-->
            <div class="row">
                <div class="col-md-12">
                    <nav class="custom-pagination-nav mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-left"></span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--pagination end-->

        </div>
    </section>
    <!--blog section end-->

</div>
<!--body content wrap end-->

<!--footer section start-->
<?php 
include "include/footer.php";
 ?>