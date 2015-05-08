//spacebar refresh
$(window).on('keypress',function(e) {
	console.log( $(e.target).attr("id") )
  if ((e.keyCode == 0 || e.keyCode == 32) &&  $(e.target).attr("class") != "form-control") {
    location.reload();
  }
});