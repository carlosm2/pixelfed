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
          <p class="">You may irreversibly delete your account at any time.</p>

          <h5 class="font-weight-bold mt-5" id="5">5. Do we use cookies?</h5>
          <p class="">Yes. Cookies are small files that a site or its service provider transfers to your computer’s hard drive through your Web browser (if you allow). These cookies enable the site to recognize your browser and, if you have a registered account, associate it with your registered account.
          </p>
          <p class="">We use cookies to understand and save your preferences for future visits.</p>

          <h5 class="font-weight-bold mt-5" id="6">6. Do we disclose any information to outside parties?</h5>
          <p class="">We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our site, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety.</p>
          <p class="">Your public content may be downloaded by other servers in the network. Your public and followers-only posts are delivered to the servers where your followers reside, and direct messages are delivered to the servers of the recipients, in so far as those followers or recipients reside on a different server than this.</p>
          <p class="">When you authorize an application to use your account, depending on the scope of permissions you approve, it may access your public profile information, your following list, your followers, your lists, all your posts, and your favourites. Applications can never access your e-mail address or password.</p>

          <h5 class="font-weight-bold mt-5" id="7">7. Site usage by children</h5>

          <p class="">If this server is in the EU or the EEA: Our site, products and services are all directed to people who are at least 16 years old. If you are under the age of 16, per the requirements of the GDPR (General Data Protection Regulation) do not use this site.</p>

          <p class="">If this server is in the USA: Our site, products and services are all directed to people who are at least 13 years old. If you are under the age of 13, per the requirements of COPPA (Children's Online Privacy Protection Act) do not use this site.</p>

          <p class="">Law requirements can be different if this server is in another jurisdiction.</p>

          <h5 class="font-weight-bold mt-5" id="8">8. Changes to our Privacy Policy</h5>
          <p class="">If we decide to change our privacy policy, we will post those changes on this page.</p>

          <p class="">This document is CC-BY-SA. It was last updated Jun 12, 2018.</p>

          <p class="">Originally adapted from the <a href="https://mastodon.social/terms">Mastodon</a> privacy policy.</p>
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
