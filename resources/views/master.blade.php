<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JJS - Outsource HR Facility</title>

    <link type="text/css" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/vendor.css') }}" rel="stylesheet" type="text/css">
    <script>
      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
    </script>


</head>

<body>

    <!---//Facebook button code-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <a class="navbar-brand" href="#">JJS</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link scrollto" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="#About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="#Careers">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="#Contact"">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="#FAQ">FAQ</a>
                </li>                   
                <li class="nav-item">
                    <a class="nav-link scrollto" href="#What">What's new?</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Page Content -->
<div class="container">
    <div class="row">
        <p>&nbsp;</p>
    </div>  

    <!-- Heading Row -->
    <div class="row" id="Home">
        <div class="col-lg-8">
            <img class="img-fluid rounded" src="images/banner 900x400.png" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <h1>JJS ACTS OF SERVICE FACILITIES INC</h1>
            <p>In a nutshell, we are a local manpower service. But this has taken a bit of an antiquated tone. We prefer the term "Outsource HR Facility."</p>
            <a class="btn btn-primary btn-lg" href="#">Call to Action!</a>
        </div>
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card card-inverse card-primary my-4 text-center" id="About"> 
        <div class="card-block">
            <p class="text-white m-0">We are businesspeople who cater to other businesspeople. This makes it easy for us to put ourselves in your shoes. </p>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-block">
                    <img class="img-fluid rounded" src="images/hr.jpg" alt="">
                    <h2 class="card-title">Human Resource</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-block">
                    <img class="img-fluid rounded" src="images/janitorial.jpg" alt="">
                    <h2 class="card-title">Janitorial</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-block">
                    <img class="img-fluid rounded" src="images/recruitment.jpg">
                    <h2 class="card-title">Recruitment</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

    <!-- /.News Panel -->
    <div class="card-block" id="What">
        <div class="row">         
          <h3>What's New?</h3>      
          <hr></hr> 
          <div class="col-md-12">
            <img class="img-news" src="http://placehold.it/180x180"  />
            <h3>News title 1</h3>
            <p>Lots of text here...With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a .clearfix</p>
            <p class="text-right"><a href="#" class="btn btn-primary btn-sm">More Info</a></p>
        </div>          
    </div>
    <div class="row">       

        <div class="col-md-12">
            <img class="img-news" src="http://placehold.it/180x180"  />
            <h3>News title 2</h3>
            <p>Lots of text here...With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a .clearfix</p>
            <p class="text-right"><a href="#" class="btn btn-primary btn-sm">More Info</a></p>
        </div>              
        
    </div>      
    <div class="row">               
        <div class="col-md-12">
            <img class="img-news" src="http://placehold.it/180x180"  />
            <h3>News title 3</h3>
            <p>Lots of text here...With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a .clearfix</p>
            <p class="text-right"><a href="#" class="btn btn-primary btn-sm">More Info</a></p>
        </div>                      
    </div>
</div>

                <!-- <div class="card-block" id="What">
            <div class="row">     
            <h3>What's New?</h3>        
            <hr></hr>   
                    <?php
                        //include('MYSQL/sqllinker.php');
                        //$sample = new SQLLinker();
                        //$sample->SQL("SELECT * FROM `tbl_News`");
                        //$sample->OpenQuery();

                        //while($row = mysqli_fetch_assoc($sample->DataTable()))
                        {
                            ?>
                            
                            
                                    <div class="col-md-12">
                                        <img class="img-news" src="http://placehold.it/180x180"  />
                                        <h3><?php //echo $row['Title']?></h3>
                                        <p><?php //echo $row['Content']?></p>
                                        <p class="text-right"><a href="#" class="btn btn-primary btn-sm">More Info</a></p>
                                    </div>  

                            
                    <?php
                        }
                    ?>

                </div>
            </div> -->


            <div class="row" id="Careers">              
                <div class="card-block"> 
                   <div class="col-md-12">
                       <h3>Job Openings</h3>                   
                       <hr></hr>
                       <table class="table table-striped" >
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>POSITION</th>
                              <th>JOB DESCRIPTION</th>
                              <th>QUALIFICATION</th>
                              <th>CLOSING ON</th>
                              <th>&nbsp;</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>HR Assistant</td>
                          <td>View Details</td>
                          <td>View Details</td>
                          <td>March 31, 2017</td>
                          <td><a href="#" class="btn btn-primary btn-sm">Apply</a></td>
                      </tr>
                      <tr>
                          <th scope="row">2</th>
                          <td>HR Manager</td>
                          <td>View Details</td>
                          <td>View Details</td>
                          <td>April 31, 2017</td>
                          <td><a href="#" class="btn btn-primary btn-sm">Apply</a></td>
                      </tr>
                      <tr>
                          <th scope="row">3</th>
                          <td>Janitor</td>
                          <td>View Details</td>
                          <td>View Details</td>
                          <td>April 31, 2017</td>
                          <td><a href="#" class="btn btn-primary btn-sm">Apply</a></td>
                      </tr>
                  </tbody>
              </table>        
          </div>
      </div>
  </div>


  <!-- /.Sign Up Form -->
  <div class="row">               
   <div class="card-block"> 
       <div class="col-md-12">
           <h3>We want you!</h3>      
           <h3>Submit your RESUME NOW!</h3>                    
           <hr></hr>   
           <form class="img-form">                      
            <div class="form-group">                        
                <label for="exampleInputEmail1">Fullname</label>
                <input class="form-control" type="text" value="" id="example-text-input" >

                <div class="form-group">                      
                    <label for="exampleInputEmail1">Contact number</label>
                    <input class="form-control" type="tel" value="+639-00-000-0000" id="example-tel-input">
                </div>

                <div class="form-group">                      
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>                                    

                <div class="form-group">
                    <label for="exampleInputFile">Upload resume</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">PDF or Doc file accepted with size not greater thatn 3MB</small>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                      Accept and Read All Terms and Agreement.
                  </label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div> 
      <div class="text-center">
        <img src="images/signup.png"  />
    </div>
</div>          
</div>
</div>  


</div>       


</div>
<!-- /.container -->


<!-- Footer -->
<footer class="py-5 bg-inverse" id="Contact">
    <div class="container">         
        <p class="text-center">
          <!-- Add font awesome icons -->
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>  
      </p>    
      <p class="m-0 text-center text-white">Copyright &copy; 2017 JJS Acts of Service Facilities Inc.</br> Unit 208 Prince Tower Condominium, 14 Tordesillas st., Salcedo village, barangay Bel-air, Makati city, 1227</br>02 771 2219 | 02 622 9810 | (0917) 851 1905 | (0922) 8204 686</p>
  </div>
  <!-- /.container -->

</footer>



<!-- /.map -->        
<div id="map"></div>
<script>
  function initMap() {
    var uluru = {lat: 14.560565, lng: 121.020922};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 19,
      center: uluru
  });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
  });
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt0fjTt1EwvRUX-TfrjG4amqG7ZWO_E4s&callback=initMap">
</script>   

<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ mix('/js/vendor.js') }}"></script>        
</body>


</html>
