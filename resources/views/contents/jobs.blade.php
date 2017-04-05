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
                          <td>{{ \Carbon\Carbon::parse($job['closed_date'])->format('F d, Y') }}</td>
                          <td>
                            <a href="#" data-id="{{ $job['id'] }}" class="btn btn-primary btn-sm btn-view-job-info">View</a>
                            <a href="#Contact" class="btn btn-primary btn-sm">Apply</a>
                          </td>
                    </tr>
              @endforeach
      </tbody>
</table>        
</div>
</div>