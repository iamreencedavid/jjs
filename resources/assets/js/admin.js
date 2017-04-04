window.$ = window.jQuery = require('jquery');


import moment from 'moment';
import toastr from 'toastr';

window.moment = moment;
window.toastr = toastr;

$.ajaxSetup({
	headers: { 
		'X-CSRF-Token' : $("meta[name='csrfToken']").attr('content') 
	},
    cache : true
});

let _root 		 = '/server/'
let storage_path = '/storage/uploads/';

$(document).ready(function(){
	/**
	* news Sscripts
	**/

	$(document).on('submit', '#form_news_create', function(event){

		let $this = $(this);
		let formData = new FormData();

		formData.append('title', $('input[name="title"]').val());
		formData.append('date', $('input[name="date"]').val());
		formData.append('caption', $('textarea[name="caption"]').val());
		formData.append('description', $('textarea[name="description"]').val());
		formData.append('status', $('input[name="status"]').val());

		// Attach file
		formData.append('image', $('input[type=file]')[0].files[0]); 

		$.ajax({
		    url: _root + 'news/store',
		    data: formData,
		    type: 'POST',
		    dataType : 'json',
		    contentType: false,
		    processData: false
		}).done(function(response){
			toastr.success(response.message, { timeOut: 1500});

			setTimeout(function() {
				window.location = _root + 'news';
			}, 2000);
		});

		return false;
	});
});