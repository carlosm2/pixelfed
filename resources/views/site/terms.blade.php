@extends('layouts.app')

@section('content')
<div class="container mt-5">  
	<div class="col-12">
		<p class="font-weight-bold text-lighter text-uppercase">Condiciones de uso</p>
		<div class="card border shadow-none">
			<div class="card-body p-md-5 text-justify mx-md-3">
				@if($page && $page->content)
				{!! $page->content !!}
				@else
				<div class="terms">
					<h5 class="font-weight-bold">1. Condiciones</h5>
					<p class="">Accediendo al sitio web en <a href="{{config('app.url')}}">{{config('app.url')}}</a>, usted acepta regirse por estos términos de servicio y todas las leyes y regulaciones aplicables, y acepta ser responsable del cumplimiento de las leyes locales aplicables. Si no está de acuerdo con alguno de estos términos, se le prohíbe usar o acceder a este sitio. Los materiales contenidos en este sitio web están protegidos por las leyes de derechos de autor y marcas registradas aplicables..</p>
					<h5 class="font-weight-bold mt-5">2. Licencia de uso</h5>
					<ol class="" type="a">
					   <li>Se concede permiso para descargar temporalmente una copia de los materiales (información o software) del sitio web de Pixelfed, únicamente para su visualización transitoria personal y no comercial. Esta licencia constituye una concesión de licencia, no una transferencia de titularidad, y bajo esta licencia no podrá:
					   <ol class="" type="i">
					       <li>modificar o copiar los materiales;</li>
					       <li>utilizar los materiales para cualquier propósito comercial o para cualquier exhibición pública (comercial o no comercial);</li>
					       <li>intentar descompilar o aplicar ingeniería inversa a cualquier software contenido en el sitio web de Pixelfed.;</li>
					       <li>eliminar cualquier derecho de autor u otras notaciones de propiedad de los materiales; o</li>
					       <li>transferir los materiales a otra persona o "duplicar" los materiales en cualquier otro servidor.</li>
					   </ol>
					    </li>
					   <li>Esta licencia se rescindirá automáticamente si usted infringe cualquiera de estas restricciones y Pixelfed podrá rescindirla en cualquier momento. Al finalizar la visualización de estos materiales o al rescindirse esta licencia, deberá destruir cualquier material descargado que tenga en su poder, ya sea en formato electrónico o impreso.</li>
					</ol>
					<h5 class="font-weight-bold mt-5">3. Descargo de responsabilidad</h5>
					<ol class="" type="a">
					   <li>Los materiales del sitio web de Pixelfed se proporcionan "tal cual". Pixelfed no ofrece garantías, expresas ni implícitas, y por la presente renuncia y niega cualquier otra garantía, incluyendo, entre otras, las garantías o condiciones implícitas de comerciabilidad, idoneidad para un fin determinado o no infracción de la propiedad intelectual u otras violaciones de derechos.</li>
					   <li>Además, Pixelfed no garantiza ni hace ninguna declaración sobre la precisión, los resultados probables o la confiabilidad del uso de los materiales en su sitio web o de otro modo relacionados con dichos materiales o en cualquier sitio vinculado a este sitio.</li>
					</ol>
					<h5 class="font-weight-bold mt-5">4. Limitaciones</h5>
					<p class="">En ningún caso Pixelfed ni sus proveedores serán responsables de ningún daño (incluidos, entre otros, los daños por pérdida de datos o beneficios, o por interrupción del negocio) que surja del uso o la imposibilidad de usar los materiales del sitio web de Pixelfed, incluso si Pixelfed o un representante autorizado de Pixelfed ha sido notificado oralmente o por escrito de la posibilidad de dicho daño. Dado que algunas jurisdicciones no permiten limitaciones a las garantías implícitas ni limitaciones de responsabilidad por daños consecuentes o incidentales, es posible que estas limitaciones no le sean aplicables.</p>
					<h5 class="font-weight-bold mt-5">5. Precisión de los materiales</h5>
					<p class="">Los materiales que aparecen en el sitio web de Pixelfed podrían contener errores técnicos, tipográficos o fotográficos. Pixelfed no garantiza la exactitud, integridad ni actualidad de los materiales de su sitio web. Pixelfed podrá modificar los materiales de su sitio web en cualquier momento sin previo aviso. Sin embargo, Pixelfed no se compromete a actualizarlos.</p>
					<h5 class="font-weight-bold mt-5">6. Enlaces</h5>
					<p class="">Pixelfed no ha revisado todos los sitios enlazados a su sitio web y no se responsabiliza del contenido de ninguno de ellos. La inclusión de un enlace no implica la aprobación del sitio por parte de Pixelfed. El uso de dichos sitios web enlazados es bajo la propia responsabilidad del usuario.</p>
					<h5 class="font-weight-bold mt-5">7. Modificaciones</h5>
					<p class="">Pixelfed podrá modificar estas condiciones de servicio de su sitio web en cualquier momento sin previo aviso. Al utilizar este sitio web, usted acepta la versión vigente de estas condiciones de servicio.</p>
					<h5 class="font-weight-bold mt-5">8. Ley aplicable</h5>
					<p class="">Estos términos y condiciones se rigen e interpretan de conformidad con las leyes de Canadá y usted se somete irrevocablemente a la jurisdicción exclusiva de los tribunales de ese estado o ubicación.</p>
					<h5 class="font-weight-bold mt-5">9. Normas de la comunidad</h5>
					<p class="">Puedes ver nuestras Normas de la comunidad<a href="{{route('help.community-guidelines')}}">aqui</a>.</p>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection

@push('meta')
<meta property="og:description" content="Terms of Use">
@endpush
