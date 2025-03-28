@extends('layouts.app')

@section('content')
<div class="container mt-5">  
  <div class="col-12">
    <p class="font-weight-bold text-lighter text-uppercase">Politica de Privacidad</p>
    <div class="card border shadow-none">
      <div class="card-body p-md-5 text-justify mx-md-3">
        @if($page && $page->content)
        {!! $page->content !!}
        @else
        <div class="terms">
          <h5 class="font-weight-bold" id="1">1. ¿Qué información recopilamos?</h5>
          <ul class=" pl-4">
            <li>
              Información básica de la cuenta: Si se registra en este servidor, es posible que se le solicite un nombre de usuario, una dirección de correo electrónico y una contraseña. También puede ingresar información adicional de perfil, como un nombre para mostrar y una biografía, y subir una foto de perfil y una imagen de encabezado. El nombre de usuario, el nombre para mostrar, la biografía y la imagen de avatar siempre son públicos.
            </li>
            <li>
              Publicaciones, seguidores y otra información pública: La lista de personas que sigues es pública, al igual que la de tus seguidores. Al enviar un mensaje, se almacenan la fecha y la hora, así como la aplicación desde la que lo enviaste. Los mensajes pueden contener archivos adjuntos, como imágenes y vídeos. Las publicaciones, tanto públicas como privadas, son públicas. Al destacar una publicación en tu perfil, esta información también es pública. Tus publicaciones se envían a tus seguidores; en algunos casos, esto significa que se envían a servidores diferentes y se almacenan copias allí. Al eliminar publicaciones, también se envía a tus seguidores. Rebloguear o añadir a favoritos otra publicación siempre es público.
            </li>
            <li>
              Publicaciones directas y solo para seguidores: Todas las publicaciones se almacenan y procesan en el servidor. Las publicaciones solo para seguidores se envían a tus seguidores y a los usuarios mencionados, mientras que las publicaciones directas se envían solo a los usuarios mencionados. En algunos casos, esto implica que se envían a servidores diferentes y se almacenan copias allí. Nos esforzamos por limitar el acceso a estas publicaciones solo a personas autorizadas, pero otros servidores podrían no hacerlo. Por lo tanto, es importante revisar los servidores a los que pertenecen tus seguidores. Puedes activar o desactivar manualmente la opción de aprobar o rechazar nuevos seguidores en la configuración. Ten en cuenta que los operadores del servidor y cualquier servidor receptor pueden ver estos mensajes, y que los destinatarios pueden capturarlos, copiarlos o compartirlos de cualquier otra forma. No compartas información peligrosa a través de Pixelfed.
            </li>
            <li>
              IP y otros metadatos: Al iniciar sesión, registramos la dirección IP desde la que inicia sesión, así como el nombre de su navegador. Todas las sesiones iniciadas están disponibles para su revisión y revocación en la configuración. La última dirección IP utilizada se almacena hasta 12 meses. También podemos conservar registros del servidor que incluyen la dirección IP de cada solicitud a nuestro servidor.
            </li>
          </ul>
          <h5 class="font-weight-bold mt-5" id="2">2. ¿Para qué utilizamos tu información?</h5>

          <p class="">Cualquier información que recopilemos de usted podrá utilizarse de las siguientes maneras:</p>
          <ul class=" pl-4">
            <li>
              Para proporcionar la funcionalidad principal de Pixelfed. Solo puedes interactuar con el contenido de otras personas y publicar el tuyo cuando hayas iniciado sesión. Por ejemplo, puedes seguir a otras personas para ver sus publicaciones combinadas en tu cronología personalizada.
            </li>
            <li>
              Para ayudar a la moderación de la comunidad, por ejemplo, comparando su dirección IP con otras conocidas para determinar la evasión de prohibiciones u otras violaciones.
            </li>
            <li>
              La dirección de correo electrónico que proporcione podrá utilizarse para enviarle información, notificaciones sobre otras personas que interactúan con su contenido o le envían mensajes, y para responder consultas y/u otras solicitudes o preguntas.
            </li>
          </ul>

          <h5 class="font-weight-bold mt-5" id="3">3. ¿Cómo protegemos su información?</h5>
          <p class="">Implementamos diversas medidas de seguridad para proteger su información personal cuando la ingresa, la envía o accede a ella. Entre otras cosas, su sesión de navegador, así como el tráfico entre sus aplicaciones y la API, están protegidos con SSL, y su contraseña se cifra mediante un algoritmo unidireccional robusto. Puede habilitar la autenticación de dos factores para proteger aún más el acceso a su cuenta.</p>


          <h5 class="font-weight-bold mt-5" id="4">4. ¿Cuál es nuestra política de retención de datos?</h5>
          <p class="">Haremos un esfuerzo de buena fe para:</p>
          <ul class=" pl-4">
            <li>
              Conservar los registros del servidor que contengan la dirección IP de todas las solicitudes a este servidor, en la medida en que se conserven dichos registros, no más de 90 días.
            </li>
            <li>
              Conservar las direcciones IP asociadas a los usuarios registrados no más de 12 meses.
            </li>
            <li>
              Puede solicitar y descargar un archivo de su contenido, incluidas sus publicaciones, archivos multimedia adjuntos, foto de perfil e imagen de encabezado.
            </li>
          </ul>
          <p class="">Puede eliminar su cuenta irreversiblemente en cualquier momento.</p>

          <h5 class="font-weight-bold mt-5" id="5">5. Do we use cookies?</h5>
          <p class="">Sí. Las cookies son pequeños archivos que un sitio web o su proveedor de servicios transfiere al disco duro de su ordenador a través de su navegador web (si lo permite). Estas cookies permiten que el sitio web reconozca su navegador y, si tiene una cuenta registrada, la asocie con ella.
          </p>
          <p class="">Utilizamos cookies para comprender y guardar sus preferencias para futuras visitas.</p>

          <h5 class="font-weight-bold mt-5" id="6">6. ¿Revelamos alguna información a terceros?</h5>
          <p class="">No vendemos, intercambiamos ni transferimos de ningún modo su información personal a terceros. Esto no incluye a terceros de confianza que nos ayudan a operar nuestro sitio, dirigir nuestro negocio o prestarle servicio, siempre que se comprometan a mantener la confidencialidad de esta información. También podemos divulgar su información cuando consideremos que es necesario para cumplir con la ley, aplicar las políticas de nuestro sitio o proteger nuestros derechos, propiedad o seguridad, o los de terceros.</p>
          <p class="">Tu contenido público puede ser descargado por otros servidores de la red. Tus publicaciones públicas y exclusivas para seguidores se envían a los servidores donde residen tus seguidores, y los mensajes directos se envían a los servidores de los destinatarios, siempre que estos residan en un servidor diferente.</p>
          <p class="">Al autorizar a una aplicación a usar tu cuenta, según el alcance de los permisos que otorgues, esta podrá acceder a la información pública de tu perfil, tu lista de seguidores, tus listas, todas tus publicaciones y tus favoritos. Las aplicaciones nunca podrán acceder a tu correo electrónico ni a tu contraseña.</p>

          <h5 class="font-weight-bold mt-5" id="7">7. Uso del sitio por las infancias</h5>

          <p class="">Si este servidor se encuentra en la UE o el EEE: Nuestro sitio, productos y servicios están dirigidos a personas mayores de 16 años. Si es menor de 16 años, de acuerdo con el RGPD (Reglamento General de Protección de Datos), no utilice este sitio.</p>

          <p class="">Si este servidor está en EE. UU.: Nuestro sitio, productos y servicios están dirigidos a personas mayores de 13 años. Si es menor de 13 años, según lo exige la Ley de Protección de la Privacidad Infantil en Internet (COPPA), no utilice este sitio.</p>

          <p class="">Los requisitos legales pueden ser diferentes si este servidor está en otra jurisdicción.</p>

          <h5 class="font-weight-bold mt-5" id="8">8. Cambios en nuestra Política de Privacidad</h5>
          <p class="">Si decidimos cambiar nuestra política de privacidad, publicaremos esos cambios en esta página.</p>

          <p class="">Este documento está protegido por derechos de autor (CC-BY-SA). Última actualización: 12 de junio de 2018.</p>

          <p class="">Originalmente adapatado de la politica de privacidad de <a href="https://mastodon.social/terms">Mastodon</a>.</p>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
@push('meta')
<meta property="og:description" content="Privacy Policy">
@endpush
