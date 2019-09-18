<!-- Required Jquery -->
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\jquery\js\jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\popper.js\js\popper.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js">
</script>
<!-- modernizr js -->
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\modernizr\js\modernizr.js"></script>
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\modernizr\js\css-scrollbars.js"></script>
<!-- notification js -->
<script type="text/javascript" src="<?=base_url();?>\files\assets\js\bootstrap-growl.min.js"></script>

<!-- owl carousel 2 js -->
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\owl.carousel\js\owl.carousel.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>\files\assets\js\owl-custom.js"></script>
<!-- swiper js -->
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\swiper\js\swiper.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>\files\assets\js\swiper-custom.js"></script>
<!-- Syntax highlighter prism js -->
<script type="text/javascript" src="<?=base_url();?>\files\assets\pages\prism\custom-prism.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\i18next\js\i18next.min.js"></script>
<script type="text/javascript"
src="<?=base_url();?>\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
<script type="text/javascript"
src="<?=base_url();?>\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js">
</script>
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\jquery-i18next\js\jquery-i18next.min.js">
</script>
<!-- validation-->
<script type="text/javascript" src="<?=base_url();?>\files\bower_components\jquery-validation\js\jquery.validate.js">
</script>
<script src="<?=base_url();?>\files\assets\js\pcoded.min.js"></script>
<script src="<?=base_url();?>\files\assets\js\menu\menu-hori-fixed.js"></script>
<script src="<?=base_url();?>\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?=base_url();?>\files\assets\js\modernizr.custom.86080.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?=base_url();?>\files\assets\js\script.js"></script>
<script>
	$.validator.setDefaults({
		submitHandler: function() {
			guardarUsuario();
		}
	});
	$("#guardarUser").validate({
		rules: {
			Nombre_usuario: { 
				required: true,
				minlength: 3,
				maxlength: 10,

			} , 
			Email:{
				required: true,
				email: true
			},
			Pass: { 
				required: true,
				minlength: 3,
				maxlength: 10,

			} , 
			cfmPassword: { 
				required: true,
				equalTo: "#Pass",
				minlength: 3,
				maxlength: 10
			},
			acepto: "required"
		},
		messages:{
			Nombre_usuario: { 
				required:"Nombre de usuario requerido",
				minlength: "Minimo 3 caracteres",
				maxlength: "Maximo 10 caracteres"
			},
			Email: "Ingrese un correo electrónico válido.",
			Pass: { 
				required:"Contraseña requerida",
				minlength: "Minimo 3 caracteres",
				maxlength: "Maximo 10 caracteres"
			},
			cfmPassword: { 
				required:"Confirmar contraseña requerida",
				equalTo: 'No coincide, confirme su contraseña.',
				minlength: "Minimo 3 caracteres",
				maxlength: "Maximo 10 caracteres"
			},
			acepto: "Aceptar términos."
		}

	});
	function guardarUsuario(){
		$.ajax({
			type : 'POST',
			url : '<?=base_url();?>login/nuevo_usuario',
			data : $('#guardarUser').serialize(),
			success: function (data){
				if (data == 'exito') {
					$('[name="Nombre_usuario"]').val("");
					$('[name="Email"]').val("");
					$('[name="Pass"]').val("");
					$('[name="cfmPassword"]').val("");
					$('#se_guardo').trigger('click');
					$('#registrar').modal('hide');
					notify_success('Usuario registrado correctamente, te enviamos un código a tu correo electrónico para validar tu cuenta.', 'success');
				}else{
					$('#registrar').modal('hide');
					notify_error('¡Error! No pudimos registrar sus datos. Intente de nuevo.', 'danger');
				}
			}
		});
	}
	function notify_success(message, type){
        $.growl({
            message: message
        },{
            type: type,
            allow_dismiss: false,
            label: 'Cancel',
            className: 'btn-xs btn-success',
            placement: {
                from: 'top',
                align: 'center'
            },
            delay: 4500,
            animate: {
                    enter: 'animated fadeInCenter',
                    exit: 'animated fadeOutCenter'
            },
            offset: {
                x: 30,
                y: 30
            }
        });
    };
	function notify_error(message, type){
        $.growl({
            message: message
        },{
            type: type,
            allow_dismiss: false,
            label: 'Cancel',
            className: 'btn-xs btn-danger',
            placement: {
                from: 'top',
                align: 'center'
            },
            delay: 4500,
            animate: {
                    enter: 'animated fadeInCenter',
                    exit: 'animated fadeOutCenter'
            },
            offset: {
                x: 30,
                y: 30
            }
        });
    };


   
        
</script>