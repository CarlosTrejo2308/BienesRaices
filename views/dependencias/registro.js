$(document).ready(function(){
	$('#registr_form').on("submit",function(event){
		event.preventDefault();
	    console.log('Procede el registro');
	    $.ajax({
	    	url:"../controller/newuser.php",
	    	method:"POST",
	    	data:$('#registr_form').serialize(),

	    	success:function(data){
	    		$('#registr_form')[0].reset();
			       Swal.fire({
			           title: "Registro",
			           text: "Bienvenido",
			           type: "success"
			           }).then(function() {
			             window.location = "master.php";
			             });
			           },
			   error : function(data) {
			         Swal.fire({
			           type: 'error',
		            title: 'No se ha podido completar el registro.',
			           });  
		        }
	    	});
	});
});