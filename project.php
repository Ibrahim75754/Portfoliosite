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
                        <h1 class="text-white mb-0">Our Projects</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Project</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->


    <!--our work or portfolio section start-->
    <section class="our-portfolio-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Check Our Quality Work</h2>
                        <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements. Intrinsicly
                            develop end-to-end customer service without extensive data.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pb-2">
                        <?php
                            $work_name=mysqli_query($con,"SELECT * FROM work");
                            while($row1 = mysqli_fetch_array($work_name)){
                                ?>
                                
                                <button type="button" class="filter-btn" id="<?php echo $row1['id']; ?>"  onclick="get_demo(<?php echo $row1['id'];?>)"><?php echo $row1['work_name']; ?></button>

                                <?php
                            }
                         ?>
                    </div>
                    <div class="portfolio-container" id="MixItUp">
                        <?php $portfolio=mysqli_query($con,"SELECT * FROM portfolio");
                        while($row2=mysqli_fetch_array($portfolio)){
                            ?>
                             <div class="mix portfolio-item" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="project-details.html" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/<?php echo $row2['img']; ?>" alt="portfolio"/>
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1"><?php echo $row2['title']; ?></h5>
                                            <p><?php echo $row2['text']; ?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                            ?>
                        <div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work or portfolio section end-->


    <!--counter section start-->
    <section class="call-to-action ptb-100 gradient-overlay" style="background: url('img/slider-img-3.jpg')no-repeat top center / cover fixed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="call-to-action-content text-white">
                        <h2 class="text-white mb-1">Looking for Quality Services ?</h2>
                        <p>Progressively deliver market-driven quality vectors rather than goal-oriented niche markets.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="contact-us.php" class="btn outline-white-btn">Contact us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter section end-->


    <!--our pricing section start-->
    <section class="pricing-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Affordable Pricing and Packages</h2>
                        <p CLASS="lead">Efficiently aggregate end-to-end core competencies without maintainable ideas. Dynamically
                            foster tactical solutions without enabled value.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                
                    <?php 
                        $get=mysqli_query($con,"SELECT * FROM packages");
                        while($row=mysqli_fetch_array($get)){
                            ?>
                            <div class="col-lg-4 col-md">
                                <div class="card text-center single-pricing-pack">
                                    <div class="pt-4"><h5><?php echo $row["name"]; ?></h5></div>
                                    <div class="pricing-img mt-4">
                                        <img src="<?php echo $row["img"]; ?>" alt="pricing img" class="img-fluid">
                                    </div>
                                    <div class="card-header py-4 border-0 pricing-header">
                                        <div class="h1 text-center mb-0">$<span class="price font-weight-bolder"><?php echo $row["price"]; ?></span></div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                            <?php 
                                                $get_details=mysqli_query($con,"SELECT * FROM packages_details where packages_id='$row[id]'");
                                                    while($row2=mysqli_fetch_array($get_details)){
                                                        ?>
                                                            <li><?php echo $row2['list']; ?></li>
                                                        <?php
                                                    }
                                            ?>
                                        </ul>
                                        <a href="#" class="btn secondary-solid-btn mb-3" target="_blank">Purchase now</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
            </div>
        </div>
    </section>
    <!--our pricing section end-->

    <!--testimonial section start-->
    <section class="testimonial-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>Testimonials What Clients Say</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="owl-carousel owl-theme client-testimonial custom-arrow custom-arrow-bottom-center mb-5">
                        <?php
                            $get=mysqli_query($con,"SELECT * FROM client"); 
                            while($row=mysqli_fetch_array($get)){
                                ?>
                                    <div class="item">
                            <div class="testimonial-single shadow-sm white-bg rounded p-4">
                                <blockquote>
                                    <?php echo $row["quote"]; ?>
                                </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="img/<?php echo $row['img']; ?>" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                        <div class="client-info">
                                            <h5 class="mb-0"><?php echo $row["name"]; ?></h5>
                                            <small class="mb-0"><?php echo $row["title"]; ?></small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <?php
                                            for ($i=0; $i <$row["obtain_grade"]; $i++) { 
                                                ?>
                                                <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                        <span class="font-weight-bold"><?php echo $row["obtain_grade"]; ?> <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <?php
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial section end-->


    <!--client section start-->
    <div class="client-section ptb-100 gray-light-bg">
        <div class="container">
            <!--clients logo start-->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <?php 
                        $get=mysqli_query($con,"SELECT * FROM client_logo");
                        while($row=mysqli_fetch_array($get)){
                        ?>
                        <div class="item single-client">
                            <img src="<?php echo $row['logo']; ?>" alt="client logo" class="client-img">
                        </div>
                         <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>
    <!--client section start-->


</div>
<!--body content wrap end-->

<!--footer section start-->
<?php 
include "include/footer.php";
 ?>

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>

<script type="text/javascript">
    

    function get_demo(id){

        /*$("#".concat(id)).css({"background-color":"black"});*/

        $.ajax({
            url:"include/action.php",
            type:"POST",
            data : {
                get_port:1,
                id:id
            },
            cache : false,
            success:function(response){
                console.log(response);
                $("#MixItUp").html(response);
            }

        });

    }
</script>