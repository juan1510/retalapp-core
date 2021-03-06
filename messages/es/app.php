<?php

/*
Script for inport a language core tags
$messages=require(Yii::getPathOfAlias('app.messages.es').'/zii.php');
foreach($messages as $data =>$msg) {
	$model=TranslationSourceMessage::model()->find("message=? and category='zii'",array($data));
	if($model===null)
		$model=new TranslationSourceMessage;
	$model->category='zii';
	$model->message=$data;
	if($model->save()) {
		$d=new TranslationMessage;
		$d->id=$model->id;
		$d->language='es';
		$d->translation=$msg;
		$d->save();

		$d=new TranslationMessage;
		$d->id=$model->id;
		$d->language='en_us';
		$d->translation=$data;
		$d->save();
	}
}
			
*/
return array(

	'Error sending email!!'=>'Error al enviar el correo!!',
	'We have sent a new password to your email'=>'Hemos enviado una nueva contraseña a su correo electrónico',
	'We have sent the instructions to your email'=>'Hemos enviado las instrucciones a su correo electrónico',
	'Profile updated successfully'=>'Perfil actualizado correctamente',
	'Login is required'=>'Inicio de sesión es necesario.',
	'Invalid request'=>'Petición inválida',
	'Correctly updated password.'=>'Contraseña actualizada correctamente.',
	'There has been an inconvenience and could not verify your email.'=>'Se ha presentado un inconveniente y no se pudo verificar su correo.',
	'Hi {name}!! Welcome a to {appName}'=>'Hola {name}!! Bienvenido a {appName}',
	'Phone'=>'Teléfono',
	'Please confirm your password'=>'Por favor confirme su contraseña',
	'Confirm Password'=>'Confirmar Contraseña',
	'New Password'=>'Nueva Contraseña',

	"Unfortunately the file(s) you selected weren't the type we were expecting. Only {extensions} files are allowed."=>"Desafortunadamente el archivo seleccionado no es el que esperabamos. Solo son permitidos archivos de extención <strong>{extensions}</strong>.",
	"{file} is too large, maximum file size is {sizeLimit}."=>"{file} es muy grande, el máximo permitido es {sizeLimit}.",
	"{file} is too small, minimum file size is {minSizeLimit}."=>"{file} es muy pequeño, el tamaño mínimo debería ser {minSizeLimit}.",
	"{file} is empty, please select files again without it."=>"{file} esta vacío, por favor seleccione un archivo diferente.",
	"The files are being uploaded, if you leave now the upload will be cancelled."=>"El archivo comenzo a subir, si cierras ahora la carga sera cancelada.",

	'Your email <strong>{attribute}</strong> has been desabled'=>'Tu email <strong>{attribute}</strong> ha sido deshabilitado',
	"Your email dosen't has been verified yet, please click {here} for resend email."=>"Tu email no ha sido verificado aún, porfavor da click {here} para reenviar el correo de verificación.",
	'Your email <strong>{value}</ strong> is not registered in our database'=>'El correo <strong>{value}</strong> no está registrado en nuestra base de datos',
	
	'Welcome email copies'=>'Texto correo bienvenida',
	'Password email copies'=>'Texto correo password',
	'RESENDED'=>'REENVIADO',
	'Here'=>'Aquí',
	'Email not found'=>'Email no encontrado',
	'We have forwarded your mail <strong>{email}</strong> a link to confirm, if it is not in your inbox please check your spam folder'=>'Hemos reenviado a tu correo <strong>{email}</strong> un enlace para confirmarlo, si no está en la bandeja de entrada por favor revisa tu bandeja de spam',
	'Your email <strong>{email}</strong> not found on owr database'=>'Tu email <strong>{email}</strong> no fue encontrado en nuestra base de datos',
	'Copy Welcome Email'=>'Texto de correo de bienvenida',
	'Copy Forgot Email'=>'Texto de correo olvidé contraseña',
	'Copy Send Password'=>'Texto de correo registro con password',
	'Copy Send Password Forgot'=>'Texto de correo [Olvidé password] envío de password',

	'Confirm email'=>'Confirmar correo',
	'Go to change password'=>'Ir a cambiar contraseña',
	'Your credentials'=>'Tus datos de ingreso en',
	'Confirm register on'=>'Confirmar Registro en',
	'New password'=>'Nueva contraseña',
	'Recover password'=>'Recuperar contraseña',
	
	'Email Copies'=>'Texto de correos',
	'Your password is too weak! must have at least 6 characters'=>'La contraseña es demasiado débil debe tener al menos 6 caracteres',
	
	'Title'=>'Título',
	'Keywords'=>'Palabras clave',
	'Description'=>'Descripción',
	'Admin Email'=>'Email administrador',
	'Offline'=>'Poner la página fuera de línea',
	'Editor Offline Message'=>'Mensaje Fuera de línea',

	'has been deleted successfully' => 'ha sido borrado con éxito',
	'has been updated successfully' => 'ha sido actualizado con éxito',
	'has been created successfully' => 'ha sido creado con éxito',
	'Error to database connection. Please try later' => 'Error al conectarse co los datos. Por favor intente mas tarde',
	
	'The resourse requested {id} does not exist or was deleted' => '404 El recurso solicitado {id} no existe o fué eliminado',
	'The resourse requested does not exist' => '404 El recurso solicitado no existe',
	'You do not have access to take this action' => '404 Usted no tiene acceso para realizar esta acción',
	'Form validation errors' => 'Errores de validación',
	
	//Informational 1xx
	'100 Continue' => '100 Continue',
	'101 Switching Protocols' => '101 Switching Protocols',
	// Successful 2xx
	'200 OK' => '200 OK',
	'201 Created' => '201 Created',
	'202 Accepted' => '202 Accepted',
	'203 Non-Authoritative Information' => '203 Non-Authoritative Information',
	'204 No Content' => '204 No Content',
	'205 Reset Content' => '205 Reset Content',
	'206 Partial Content' => '206 Partial Content',
	// Redirection 3xx
	'300 Multiple Choices' => '300 Multiple Choices',
	'301 Moved Permanently' => '301 Moved Permanently',
	'302 Found' => '302 Found',
	'303 See Other' => '303 See Other',
	'304 Not Modified' => '304 Not Modified',
	'305 Use Proxy' => '305 Use Proxy',
	'306 (Unused)' => '306 (Unused)',
	'307 Temporary Redirect' => '307 Temporary Redirect',
	// Client Error 4xx
	'400 Bad Request' => '400 Bad Request',
	'401 Unauthorized' => '401 Unauthorized',
	'402 Payment Required' => '402 Payment Required',
	'403 Forbidden' => '403 Forbidden',
	'404 Not Found' => '404 Not Found',
	'405 Method Not Allowed' => '405 Method Not Allowed',
	'406 Not Acceptable' => '406 Not Acceptable',
	'407 Proxy Authentication Required' => '407 Proxy Authentication Required',
	'408 Request Timeout' => '408 Request Timeout',
	'409 Conflict' => '409 Conflict',
	'410 Gone' => '410 Gone',
	'411 Length Required' => '411 Length Required',
	'412 Precondition Failed' => '412 Precondition Failed',
	'413 Request Entity Too Large' => '413 Request Entity Too Large',
	'414 Request-URI Too Long' => '414 Request-URI Too Long',
	'415 Unsupported Media Type' => '415 Unsupported Media Type',
	'416 Requested Range Not Satisfiable' => '416 Requested Range Not Satisfiable',
	'417 Expectation Failed' => '417 Expectation Failed',
	'418 I\'m a teapot' => '418 I\'m a teapot',
	'422 Unprocessable Entity' => '422 Unprocessable Entity',
	'423 Locked' => '423 Locked',
	// Server Error 5xx
	'500 Internal Server Error' => '500 Internal Server Error',
	'501 Not Implemented' => '501 Not Implemented',
	'502 Bad Gateway' => '502 Bad Gateway',
	'503 Service Unavailable' => '503 Service Unavailable',
	'504 Gateway Timeout' => '504 Gateway Timeout',
	'505 HTTP Version Not Supported' => '505 HTTP Version Not Supported',

	"You cannot delete this record"=>'¿Este registro no se puede borrar?',
	"Are you sure you want to delete this record?"=>'¿Está seguro que desea <strong>BORRAR</strong> el registro seleccionado?',
	"View all"=>'Ver todas',
	"Users system"=>'Usuarios',
	"Generals"=>'Generales',
	"Applications"=>'Aplicaciones',
	"Generals settings"=>'Configuraciones generales',
	"Profiles system"=>'Perfiles del sistema',
	"Welcome text"=>'Texto de bienvenida',
	"Settings"=>'Configuraciones',
	"General Settings"=>'Configuraciones generales',
	"The record was saved successfully"=>'Datos guardados correctamente',
	"Type"=>'Tipo',
	"Connect With"=>'Conectar con',
	"Login/Register"=>'Ingreso y/o Registro',
	"Menu Options"=>'Opciones del menú',
	"Show Menu From Admin"=>'Mostrar menu usuarios a perfil admin',
	"Label Menu"=>'Nombre del menu usuarios',
	"Login In Register"=>'Loguear al usuario una vez se registra',
	"Send Password"=>'Enviar password',
	"Enable Oauth"=>'Habilitar OAuth',
	"Allow Basic Oauth"=>'Permitir basic OAuth',
	"Facebook Login Register"=>'Habilitar Login/Registro con Facebook',
	"Twitter Login Register"=>'Habilitar Login/Registro con Twitter',
	
	"Delete"=>'Borrar',
	"Empty"=>'Sin definir',
	"More info"=>'Más info',
	"Notification from"=>'Notificación desde',
	
	"I accept terms and conditions."=>'Acepto Términos y condiciones.',
	"Username or email"=>'Correo electrónico',
	"Password"=>'Contraseña',
	
	"Old Password"=>'Clave actual',
	"New Password"=>'Nueva clave',
	"Confirm your new password"=>'Confirmar nueva clave',
	
	// Home page translate
	"Login"=>'Ingresar',
	"Home"=>'Inicio',
	"Apps"=>'Apps',
	"What's a retalapp?"=>'¿Que es una retalapp?',
	"Find <em> Retalapps </em> of your project"=>'Encuentra la <em>Retalapps</em> de tu proyecto',
	"You get a project basis with clean code and maintainable"=>'Recibes un proyecto base con código limpio y mantenible',
	"Get <em> Retalapps </em> immediately with their documentation"=>'Descarga tu <em>Retalapps</em> de inmediato con su respectiva documentación',
	"You take care of what really matters to develop in your project"=>'Te encargas de desarrollar lo que realmente importa de tu proyecto',
	"It's an application with basic functionality, you don't need boot your timeline from scratch."=>'Es una aplicación con funcionalidades básicas, con esto no arrancas tu timeline desde cero.',
	'Search now'=>'Buscar ahora',
	
	'Parent menu'=>'Menú padre',
	
	// Models names
	'Close'=>'Cerrar',
	'View'=>'Visualizando',
	'Create'=>'Crear',
	'Saving'=>'Guardando',
	'Update'=>'Actualizar',
	'Back'=>'Atras',
	'e.g.'=>'Por ejemplo:',
	'Users'=>'Usuarios',
	'Username'=>'Nombre de usuario',
	'Lastname'=>'Apellido',
	'State'=>'Estado',
	'Img'=>'Imágen',
	'Registered'=>'Registrado',
	'State Email'=>'Estado de Correo',
	'Picture'=>'Imágen',
	'Create Users'=>'Crear Usuario',
	
	// Users controller
	'The profile was successfully updated'=>'El perfil fue actualizado correctamente',
	

	// Models attributes 
	// and custom validations 
	// (remember that you validation messages are translated from yii.app file)
	'Message'=>'Mensaje',
	'Subject'=>'Asunto',
	'Email'=>'Correo',
	'Name'=>'Nombre',
	'Remember me next time'=>'Mantenerme logueado',
	'Verification Code'=>'Código de verificación',
	'Incorrect username or password.'=>'Usuario o contraseña incorrecto.',

	// Login page
	"Username or email"=>'Usuario o email',
	"Password"=>'Contraseña',
	"Please fill out the following form with your login credentials:"=>'Por favor ingrese su usuario o email y contraseña.',
	"Your email was not verified yet, please check between your run and spam received the verification email we've sent, or try signing up again"=>'Tu correo no fue verificado aun, por favor revisa entre tus corres recibidos y en el spam el correo de verificacion que hemos enviado, o intenta registrarte nuevamente',

	// Contact page
	'Contact Us'=>'Contátenos',
	'Send message'=>'Enviar mensaje',
	'Drop us a line and we will contact you as soon as possible'=>'Déjanos un mensaje y nos pondremos en contacto lo antes posible',
	'Please enter the letters shown in the picture above. <br/> Letters are not case sensitive.'=>'Por favor, introduzca las letras que se muestran en la imagen de arriba. <br/> Las letras no distinguen entre mayúsculas y minúsculas.',
	
	// Generals tag
	'Disabled'=>'Inactivo',
	'Enabled'=>'Activo',
	'Operations'=>'Operaciones',
	'Update'=>'Actualizar',
	'View'=>'Ver',
	'List'=>'Listado',
	'Manage'=>'Administrar',
	'Create'=>'Crear',
	'Name'=>'Nombre',
	'Save'=>'Guardar',
	'Save # {nro}'=>'Guardar el numero {nro}',
);