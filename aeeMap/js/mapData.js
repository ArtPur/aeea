// JavaScript Document
$( document ).ready(function() {
	$("#country_id").keyup(function() {
		var country = $("#country_name").val();
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var email = $("#email").val();
			$.get( "mapstring.php", { country: country_id } )
			  .done(function( data ) {
			    console.log(data);
			  });
		
	});

})