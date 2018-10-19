

    var map = new GMaps({
        el: '#map',
        lat:  -34.4333709,
        lng: -58.7909007
    });

    map.addMarker({
        lat: -34.4333709,
        lng: -58.7909007,
        title: 'Onestorage'
    });

    map.setZoom(15);


    $(function(){

        $('#titulo-tamanio').css('opacity', 0);
        $('#titulo-disponibles').css('opacity', 0);

        $('#titulo-tamanio').waypoint(function() {
            $('#titulo-tamanio').addClass('fadeInLeft');
        }, { offset: '40%' });

        $('#titulo-disponibles').waypoint(function() {
            $('#titulo-disponibles').addClass('fadeInRight');
        }, { offset: '41%' });



        $('#contact-form')[0].reset();
        $('#contact-form-r')[0].reset();

        $("#btn-send-mensaje").on("click",function(){

            var name    = $('#c-nombre').val();
            var correo  = $('#c-mail').val();
            var mensaje = $('#c-mensaje').val();

            if(name == ''){
                sweetalert('Nombre requerido', 'error');
            }else if(correo == '') {
                sweetalert('Correo requerido', 'error');
            }else if( !validateEmail(correo) ){
                sweetalert('Correo invalido', 'error');
            }else if(mensaje == ''){
                sweetalert('Mensaje requerido', 'error');
            }else{

                var formData = new FormData();

                formData.append("nombre", name);
                formData.append("correo", correo);
                formData.append("mensaje", mensaje);

                $.ajax({
                    type: 'POST',
                    url: './sendMail.php',
                    data: formData,
                    //dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend: function(){
                        $('button#btn-send-mensaje').prepend('<i class="fa fa-spinner fa-spin"></i> ');
                    },
                    success: function(json){

                        var res = $.parseJSON(json);

                        $('#contact-form')[0].reset();

                        $('button#btn-send-mensaje').find('i.fa').remove();

                        if(res.code === 200) {
                            sweetalert('Mensjae enviado exitosamente', 'success');

                        }else if(res.code === 500){
                            sweetalert('Error al enviar mensaje. Consulte al Administrador.', 'error');
                        }
                    },
                    error: function(json){

                        var res = $.parseJSON(json);

                        $('button#btn-send-mensaje').find('i.fa').remove();

                        sweetalert('Error. No se pudo enviar el mensaje. Consulte al Administrador.', 'error');

                    }
                });

            }

        });

        $("#btn-send-mensaje-r").on("click",function(){

            var name    = $('#c-nombre-r').val();
            var correo  = $('#c-mail-r').val();
            var mensaje = $('#c-mensaje-r').val();

            if(name == ''){
                sweetalert('Nombre requerido', 'error');
            }else if(correo == '') {
                sweetalert('Correo requerido', 'error');
            }else if( !validateEmail(correo) ){
                sweetalert('Correo invalido', 'error');
            }else if(mensaje == ''){
                sweetalert('Mensaje requerido', 'error');
            }else{

                var formData = new FormData();

                formData.append("nombre", name);
                formData.append("correo", correo);
                formData.append("mensaje", mensaje);

                $.ajax({
                    type: 'POST',
                    url: './sendMail.php',
                    data: formData,
                    //dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend: function(){
                        $('button#btn-send-mensaje-r').prepend('<i class="fa fa-spinner fa-spin"></i> ');
                    },
                    success: function(json){

                        var res = $.parseJSON(json);

                        $('#contact-form-r')[0].reset();

                        $('button#btn-send-mensaje-r').find('i.fa').remove();

                        if(res.code === 200) {
                            sweetalert('Mensjae enviado exitosamente', 'success');

                        }else if(res.code === 500){
                            sweetalert('Error al enviar mensaje. Consulte al Administrador.', 'error');
                        }
                    },
                    error: function(json){

                        var res = $.parseJSON(json);

                        $('button#btn-send-mensaje-r').find('i.fa').remove();

                        sweetalert('Error. No se pudo enviar el mensaje. Consulte al Administrador.', 'error');

                    }
                });

            }

        });

    });


    //funcion para mostrar alert
    function sweetalert(message, type){

        if(type == 'error'){
            var colorBtn = 'btn btn-lg btn-danger';
        }else if(type == 'success'){
            var colorBtn = 'btn btn-lg btn-success';
        }else{
            var colorBtn = 'btn btn-lg btn-primary';
        }

        swal({
            text: message,
            type: type,
            allowOutsideClick: false,
            confirmButtonText: 'Ok',
            confirmButtonClass: colorBtn,
            buttonsStyling: false
        });

    }

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    function cleanField() {



    }
