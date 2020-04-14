 import $ from 'jquery';

 $(document).ready(function(){
	$('body').on('click', ' .more_button', function(){
		$('#second_section').toggleClass('active');
	});
	$('body').on('click',' .return_button', (function(){
		$('#second_section').toggleClass('active');
	}));

	$('body').on('click',' .link_first_section', (function(){
		$('#second_section').toggleClass('active');
	}));
 });