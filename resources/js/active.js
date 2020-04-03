 import $ from 'jquery';

 $(document).ready(function(){
	$('body').on('click', ' .more_button', function(){
		$('#second_section').toggleClass('active');
	});
	//	$('body').on('click',' #close_button', (function(){
	//	$('#second_section').toggleClass('active');
	//}));
 });