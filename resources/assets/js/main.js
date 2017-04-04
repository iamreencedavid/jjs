$.ajaxSetup({
    headers: { 
        'X-CSRF-Token' : $("meta[name='csrfToken']").attr('content') 
    },
    cache : true
});

$(document).ready(function($) {

    /* ======= Scrollspy ======= */
    //$('body').scrollspy({ target: '#header', offset: 400});
    
    /* ======= Fixed header when scrolled ======= */
    
    $(window).bind('scroll', function() {
         if ($(window).scrollTop() > 50) {
             $('#header').addClass('navbar-fixed-top');
         }
         else {
             $('#header').removeClass('navbar-fixed-top');
         }
    });
   
    /* ======= ScrollTo ======= */
    $('a.scrollto').on('click', function(e){
        
        //store hash
        var target = this.hash;
                
        e.preventDefault();
        
		$('body').scrollTo(target, 800, {offset: -70, 'axis':'y', easing:'easeOutQuad'});
        //Collapse mobile menu after clicking
		if ($('.navbar-collapse').hasClass('in')){
			$('.navbar-collapse').removeClass('in').addClass('collapse');
		}
		
	});

    /**
    * Contact Form
    **/
    $(document).on('submit', '#form_apply', function(event){

        let $this = $(this);
        let formData = new FormData();

        formData.append('fullname', $('input[name="fullname"]').val());
        formData.append('contact', $('input[name="contact"]').val());
        formData.append('email', $('input[name="email"]').val());

        // Attach file
        formData.append('resume', $('input[type=file]')[0].files[0]); 

        $.ajax({
            url: '/application/send-request',
            data: formData,
            type: 'POST',
            dataType : 'json',
            contentType: false,
            processData: false
        }).done(function(response){
            toastr.success(response.message, { timeOut: 1500});

            setTimeout(function() {
                window.location = '/';
            }, 2000);
        });

        return false;
    });

});