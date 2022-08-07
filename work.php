
<?php include('assets/header.php');?>
<script>
        $(document).ready(function() {
            $('#box').hide()
            $('#text').click(function() {
                $('#box').toggle(500);
                
            });
            var rotation = 0;

            jQuery.fn.rotate = function(degrees) {
                $('#icon').css({'transform' : 'rotate('+ degrees +'deg)'});
                return $('#icon');
            };

            $('#text').click(function() {
                rotation += 180;
                $('#icon').rotate(rotation);
            });
        });

</script>
<script>
    $(document).ready(function() {
        $('.card img').hover(function() {
            $('.card .icon').css('visibility', 'visible');
        });
    });
</script>

        <!-- start: work banner -->
        <div class="work-banner">
            <img src="images/backgroung-img(work-banner).jpg" alt="">
            <h1>Our<br> Work.</h1>
            <div class="main-div">
                <div class="plain-div">
                    <h6>For our services</h6>
                    <p>See below</p>
                </div>
                <div class="plain-div">
                    <h6>View our work</h6>
                    <p>Click here</p>
                </div>  
                <div class="black-div">
                    <h6>Have a project?</h6>
                    <p>Contact us</p>
                </div>
            </div>
        </div>
        <!-- end: work banner -->
        <!-- start: filter section -->
        <div class="container">
            <div class="filter">
                <div class="filter-toggle">
                        <div id="text">
                            <h6>FILTER BY SECTOR <i id="icon" class="fa fa-angle-down" aria-hidden="true"></i></h6>
                            <div class="row">
                                <div class="col-md-8">
                                    <div id="box">
                                        <h2>View All</h2>
                                        <div class="content">
                                            <ul>
                                                <a href="#"><li>Retail & Showrooms</li></a>
                                                <a href="#"><li>Offices & Workspaces</li></a>
                                                <a href="#"><li>Fitness & Gyms</li></a>
                                                <a href="#"><li>Entertainment</li></a>
                                            </ul>
                                            <ul>
                                                <a href="#"><li>Restaurants & Bars</li></a>
                                                <a href="#"><li>Health & Wellness</li></a>
                                                <a href="#"><li>Cannabis & Regulated Products</li></a>
                                                <a href="#"><li>Commercial & Light Industrial</li></a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <hr>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li><p class="nav-item">View options</p></li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-th-large" aria-hidden="true"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-list" aria-hidden="true"></i></button>
                        </li>
                        
                    </ul>
                </div>
            </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="grid-cards">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                        <img src="images/grid-img1.png" alt="">
                                        <a class="name" href="#">Mental Health & Wellness Centre</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="images/grid-img2.jpg" alt="">
                                        <a class="name" href="#">Keirton</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="images/grid-img3.jpg" alt="">
                                        <a class="name" href="#">Homes Alive Pets Langley</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="grid-cards">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="images/grid-img4.jpg" alt="">
                                        <a class="name" href="#">Union Basketball</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="images/grid-img5.jpg" alt="">
                                        <a class="name" href="#">Lady.E Décor & Design</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="images/grid-img6.jpg" alt="">
                                        <a class="name" href="#">Leisure for Cannabis</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-cards">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="images/grid-img7.jpg" alt="">
                                        <a class="name" href="#">Kia Electric Vehicle Showroom</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="images/grid-img8.jpg" alt="">
                                        <a class="name" href="#">Eden Empire</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="images/grid-img9.jpg" alt="">
                                        <a class="name" href="#">Choom Yaletown</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-cards">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="images/grid-img10.jpg" alt="">
                                        <a class="name" href="#">Wylie Crump</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="images/grid-img11.jpg" alt="">
                                        <a class="name" href="#">Victoria Distillers</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="images/grid-img12.jpg" alt="">
                                        <a class="name" href="#">Medical Aesthetic Clinic</a>
                                        <a href="#">See full project</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="grid-cards">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="images/grid-img13.jpg" alt="">
                                            <a class="name" href="#">Adrenaline Studios</a>
                                            <a href="#">See full project</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="images/grid-img14.jpg" alt="">
                                            <a class="name" href="#">Kitchen Art Design</a>
                                            <a href="#">See full project</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="images/grid-img15.jpg" alt="">
                                            <a class="name" href="#">Potluck Hawker</a>
                                            <a href="#">See full project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="grid-cards">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="images/grid-img16.jpg" alt="">
                                            <a class="name" href="#">Rumble Boxing Studio</a>
                                            <a href="#">See full project</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="images/grid-img17.jpg" alt="">
                                            <a class="name" href="#">Couturist</a>
                                            <a href="#">See full project</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="images/grid-img18.jpg" alt="">
                                            <a class="name" href="#">Transit City Amenity Centre</a>
                                            <a href="#">See full project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-cards">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="images/grid-img19.jpg" alt="">
                                            <a class="name" href="#">Choom Olympic Village</a>
                                            <a href="#">See full project</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="images/grid-img20.jpg" alt="">
                                            <a class="name" href="#">Sweat and Tonic</a>
                                            <a href="#">See full project</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="images/grid-img21.jpg" alt="">
                                            <a class="name" href="#">Kiaro</a>
                                            <a href="#">See full project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Mental Health & Wellness Centre</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Keirton</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Homes Alive Pets Langley</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Union Basketball</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img5.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Lady.E Décor & Design</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img6.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Leisure for Cannabis</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img7.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Kia Electric Vehicle Showroom</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img8.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Eden Empire</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img9.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Choom Yaletown</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img10.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Wylie Crump</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img11.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Victoria Distillers</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-cards">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="images/grid-img12.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="text">
                                        <ul>
                                            <li>
                                                <a class="name" href="#">Medical Aesthetic Clinic</a>
                                            </li>
                                            <li>
                                                <a href="#">See full project</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        <!-- end: filter section -->
        <?php include('assets/footer.php'); ?>