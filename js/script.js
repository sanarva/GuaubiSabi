$(document).ready(function(){

    $('#btnSend').click(function(){
        var totalErrores = 0;
        var errores = '';

        // Validado Nombre ==============================
        if( $('#names').val() == '' ){
            errores += '<p>Escribe tu nombre</p>';
            totalErrores++;
            $('#names').css("border-bottom-color", "#F14B4B")
        } else if(!validateText($('#names').val())){
            errores += '<p>Escriba un nombre correcto. Se requiren un mínimo de tres letras. Ej. Ana</p>';
            totalErrores++;
            $('#names').css("border-bottom-color", "#F14B4B")
        } else{
            $('#names').css("border-bottom-color", "#d1d1d1")
        }

        
        //Comprueba que el campo nombre y asunto contiene solo como mínimo, tres letras antes de enviar la petición al servidor
        function validateText(names) {
            const regexEmail = /^[A-Za-záéíóúàèìòùñçÁÉÍÓÚÀÈÌÒÙÑÇ\s'-]{3,50}$/;
            return regexEmail.test(names) ? true : false;
        }

        // Validado Correo ==============================
        if( $('#email').val() == '' ){
            errores += '<p>Escribe tu email</p>';
            totalErrores++;
            $('#email').css("border-bottom-color", "#F14B4B")
        } else if(!validateFormatEmail($('#email').val())){
            errores += '<p>El formato del email no es correcto. Ej. email@gmail.com</p>';
            totalErrores++;
            $('#email').css("border-bottom-color", "#F14B4B")
        } else{
            $('#email').css("border-bottom-color", "#d1d1d1")
        }

        //Comprueba que el campo email tiene un formato correcto antes de enviar la petición al servidor
        function validateFormatEmail(email) {
            const regexEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;    
            return regexEmail.test(email) ? true : false;
        }
    
            
        // Validado Asunto ==============================
        if( $('#subject').val() == '' ){
            errores += '<p>Escribe un asunto</p>';
            totalErrores++;
            $('#subject').css("border-bottom-color", "#F14B4B")
        } else if(!validateText($('#subject').val())){
            errores += '<p>Escriba un asunto válido. Mínimo tres letras. No se permiten números ni caracteres especiales.</p>';
            totalErrores++;
            $('#subject').css("border-bottom-color", "#F14B4B")
        } else{
            $('#subject').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Mensaje ==============================
        if( $('#mensaje').val() == '' ){
            errores += '<p>Escribe tu mensaje</p>';
            totalErrores++;
            $('#mensaje').css("border-bottom-color", "#F14B4B")
        } else if(!validateNoPubliWeb($('#mensaje').val())){
            errores += '<p>Mensaje no válido. El mensaje debe tener entre 3 y 500 caracteres y no debe contener publicidad de ninguna web.</p>';
            totalErrores++;
            $('#mensaje').css("border-bottom-color", "#F14B4B")
        } else{
            $('#mensaje').css("border-bottom-color", "#d1d1d1")
        }

       
        //Comprueba que el campo mensaje no contiene una dirección web. Para evitar spam
        function validateNoPubliWeb(mensaje) {
            const regexEmail = /^((?!http:)(?!HTTP:).){3,500}$/;
            return regexEmail.test(mensaje) ? true : false;
        }


        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });

        if(totalErrores > 0){
            return false;
        } else {
            formularioContacto.action = "php/enviar.php"
        }

    });

});
