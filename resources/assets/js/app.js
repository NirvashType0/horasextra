
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */
$( document ).ready(function() {
    $('.datepicker').datepicker({
	    format: 'mm/dd/yyyy'
	});
    $('.modal').on('hidden.bs.modal', function(e)
    { 
        $(this).removeData();
    });
});