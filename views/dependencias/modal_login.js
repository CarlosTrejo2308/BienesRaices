$('#login').click(function(){
              $("h4.modal-title").text("Ingrese sus datos:");
              $('#loginto').val("Login");
              $('#login_form')[0].reset();
});

$('#login_form').submit(function(event){
  var contrasena = $(this).data('f_contrasena');
  event.preventDefault();
  if($('#f_nombre').val() == ''){
    Swal.fire({
      type: 'warning',
      title: 'Error',
      text: 'Error:El Nombre de usuario es requerido'});
    }
  else if($('#f_contrasena').val() == ''){
    Swal.fire({
      type: 'warning',
      title: 'Error',
      text: 'Error:La Contraseña es requerida'});
      }
  else{
    console.log("Procede el login");
    $.ajax({
      url:"../controllers/get_user.php",
      method:"POST",
      data:{passwd:contrasena},

      success:function(data){
        $('#login_form')[0].reset();
        $('#login_modal').modal('hide');
          Swal.fire({
            title: "Login",
            text: "Bienvenido Admin",
            type: "success"
            }).then(function() {
              window.location = "master_admin.php";
              });
            },
      error : function(data) {
          Swal.fire({
            type: 'success',
            title: 'Bienvenido Admin.',
            }).then(function() {
              window.location = "master_admin.php";
              });  
         }
     });
    }
});
