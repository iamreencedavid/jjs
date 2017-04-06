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


	$(document).on('submit', '#form_news_update', function(event){

		let $this = $(this);
		let formData = new FormData();

		formData.append('title', $('input[name="title"]').val());
		formData.append('date', $('input[name="date"]').val());
		formData.append('caption', $('textarea[name="caption"]').val());
		formData.append('description', $('textarea[name="description"]').val());
		formData.append('status', $('input[name="status"]').val());
		formData.append('old_image', $('input[name="old_image"]').val());

		// Attach file
		formData.append('image', $('input[type=file]')[0].files[0]); 

		$.ajax({
		    url: _root + 'news/update/' + $('#_id').val(),
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

	/**
	* Jobs Sscripts
	**/
	$(document).on('submit', '#form_jobs_create', function(event){

		let $this = $(this);

		$.ajax({
		    url: _root + 'jobs/store',
		    data: $this.serialize(),
		    type: 'POST',
		    dataType : 'json'
		}).done(function(response){
			toastr.success(response.message, { timeOut: 1500});

			setTimeout(function() {
				window.location = _root + 'jobs';
			}, 2000);
		});

		return false;
	});

	$(document).on('submit', '#form_jobs_update', function(event){

		let $this = $(this);

		$.ajax({
		    url: _root + 'jobs/update/' + $('#_id').val(),
		    data: $this.serialize(),
		    type: 'PUT',
		    dataType : 'json'
		}).done(function(response){
			toastr.success(response.message, { timeOut: 1500});

			setTimeout(function() {
				window.location = _root + 'jobs';
			}, 2000);
		});

		return false;
	});


	/**
	* Users Sscripts
	**/
	$(document).on('submit', '#form_users_create', function(event){

		let $this = $(this);

		$.ajax({
		    url: _root + 'users/store',
		    data: $this.serialize(),
		    type: 'POST',
		    dataType : 'json'
		}).done(function(response){
			toastr.success(response.message, { timeOut: 1500});

			setTimeout(function() {
				window.location = _root + 'users';
			}, 2000);
		}).fail(function(error, xhr){
			
		});

		return false;
	});

	//Users Login
	$(document).on('submit', '#form_login', function(event){

		let $this = $(this);

		$.ajax({
		    url: '/users/login',
		    data: $this.serialize(),
		    type: 'GET',
		    dataType : 'json'
		}).done(function(response){
			toastr.success(response.message, { timeOut: 1500});

			setTimeout(function() {
				window.location = _root + 'applicants';
			}, 2000);
		}).fail(function(error, xhr){
			
		});

		return false;
	});

	//Removing Item in table
	$(document).on('click', '.remove-item', function(event){
		event.preventDefault();

		let _this = $(this);
		let id    = _this.data('id');
		let box   = $('#box-' + id);
		let rel   = _this.attr('rel');
		let message = _this.data('message');

		if (confirm(message)) {
			$.ajax({
			    url: _root + rel +'/delete/' + id,
			    type: 'DELETE',
			    dataType : 'json'
			}).done(function(response){
				toastr.success(response.message, { timeOut: 1500});

				setTimeout(function() {
					box.remove();
				}, 2000);
			});
		}
	});

	//Archive Applicant
	$(document).on('click', '.archive-item', function(event){
		event.preventDefault();

		let _this = $(this);
		let id    = _this.data('id');
		let box   = $('#box-' + id);
		let rel     = _this.attr('rel');
		let message = _this.data('message');

		if (confirm(message)) {
			$.ajax({
			    url: _root + rel +'/archive/' + id,
			    type: 'DELETE',
			    dataType : 'json'
			}).done(function(response){
				toastr.success(response.message, { timeOut: 1500});

				setTimeout(function() {
					box.remove();
				}, 2000);
			});
		}
	});

	//Archive Applicant
	$(document).on('click', '.status-item', function(event){
		event.preventDefault();

		let _this = $(this);
		let id    = _this.data('id');
		let box   = $('#box-' + id);
		let rel     = _this.attr('rel');
		let message = _this.data('message');
		let status  = _this.data('status');

		if (confirm(message)) {
			$.ajax({
			    url: _root + rel +'/status/' + id + '/'+ status,
			    type: 'GET',
			    dataType : 'json'
			}).done(function(response){
				toastr.success(response.message, { timeOut: 1500});

				setTimeout(function() {
					box.remove();
				}, 2000);
			});
		}
	});

	$(document).on('click', '#tabs-settings li', function(event){
		event.preventDefault();

		let _this = $(this);
		let rel   = _this.attr('rel');

		let active = $("#tab-"+rel);

		$(".tabs-content").addClass('hidden');
		$("ul#tabs-settings li").removeClass('is-active');
		_this.addClass('is-active');
		active.removeClass('hidden');
	});

	$(document).on('submit', '.form_settings', function(event){

		let _this = $(this);

		$.ajax({
		    url: _root + 'settings/store',
		    data: _this.serialize(),
		    type: 'POST',
		    dataType : 'json'
		}).done(function(response){
			toastr.success(response.message, { timeOut: 1500});
		}).fail(function(error, xhr){
			
		});

		return false;
	});

});