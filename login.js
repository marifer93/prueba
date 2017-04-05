//$(document).ready() /*hago referencia a la hoja del html.. el ready funcion que indica que puedo trabajar ese docuemntos*/
//$(document).ready(function(){}); /*función anonima*/

$(document).ready(function(){
    $('#login').on('click',function(){
     var username = $('#username').val();
     var password = $('#password').val();
     var variable= {"nombre":username,"contaseña":password};
     console.log(variable.nombre);
     
     $.ajax({
            url: "login.php",
            method:"post", 
            dataType:"JSON",
            //data: {"username":username,"password":password}
            data:variable
          }).done(function(data) {
              alert(data);
          });
     
    });
});

