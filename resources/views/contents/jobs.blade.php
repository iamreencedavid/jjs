<div class="card-block"> 
    <div class="col-md-12">
         <h3>Job Openings</h3>                   
         <hr></hr>
         <table class="table table-striped" >
              <thead>
                   <tr>
                        <th>POSITION</th>
                        <th>CLOSING ON</th>
                        <th>&nbsp;</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach($jobs as $job)
                         <tr>
                              <td>{{ $job['position'] }}</td>
                              <td>March 31, 2017</td>
                              <td><a href="#" class="btn btn-primary btn-sm">Apply</a></td>
                        </tr>
                  @endforeach
      </tbody>
</table>        
</div>
</div>