 <!-- Footer -->
 <footer class="py-5 bg-inverse" id="Contact">
  <div class="container">         
    <p class="text-center">
      <!-- Add font awesome icons -->
      <a href="{{ (count($settings) > 0) ? $settings->facebook : '#' }}"  target="_blank" class="fa fa-facebook"></a>
      <a href="{{ (count($settings) > 0) ? $settings->twitter : '#' }}" target="_blank" class="fa fa-twitter"></a>
      <a href="{{ (count($settings) > 0) ? $settings->google : '#' }}" target="_blank" class="fa fa-google"></a>
      <a href="{{ (count($settings) > 0) ? $settings->linkedin : '#' }}" target="_blank" class="fa fa-linkedin"></a>  
    </p>    
    <p class="m-0 text-center text-white">
      @if(count($settings) > 0)
            {{ $settings->footer_address_1 }} <br>
            {{ $settings->footer_address_2 }} <br>
            {{ $settings->footer_address_3 }}
      @endif
    </p>
  </div>
  <!-- /.container -->

</footer>