
// ================================== COOL ANIMATION ================================== //

// $("#login-button").click(function(event){
//         event.preventDefault();
//
//     $('form').fadeOut(500);
//     $('.wrapper').addClass('form-success');
// });

demo = {
	showNotification: function(from, align) {
	    color = 'primary';

	    $.notify({
	      icon: "now-ui-icons ui-1_bell-53",
	      message: "Lesson Plan Deleted"

	    }, {
	      type: color,
	      timer: 8000,
	      placement: {
	        from: from,
	        align: align
	      }
	    });
	}
}