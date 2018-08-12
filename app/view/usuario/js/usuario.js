function Test_Informacion(){
  $.ajax({
    method: "POST",
    url: '../app/src/usuario/UsuarioController.php',
    data: {accion : "Listar"}
  }).done(function( data ){
    var lista = JSON.parse(data),
        contenido = "";
    console.log(lista);
  });
}

function Usuario_Listar(){
  var dtUsuario = $("#Dt_Usuario").DataTable({
    "destroy":true,
        "ajax":{
          "method":"POST",
          "url": "../app/src/usuario/UsuarioController.php",
          "data": {accion: "Listar"}
        },
        "columns":[
          {"defaultContent": "<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button> <button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button>"},
          {"data":"Id"},
          {"data":"Usuario"},
          {"data":"Password"},
          {"data":"Estado"}
        ]
  });
}

function Usuario_Grabar(){

  $("#frmGrabarUsuario").on("submit", function(e){
    e.preventDefault();
    //var usuario = $(this).serialize();
    var objUsuario = {
      "Id": $("#idUsuario").val(),
      "EmpresaId": $("#idEmpresa").val(),
      "EmpresaNombre": "",
      "Usuario": $("#usuario").val(),
      "Password": $("#contrasena").val(),
      "Estado": true
    };
    var usuario = JSON.stringify( objUsuario );

    $.ajax({
      method: "POST",
      url: '../app/src/usuario/UsuarioController.php',
      data: { accion:"Registrar", usuario: usuario}
    }).done(function( data ){
      alert(data);
    });
  });

  
}

//llamar funciones
//Test_Informacion();
Usuario_Listar();
Usuario_Grabar();
