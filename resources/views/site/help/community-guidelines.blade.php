@extends('site.help.partial.template', ['breadcrumb'=>'Normas de la comunidad'])

@section('section')

  <div class="title">
    <h3 class="font-weight-bold">Normas de la comunidad</h3>
  </div>
  <hr>
  @if($page)
  <div>
    {!!$page->content!!}
    <hr>
    <p class="">Este documento fue actualizado {{$page->created_at->format('M d, Y')}}.</p>
  </div>
  @else
  <div>
    <p class="lead mb-5">Las siguientes pautas no constituyen un documento legal y la interpretación final queda a cargo de la administración {{config('pixelfed.domain.app')}}; they are here to provide you with an insight into our content moderation policies:</p>
    <div class="py-4">
      <h5 class="pb-3">Los siguientes tipos de contenido se eliminarán de la cronología pública:</h5>
      <ul>
        <li class="mb-3">Publicidad excesiva</li>
        <li class="mb-3">Bots de noticias no curados que publican desde fuentes de noticias de terceros</li>
        <li class="mb-3">Desnudez sin etiquetar, pornografía y contenido sexualmente explícito, incluidas representaciones artísticas</li>
        <li class="mb-3">Gore sin etiquetar y violencia extremadamente gráfica, incluidas representaciones artísticas</li>
      </ul>
    </div>
    <hr>
    <div class="py-4">
      <h5 class="pb-3">Los siguientes tipos de contenido se eliminarán de la cronología pública y podrán resultar en la suspensión de la cuenta y la revocación del acceso al servicio:</h5>
      <ul>
        <li class="mb-3">Racismo o apología del racismo</li>
        <li class="mb-3">Sexismo o apología del sexismo</li>
        <li class="mb-3">Discriminación contra minorías de género y sexuales, o apología de la misma</li>
        <li class="mb-3">Nacionalismo xenófobo y/o violento</li>
      </ul>
    </div>
    <hr>
    <div class="py-4">
      <h5 class="pb-3">Los siguientes tipos de contenidos están explícitamente prohibidos y darán lugar a la revocación del acceso al servicio:</h5>
      <ul>
        <li class="mb-3">Representaciones sexuales de niños</li>
        <li class="mb-3">Contenido ilegal en Canadá, Alemania y/o Francia, como la negación del Holocausto o el simbolismo nazi.</li>
        <li class="mb-3">Conducta que promueva la ideología del nacionalsocialismo</li>
      </ul>
    </div>
    <hr>
    <div class="py-4">
      <h5 class="pb-3">Cualquier conducta destinada a acosar o hostigar a otros usuarios, impedir que utilicen el servicio, degradar su rendimiento, acosar a otros usuarios o incitarlos a realizar cualquiera de las acciones mencionadas, también queda prohibida y estará sujeta a sanciones que pueden incluir la revocación del acceso al servicio. Esto incluye, entre otras, las siguientes conductas:</h5>
      <ul>
        <li class="mb-3">Seguir participando en una conversación con un usuario que específicamente solicitó que dicha interacción cese y desista puede considerarse acoso, independientemente de las herramientas de privacidad específicas de la plataforma empleadas.</li>
        <li class="mb-3">La agregación, publicación y/o difusión de datos demográficos, personales o privados de una persona sin permiso expreso (llamado informalmente doxing o dropping dox) puede considerarse acoso.</li>
        <li class="mb-3">Incitar a los usuarios a interactuar con otro usuario en una interacción o discusión continua después de que un usuario haya solicitado que dicha interacción con ese usuario cese y desista (informalmente llamado brigading o dogpiling) puede considerarse acoso.</li>
      </ul>
    </div>
    <hr>
    <p>No obstante estas disposiciones, la administración del servicio se reserva el derecho de revocar los permisos de acceso de cualquier usuario, en cualquier momento, por cualquier motivo, excepto según lo limitado por la ley.</p>
    <hr>
    <p class="">Este documento se actualizó por última vez el 26 de junio de 2019.</p>
    <p class="">Adaptado originalmente del código de Conducta de <a href="https://mastodon.social/about/more">Mastodon</a>.</p>
</div>
  @endif
@endsection
