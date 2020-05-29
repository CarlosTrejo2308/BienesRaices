$(document).ready(function(){
  if ($('#lista_casas').length){
    $('#lista_casas').DataTable( {

      dom: 'Blfrtip',
      buttons: [{
        extend: 'excelHtml5',
        messageTop: 'Gobierno Federal',
        text:"Exporta Excel",
        title:"Casas en Venta.",
        },

        {
          extend: 'csvHtml5',
          text:"Exporta csv",
          title:"Casas en Venta.",
          messageTop: 'Gobierno Federal',
        },

        {
          extend: 'pdfHtml5',
          title: 'Casas en Venta.'
        }
      ],
      
      responsive: true,
      "language": {
        "search": "Filtro de Registros:",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sInfo": "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
        "oPaginate": {
          "sPrevious": "Anterior",
          "sNext": "Siguiente"
        }
      }
    });
  }

  $('#add').click(function(){
    $("h4.modal-title").text("Publicar Casa");
    $('#insert').val("Insert");
    $('#insert_form')[0].reset();
  });

  $('#insert_form').on("submit", function(event,table){
    event.preventDefault();
    if($('#f_picture').val() == ''){

      Swal.fire({
        type: 'warning',
        title: 'Error',
        text: 'Error: Error en la url de la foto.'});
    }
    else{
      console.log("Publicando Casa...");

      $.ajax({
        url:"../controller/insert_update_casa.php",
        method:"POST",
        data:$('#insert_form').serialize(),

        beforeSend:function(){
          if($('#id_casa').val() == ''){
            $('#insert').val("Publicando...");
          }
          else{
            $('#insert').val("Actualizando...");
          }
        },

        success:function(data){
          if (data=='ok'){
            $('#insert_form')[0].reset();
            $('#add_modal').modal('hide');

            Swal.fire({
              title: "Publicar Casa",
              text: "¡Publicación terminada con éxito!",
              type: "success"
            }).then(function(){
              window.location = "data_table.php";
            });
          }

          else{
            Swal.fire({
              type: 'error',
              title: 'La casa no se publicó correctamente, vuelva a intentar.',
            });
          }
        }
      });
    }
  });

  $('#lista_casas tbody').on('click', '.delete', function() {
    var el = this;

    // Delete
    var deleteid = $(this).data('id');

    // Confirm box
    bootbox.confirm("¿Se vendió la Casa?", function(result) {
      if(result){

        // AJAX Request
        $.ajax({
          url: '../controller/delete_casa.php',
          type: 'POST',
          data: { id:deleteid },

          success: function(response){
            console.log(response);
            if(response == 1){
              $(el).closest('tr').css('background','tomato');
              $(el).closest('tr').fadeOut(800,function(){
                $(this).remove();
              });
            }else{
              bootbox.alert('La publicación no fue eliminada.');
            }
          }
        });
      }
    });
  });

  $('#lista_casas tbody').on('click', '.ver', function() {
    $("h4.modal-title").text("Información de la Casa");
    
    // ver id
    var id_casa = $(this).data('id');

    if(id_casa != ''){

      $.ajax({
        url:'../controller/select_casa.php',
        method:'POST',
        data:{id:id_casa},
        
        success:function(response){
          $('#detail').html(response);
          $('#dataModal').modal('show');
        },

        error : function(request, status, error) {
          var val = request.responseText;
          alert("error"+val);
        }
      });
    }
  });

  /*update*/
  $('#lista_casas tbody').on('click', '.update', function() {
    $("h4.modal-title").text("Modificar Publicación");
    var id_casa = $(this).data('id');

    $.ajax({
      url:"../controller/fetch_casa.php",
      method:"POST",
      data:{id_casa:id_casa},
      dataType:"json",

      success:function(data){
        $('#f_picture').val(data.nombre_curso);
        $('#id_casa').val(data.IDCurso);
        $('#insert').val("Actualizar");
        $('#add_modal').modal('show');
      },

      error : function(request, status, error) {
        var val = request.responseText;
        alert("error"+val);
      }
    });
  });// end function update
});//ready function