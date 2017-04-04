@extends('master')

@section('content')
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
@include('contents.news', ['news' => $news])
<!-- End News Panel -->

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
            	@include('contents.jobs', ['jobs' => $jobs])
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
@endsection