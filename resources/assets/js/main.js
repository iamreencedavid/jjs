import moment from 'moment';

window.moment = moment;

$.ajaxSetup({
    headers: { 
        'X-CSRF-Token' : $("meta[name='csrfToken']").attr('content') 
    },
    cache : true
});

$(document).ready(function($) {

    $('[data-remodal-id=modal2]').remodal({
        modifier: 'with-red-theme'
    });

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

        if($("#accept").is(':checked')) {
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
                processData: false,
                beforeSend: function(){
                    $("#loader").removeClass('hidden');
                    $('button[type="submit"]').prop('disabled', true);
                },
                complete: function(){
                    $("#loader").addClass('hidden');
                    $('button[type="submit"]').prop('disabled', false);
                }
            }).done(function(response){

                $("#request-sent").removeClass('hidden');
                setTimeout(function() {
                    window.location = '/';
                }, 2000);
            });
        } else {
            alert('You need to accept on our agreements.');
        }

        return false;
    });

    $(document).on('click', '.btn-view-contents', function(event){
        event.preventDefault();

        let _this = $(this);
        let id    = _this.data('id');

        $.ajax({
            url: '/contents/' + id,
            data: null,
            type: 'GET',
            dataType : 'json',
            contentType: false,
            processData: false
        }).done(function(response){
            let inst = $('[data-remodal-id=Contents]').remodal();

            $("#content-image").attr("src" , "/storage/uploads/contents/" + response.photo);
            $("#contents-title").text( response.title );
            $("#contents-content").html( response.description );
            /**
             * Opens the modal window
             */
            inst.open();
        });
        
    });

    $(document).on('click', '.btn-open-news-info', function(event){
        event.preventDefault();

        let _this = $(this);
        let id    = _this.data('id');

        $.ajax({
            url: '/news/' + id,
            data: null,
            type: 'GET',
            dataType : 'json',
            contentType: false,
            processData: false
        }).done(function(response){
            let inst = $('[data-remodal-id=News]').remodal();

            $("#news-title").text( response.title );
            $("#news-date").text( moment(response.date).format('MMMM DD, YYYY') );
            $("#news-content").html( response.description );
            /**
             * Opens the modal window
             */
            inst.open();
        });
        
    });

    $(document).on('click', '.btn-view-job-info', function(event){
        event.preventDefault();

        let _this = $(this);
        let id    = _this.data('id');

        $.ajax({
            url: '/jobs/' + id,
            data: null,
            type: 'GET',
            dataType : 'json',
            contentType: false,
            processData: false
        }).done(function(response){
            let inst = $('[data-remodal-id=Job]').remodal();

            $("#job-title").text( response.position );
            $("#job-date").text( moment(response.closed_date).format('MMMM DD, YYYY') );
            $("#job-content").html( response.description );
            /**
             * Opens the modal window
             */
            inst.open();
        });
        
    });
});