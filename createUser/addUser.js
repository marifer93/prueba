/**
 * Created by Marifer y Yetsi on 06/04/17.
 */
$(document).ready(function(){
    $('#Add').on('click',function(){
        var nombre= $('#name').val();
        var apellido= $('#lastname').val();
        var correo= $('#email').val();
        var telefono= $('#phone').val();
        var contraseña= $('#password').val();


        var datos= {
            "name":nombre,
            "lastname":apellido,
            "email":correo,
            "phone":telefono,
            "password":contraseña
        };



        console.log(datos.phone);

        $.ajax({
            url: "addUser.php",
            method:"post",
            dataType:"JSON",
            //data: {"username":username,"password":password}
            data:datos
        }).done(function(data) {
            alert(data);
        });

    });
});