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
              IPs and other metadata: When you log in, we record the IP address you log in from, as well as the name of your browser application. All the logged in sessions are available for your review and revocation in the settings. The latest IP address used is stored for up to 12 months. We also may retain server logs which include the IP address of every request to our server.
            </li>
          </ul>
          <h5 class="font-weight-bold mt-5" id="2">2. What do we use your information for?</h5>

          <p class="">Any of the information we collect from you may be used in the following ways:</p>
          <ul class=" pl-4">
            <li>
              To provide the core functionality of Pixelfed. You can only interact with other people’s content and post your own content when you are logged in. For example, you may follow other people to view their combined posts in your own personalized home timeline.
            </li>
            <li>
              To aid moderation of the community, for example comparing your IP address with other known ones to determine ban evasion or other violations.
            </li>
            <li>
              The email address you provide may be used to send you information, notifications about other people interacting with your content or sending you messages, and to respond to inquiries, and/or other requests or questions.
            </li>
          </ul>

          <h5 class="font-weight-bold mt-5" id="3">3. How do we protect your information?</h5>
          <p class="">We implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information. Among other things, your browser session, as well as the traffic between your applications and the API, are secured with SSL, and your password is hashed using a strong one-way algorithm. You may enable two-factor authentication to further secure access to your account.</p>


          <h5 class="font-weight-bold mt-5" id="4">4. What is our data retention policy?</h5>
          <p class="">We will make a good faith effort to:</p>
          <ul class=" pl-4">
            <li>
              Retain server logs containing the IP address of all requests to this server, in so far as such logs are kept, no more than 90 days.
            </li>
            <li>
              Retain the IP addresses associated with registered users no more than 12 months.
            </li>
            <li>
              You can request and download an archive of your content, including your posts, media attachments, profile picture, and header image.
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
