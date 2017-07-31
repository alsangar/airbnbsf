<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso.',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario.',
    'fos_user.username.short' => 'El nombre de usuario es demasiado corto.',
    'fos_user.username.long' => 'El nombre de usuario es demasiado largo.',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso.',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo.',
    'fos_user.email.short' => 'La dirección de correo es demasiado corta.',
    'fos_user.email.long' => 'La dirección de correo es demasiado larga.',
    'fos_user.email.invalid' => 'La dirección de correo no es válida.',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña.',
    'fos_user.password.short' => 'La contraseña es demasiado corta.',
    'fos_user.password.mismatch' => 'Las dos contraseñas no coinciden.',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña.',
    'fos_user.new_password.short' => 'La nueva contraseña es demasiado corta.',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida.',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre.',
    'fos_user.group.short' => 'El nombre es demasiado corto.',
    'fos_user.group.long' => 'El nombre es demasiado largo.',
    'fos_group.name.already_used' => 'El nombre ya está en uso.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Agregar nuevo',
    'label_type_yes' => 'sí',
    'label_type_no' => 'no',
    'sonata_core_template_box_file_found_in' => 'Este archivo se puede encontrar en',
    'label_type_equals' => 'igual a',
    'label_type_not_equals' => 'diferente a',
    'date_range_start' => 'Fecha inicial',
    'date_range_end' => 'Fecha final',
    'aliceblue' => 'aliceblue',
    'antiquewhite' => 'antiquewhite',
    'aqua' => 'aqua',
    'aquamarine' => 'aquamarine',
    'azure' => 'azure',
    'beige' => 'beige',
    'bisque' => 'bisque',
    'black' => 'negro',
    'blanchedalmond' => 'blanchedalmond',
    'blue' => 'azul',
    'blueviolet' => 'blueviolet',
    'brown' => 'marrón',
    'burlywood' => 'burlywood',
    'cadetblue' => 'cadetblue',
    'chartreuse' => 'chartreuse',
    'chocolate' => 'chocolate',
    'coral' => 'coral',
    'cornflowerblue' => 'cornflowerblue',
    'cornsilk' => 'cornsilk',
    'crimson' => 'crimson',
    'cyan' => 'cyan',
    'darkblue' => 'darkblue',
    'darkcyan' => 'darkcyan',
    'darkgoldenrod' => 'darkgoldenrod',
    'darkgray' => 'darkgray',
    'darkgreen' => 'darkgreen',
    'darkkhaki' => 'darkkhaki',
    'darkmagenta' => 'darkmagenta',
    'darkolivegreen' => 'darkolivegreen',
    'darkorange' => 'darkorange',
    'darkorchid' => 'darkorchid',
    'darkred' => 'darkred',
    'darksalmon' => 'darksalmon',
    'darkseagreen' => 'darkseagreen',
    'darkslateblue' => 'darkslateblue',
    'darkslategray' => 'darkslategray',
    'darkturquoise' => 'darkturquoise',
    'darkviolet' => 'darkviolet',
    'deeppink' => 'deeppink',
    'deepskyblue' => 'deepskyblue',
    'dimgray' => 'dimgray',
    'dodgerblue' => 'dodgerblue',
    'firebrick' => 'firebrick',
    'floralwhite' => 'floralwhite',
    'forestgreen' => 'forestgreen',
    'fuchsia' => 'fuchsia',
    'gainsboro' => 'gainsboro',
    'ghostwhite' => 'ghostwhite',
    'gold' => 'gold',
    'goldenrod' => 'goldenrod',
    'gray' => 'gray',
    'green' => 'verde',
    'greenyellow' => 'greenyellow',
    'honeydew' => 'honeydew',
    'hotpink' => 'hotpink',
    'indianred' => 'indianred',
    'indigo' => 'indigo',
    'ivory' => 'ivory',
    'khaki' => 'khaki',
    'lavender' => 'lavender',
    'lavenderblush' => 'lavenderblush',
    'lawngreen' => 'lawngreen',
    'lemonchiffon' => 'lemonchiffon',
    'lightblue' => 'lightblue',
    'lightcoral' => 'lightcoral',
    'lightcyan' => 'lightcyan',
    'lightgoldenrodyellow' => 'lightgoldenrodyellow',
    'lightgray' => 'lightgray',
    'lightgreen' => 'lightgreen',
    'lightpink' => 'lightpink',
    'lightsalmon' => 'lightsalmon',
    'lightseagreen' => 'lightseagreen',
    'lightskyblue' => 'lightskyblue',
    'lightslategray' => 'lightslategray',
    'lightsteelblue' => 'lightsteelblue',
    'lightyellow' => 'lightyellow',
    'lime' => 'lime',
    'limegreen' => 'limegreen',
    'linen' => 'linen',
    'magenta' => 'magenta',
    'maroon' => 'maroon',
    'mediumaquamarine' => 'mediumaquamarine',
    'mediumblue' => 'mediumblue',
    'mediumorchid' => 'mediumorchid',
    'mediumpurple' => 'mediumpurple',
    'mediumseagreen' => 'mediumseagreen',
    'mediumslateblue' => 'mediumslateblue',
    'mediumspringgreen' => 'mediumspringgreen',
    'mediumturquoise' => 'mediumturquoise',
    'mediumvioletred' => 'mediumvioletred',
    'midnightblue' => 'midnightblue',
    'mintcream' => 'mintcream',
    'mistyrose' => 'mistyrose',
    'moccasin' => 'moccasin',
    'navajowhite' => 'navajowhite',
    'navy' => 'navy',
    'oldlace' => 'oldlace',
    'olive' => 'olive',
    'olivedrab' => 'olivedrab',
    'orange' => 'naranja',
    'orangered' => 'orangered',
    'orchid' => 'orchid',
    'palegoldenrod' => 'palegoldenrod',
    'palegreen' => 'palegreen',
    'paleturquoise' => 'paleturquoise',
    'palevioletred' => 'palevioletred',
    'papayawhip' => 'papayawhip',
    'peachpuff' => 'peachpuff',
    'peru' => 'peru',
    'pink' => 'rosa',
    'plum' => 'plum',
    'powderblue' => 'powderblue',
    'purple' => 'púrpura',
    'rebeccapurple' => 'rebeccapurple',
    'red' => 'rojo',
    'rosybrown' => 'rosybrown',
    'royalblue' => 'royalblue',
    'saddlebrown' => 'saddlebrown',
    'salmon' => 'salmon',
    'sandybrown' => 'sandybrown',
    'seagreen' => 'seagreen',
    'seashell' => 'seashell',
    'sienna' => 'sienna',
    'silver' => 'silver',
    'skyblue' => 'skyblue',
    'slateblue' => 'slateblue',
    'slategray' => 'slategray',
    'snow' => 'snow',
    'springgreen' => 'springgreen',
    'steelblue' => 'steelblue',
    'tan' => 'tan',
    'teal' => 'teal',
    'thistle' => 'thistle',
    'tomato' => 'tomato',
    'turquoise' => 'turquoise',
    'violet' => 'violet',
    'wheat' => 'wheat',
    'white' => 'blanco',
    'whitesmoke' => 'whitesmoke',
    'yellow' => 'amarillo',
    'yellowgreen' => 'yellowgreen',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administración',
    'action_delete' => 'Borrar',
    'btn_batch' => 'OK',
    'btn_create' => 'Crear',
    'btn_create_and_edit_again' => 'Crear y editar',
    'btn_create_and_create_a_new_one' => 'Crear y agregar otro',
    'btn_create_and_return_to_list' => 'Crear y regresar al listado',
    'btn_filter' => 'Filtrar',
    'btn_advanced_filters' => 'Filtros avanzados',
    'btn_update' => 'Actualizar',
    'btn_update_and_edit_again' => 'Actualizar',
    'btn_update_and_return_to_list' => 'Actualizar y cerrar',
    'link_delete' => 'Borrar',
    'link_action_create' => 'Agregar nuevo',
    'link_action_list' => 'Volver al listado',
    'link_action_show' => 'Mostrar',
    'link_action_edit' => 'Editar',
    'link_add' => 'Agregar nuevo',
    'link_list' => 'Listar',
    'link_reset_filter' => 'Restablecer',
    'title_create' => 'Crear',
    'title_show' => 'Mostrar "%name%"',
    'title_dashboard' => 'Panel principal',
    'title_edit' => 'Editar "%name%"',
    'title_list' => 'Listar',
    'link_next_pager' => 'Siguiente',
    'link_previous_pager' => 'Anterior',
    'link_first_pager' => 'Primero',
    'link_last_pager' => 'Último',
    'Admin' => 'Administrador',
    'link_expand' => 'expandir/ocultar',
    'no_result' => 'No hay resultados',
    'confirm_msg' => '¿Estás seguro?',
    'action_edit' => 'Editar',
    'action_show' => 'Mostrar',
    'all_elements' => 'Todos los elementos',
    'flash_batch_empty' => 'Acción cancelada. Ningún elemento ha sido seleccionado.',
    'flash_create_success' => 'El elemento "%name%" ha sido creado con éxito.',
    'flash_create_error' => 'Se ha producido un error durante la creación del elemento "%name%".',
    'flash_edit_success' => 'El elemento "%name%" ha sido actualizado con éxito.',
    'flash_edit_error' => 'Se ha producido un error durante la actualización del elemento "%name%".',
    'flash_lock_error' => 'Otro usuario ha modificado el elemento "%name%". Por favor %link_start%clica aquí%link_end% para recargar la página y aplicar los cambios de nuevo.',
    'flash_batch_delete_success' => 'Los elementos seleccionados han sido eliminados con éxito.',
    'flash_batch_delete_error' => 'Se ha producido un error durante la eliminación de los elementos seleccionados.',
    'flash_delete_error' => 'Se ha producido un error durante la eliminación del elemento "%name%".',
    'flash_delete_success' => 'El elemento "%name%" se ha eliminado con éxito.',
    'form_not_available' => 'El formulario no está disponible.',
    'link_breadcrumb_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Confirma el borrado',
    'message_delete_confirmation' => '¿Estás seguro que quieres borrar el elemento seleccionado "%object%"?',
    'btn_delete' => 'Sí, borrar',
    'title_batch_confirmation' => 'Confirma la operación "%action%"',
    'message_batch_confirmation' => '¿Estás seguro que quieres confirmar y ejecutar esta acción para el elemento seleccionado?|¿Estás seguro que quieres confirmar y ejecutar esta acción para todos los %count% elementos seleccionados?',
    'message_batch_all_confirmation' => '¿Estás seguro que quieres confirmar y ejecutar esta acción para todos los elementos?',
    'btn_execute_batch_action' => 'Sí, ejecutar',
    'label_type_yes' => 'sí',
    'label_type_no' => 'no',
    'label_type_contains' => 'contiene',
    'label_type_not_contains' => 'no contiene',
    'label_type_equals' => 'es igual a',
    'label_type_not_equals' => 'no es igual a',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'está vacío',
    'label_date_type_not_null' => 'no está vacío',
    'label_date_type_between' => 'entre',
    'label_date_type_not_between' => 'no entre',
    'label_filters' => 'Filtros',
    'delete_or' => 'o',
    'link_action_history' => 'Revisiones',
    'td_action' => 'Acción',
    'td_compare' => 'Compara',
    'td_revision' => 'Revisiones',
    'td_timestamp' => 'Fecha',
    'td_username' => 'Autor',
    'td_role' => 'Rol',
    'label_view_revision' => 'Ver Revisión',
    'label_compare_revision' => 'Comparar la revision',
    'list_results_count_prefix' => 'al menos',
    'list_results_count' => '1 resultado|%count% resultados',
    'label_export_download' => 'Exportar',
    'export_format_json' => 'JSON',
    'export_format_xml' => 'XML',
    'export_format_csv' => 'CSV',
    'export_format_xls' => 'XLS',
    'loading_information' => 'Cargando información…',
    'btn_preview' => 'Vista previa',
    'btn_preview_approve' => 'Aprobar',
    'btn_preview_decline' => 'Cancelar',
    'label_per_page' => 'Por página',
    'list_select' => 'Seleccionar',
    'confirm_exit' => 'Tienes cambios sin guardar.',
    'link_edit_acl' => 'Editar ACL',
    'btn_update_acl' => 'Actualizar ACL',
    'flash_acl_edit_success' => 'ACL actualizada correctamente.',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'Ninguna selección',
    'title_search_results' => 'Resultados de la búsqueda: %query%',
    'search_placeholder' => 'Buscar',
    'no_results_found' => 'No se han encontrado resultados',
    'add_new_entry' => 'añadir nueva entrada',
    'link_actions' => 'Acciones',
    'noscript_warning' => 'Javascript esta deshabilitado en tu navegador. Algunas características no funcionarán correctamente.',
    'message_form_group_empty' => 'No hay campos disponibles.',
    'link_filters' => 'Filtros',
    'stats_view_more' => 'Ver más',
    'title_select_subclass' => 'Selecciona el tipo de elemento',
    'no_subclass_available' => 'No hay disponible ningún tipo de elemento',
    'label_unknown_user' => 'desconocido',
    'read_more' => 'Leer más',
    'read_less' => 'Cerrar',
  ),
  'SonataMediaBundle' => 
  array (
    'default' => 'Por defecto',
    'media' => 'Multimedia',
    'gallery' => 'Galería',
    'sonata_media' => 'Multimedia',
    'no_provider_available' => 'Proveedores no disponibles',
    'title_select_provider' => 'Seleccione un proveedor de multimedia',
    'breadcrumb.link_media_create' => 'Crear',
    'breadcrumb.link_media_list' => 'Multimedias',
    'breadcrumb.link_media_edit' => 'Editar',
    'breadcrumb.link_media_view' => 'Ver',
    'breadcrumb.link_media_delete' => 'Borrar',
    'breadcrumb.link_gallery_create' => 'Crear',
    'breadcrumb.link_media_show' => 'Mostrar',
    'breadcrumb.link_gallery_list' => 'Galerías',
    'breadcrumb.link_gallery_edit' => 'Editar',
    'breadcrumb.link_gallery_delete' => 'Borrar',
    'description.roles_download_strategy' => 'El archivo multimedia se puede descargar solamente por los usuarios con los siguientes roles : %roles%.',
    'description.public_download_strategy' => 'El archivo multimedia se puede descargar por todos.',
    'description.forbidden_download_strategy' => 'El archivo de multimedia no se puede descargar.',
    'description.session_download_strategy' => 'description.session_download_strategy',
    'filter.label_name' => 'Nombre',
    'form.label_category' => 'Categoría',
    'filter.label_provider_reference' => 'Referencia del proveedor',
    'filter.label_enabled' => 'Habilitado',
    'filter.label_context' => 'Contexto',
    'filter.label_provider_name' => 'Proveedor',
    'filter.label_category' => 'Categoría',
    'filter.label_author_name' => 'Nombre de autor',
    'filter.label_width' => 'Ancho',
    'filter.label_height' => 'Alto',
    'filter.label_content_type' => 'Tipo de contenido',
    'form.label_enabled' => 'Habilitado',
    'form.label_media' => 'Multimedia',
    'form.label_position' => 'Posición',
    'form.label_context' => 'Contexto',
    'form.label_name' => 'Nombre',
    'form.label_default_format' => 'Formato',
    'form.label_gallery_has_medias' => 'Multimedias',
    'form.label_author_name' => 'Autor',
    'form.label_cdn_is_flushable' => 'Sincronizar CDN',
    'form.label_description' => 'Descripción',
    'form.label_copyright' => 'Derechos de autor',
    'form.label_binary_content' => 'Archivo',
    'label.size' => 'Tamaño',
    'label.length' => 'Longitud',
    'label.width' => 'Ancho',
    'label.height' => 'Alto',
    'label.content_type' => 'Tipo de contenido',
    'label.copyright' => 'Derechos de autor',
    'label.author_name' => 'Autor',
    'label.cdn' => 'CDN',
    'label.to_be_flushed' => 'Limpiable',
    'label.flushed_at' => 'Limpiado el',
    'label.public_url' => 'URL pública',
    'label.name' => 'Nombre',
    'label.file' => 'Archivo',
    'label.author' => 'Autor',
    'label.enabled' => 'Activado',
    'label.cdn_is_flushable' => 'CDN en purga',
    'label.cdn_flush_identifier' => 'Identificador purga CDN',
    'label.video_reference' => 'Cambiar video',
    'label.description' => 'Descripción',
    'label.select_context' => 'Contexto : ',
    'label.select_provider' => 'Tipo : ',
    'label.protected_download_url' => 'URL protegida',
    'label.protected_download_url_notice' => 'Advertencia',
    'label.edit_with_pixlr' => 'Editar con Pixlr',
    'label.pixlr_warning' => '
                        <span class="label label-warning">Importante</span> usted está por exponer el archivo multimedia en un <strong>servicio externo</strong>. <br />
                        Si esta trabajando sobre materiales confidenciales, por favor no use este servicio.
                    ',
    'label.pixlr_express_editor' => '
                        <strong style="color: white">Editor Express</strong> <br />
                        Interfaz simple para la edición rápida
                    ',
    'label.pixlr_advanced_editor' => '
                        <strong style="color: white">Editor Avanzado</strong> <br />
                        Sólo usuarios experimentados
                    ',
    'link.all_providers' => 'Todos',
    'link.test_protected_url' => 'Link de previsualización',
    'list.label_enabled' => 'Habilitado',
    'list.label_name' => 'Nombre',
    'list.label_author_name' => 'Nombre del autor',
    'list.label_context' => 'Contexto',
    'list.label_default_format' => 'Formato',
    'list.label__action' => 'Acción',
    'list.label_custom' => 'Personalizado',
    'list.label_author' => 'list.label_author',
    'sidemenu.link_edit_media' => 'Editar',
    'sidemenu.link_media_view' => 'Ver',
    'sonata.media.provider.dailymotion' => 'DailyMotion',
    'sonata.media.provider.youtube' => 'YouTube',
    'sonata.media.provider.vimeo' => 'Vimeo',
    'sonata.media.provider.image' => 'Imagen',
    'sonata.media.provider.file' => 'Archivo',
    'title.media_preview' => 'Previsualizar',
    'title.media_thumbnail' => 'Miniatura',
    'title.informations' => 'Información',
    'title.formats' => 'Formatos',
    'link_media' => 'Asocia el objeto a un nuevo media',
    'no_linked_media' => 'Ningún media asociado al objeto',
    'widget_label_type' => 'Tipo',
    'widget_label_context' => 'Contexto',
    'widget_headline_information' => 'Información',
    'widget_label_unlink' => 'Eliminar',
    'widget_label_binary_content' => 'Fichero',
    'sonata_media_gallery_index' => 'Galería',
    'sonata_template_box_media_gallery_block' => 'Este es el bloque media para la galería. Puedes sobreescribirlo cuando gustes.',
    'list.label_description' => 'Descripción',
    'list.label_size' => 'Tamaño',
    'sonata.media.block.media' => 'sonata.media.block.media',
    'sonata.media.block.feature_media' => 'sonata.media.block.feature_media',
    'sonata.media.block.gallery' => 'sonata.media.block.gallery',
    'form.label_title' => 'form.label_title',
    'form.label_content' => 'form.label_content',
    'form.label_orientation' => 'form.label_orientation',
    'form.label_gallery' => 'form.label_gallery',
    'form.label_format' => 'form.label_format',
    'form.label_pause_time' => 'form.label_pause_time',
    'form.label_start_paused' => 'form.label_start_paused',
    'form.label_wrap' => 'form.label_wrap',
    'form.label_orientation_left' => 'form.label_orientation_left',
    'form.label_orientation_right' => 'form.label_orientation_right',
    'sonata.media.block.gallery_list' => 'sonata.media.block.gallery_list',
    'label_gallery_enabled' => 'label_gallery_enabled',
    'label_gallery_disabled' => 'label_gallery_disabled',
    'no_galleries_found' => 'no_galleries_found',
    'view_all_galleries' => 'view_all_galleries',
    'form.label_mode' => 'form.label_mode',
    'form.label_number' => 'form.label_number',
    'form.label_order' => 'form.label_order',
    'form.label_order_name' => 'form.label_order_name',
    'form.label_order_created_at' => 'form.label_order_created_at',
    'form.label_order_updated_at' => 'form.label_order_updated_at',
    'form.label_sort' => 'form.label_sort',
    'form.label_sort_asc' => 'form.label_sort_asc',
    'form.label_sort_desc' => 'form.label_sort_desc',
    'form.label_mode_public' => 'form.label_mode_public',
    'form.label_mode_admin' => 'form.label_mode_admin',
    'form.label_class' => 'form.label_class',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado.',
    'group.flash.created' => 'El grupo ha sido creado.',
    'group.flash.deleted' => 'El grupo ha sido borrado.',
    'security.login.username' => 'Nombre de usuario',
    'security.login.password' => 'Contraseña',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado.',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'registration.check_email' => 'Se ha enviado un email a %email%. Contiene un enlace de activación que debes presionar para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente.',
    'registration.email.subject' => 'Bienvenido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completar la validación de tu cuenta - por favor visita %confirmationUrl%

Este enlace sólo puede utilizarse una vez para validar tu cuenta.

Atentamente,
el Equipo.
',
    'resetting.check_email' => 'Un email ha sido enviado. Contiene un enlace de activación que debes presionar para restablecer tu contraseña.
 Nota: Solo se puede solicitar una nueva contraseña en periodos de %tokenLifetime% horas.

Si no recibes el correo electrónico, comprueba la carpeta de correo no deseado o inténtalo de nuevo.
',
    'resetting.request.username' => 'Nombre de usuario o correo electrónico',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'resetting.email.subject' => 'Restablecer Contraseña',
    'resetting.email.message' => 'Hola %username%!

Para restablecer tu contraseña - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo',
    'form.username' => 'Nombre de usuario',
    'form.email' => 'Email',
    'form.current_password' => 'Contraseña actual',
    'form.password' => 'Contraseña',
    'form.password_confirmation' => 'Repita la contraseña',
    'form.new_password' => 'Nueva contraseña',
    'form.new_password_confirmation' => 'Repita la contraseña',
  ),
  'SonataClassificationBundle' => 
  array (
    'sonata_classification' => 'Clasificación',
    'label_categories' => 'Categorías',
    'label_tags' => 'Etiquetas',
    'label_collections' => 'Colecciones',
    'breadcrumb.link_collection_list' => 'Colecciones',
    'breadcrumb.link_category_list' => 'Categoría',
    'list.label_name' => 'Nombre',
    'list.label_slug' => 'Slug',
    'list.label_description' => 'Descripción',
    'list.label_enabled' => 'Activo',
    'filter.label_name' => 'Nombre',
    'filter.label_enabled' => 'Activo',
    'form.label_name' => 'Nombre',
    'form.label_description' => 'Descripción',
    'form.label_enabled' => 'Activo',
    'form.label_slug' => 'Slug',
    'breadcrumb.link_tag_list' => 'Etiqueta',
    'form.label_created_at' => 'Creado el',
    'form.label_updated_at' => 'Modificado el',
    'list.label_created_at' => 'Creado el',
    'list.label_updated_at' => 'Modificado el',
    'form.label_position' => 'Posición',
    'form.label_parent' => 'Padre',
    'list.label_position' => 'Posición',
    'list.label_parent' => 'Padre',
    'filter.label_parent' => 'Padre',
    'form.label_media' => 'Media',
    'breadcrumb.link_context_list' => 'Contexto',
    'list.label_id' => 'ID',
    'filter.label_id' => 'ID',
    'label_contexts' => 'Contexto',
    'form.label_id' => 'ID',
    'filter.label_context' => 'Contexto',
    'list.label_context' => 'Contexto',
    'form.label_context' => 'Contexto',
    'tree_catalog_title' => 'Categorías',
    'element.tree_site_label' => 'Categorías',
    'classification.list_mode' => 'Lista',
    'classification.tree_mode' => 'classification.tree_mode',
    'breadcrumb.link_category_tree' => 'breadcrumb.link_category_tree',
    'active' => 'active',
    'disabled' => 'disabled',
    'form.label_category' => 'form.label_category',
    'form.label_collection' => 'form.label_collection',
    'form.label_tag' => 'form.label_tag',
    'form.label_title' => 'form.label_title',
    'no_collections_found' => 'no_collections_found',
    'no_categories_found' => 'no_categories_found',
    'no_tags_found' => 'no_tags_found',
  ),
));


return $catalogue;
