             
<div class="card-block"> 
      <div class="col-md-12">
         <h3>We want you!</h3>      
         <h3>Submit your RESUME NOW!</h3>                    
         <hr></hr>   
         
         <form id="form_apply" enctype="multipart/form-data" class="img-form">                      
            <div class="form-group">                        
             <label for="exampleInputEmail1">Fullname</label>
             <input class="form-control" required name="fullname" type="text" value="" id="example-text-input" >
       </div>
       <div class="form-group">                      
            <label for="exampleInputEmail1">Contact number</label>
            <input class="form-control" required name="contact" type="tel" value="+639-00-000-0000" id="example-tel-input">
      </div>

      <div class="form-group">                      
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>                                    

      <div class="form-group">
            <label for="exampleInputFile">Upload resume</label>
            <input type="file" required id="resume" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">PDF or Doc file accepted with size not greater thatn 3MB</small>
      </div>

      <div class="form-check">
            <label class="form-check-label">
                 <input id="accept" type="checkbox" class="form-check-input">
                 Accept and Read All Terms and Agreement.
           </label>
     </div>
     
     <div id="request-sent" class="alert alert-success hidden" role="alert">
       Your request has been sent! Thank You!
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
     <img src="/images/loader.svg" id="loader" class="hidden" width="36" height="36">

</form>

<div class="text-center">
  <img src="images/signup.png"  />
</div>
</div>     