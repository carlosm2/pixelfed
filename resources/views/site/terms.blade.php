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
					   <li>The materials on Pixelfed's website are provided on an 'as is' basis. Pixelfed makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
					   <li>Further, Pixelfed does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
					</ol>
					<h5 class="font-weight-bold mt-5">4. Limitations</h5>
					<p class="">In no event shall Pixelfed or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on Pixelfed's website, even if Pixelfed or a Pixelfed authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
					<h5 class="font-weight-bold mt-5">5. Accuracy of materials</h5>
					<p class="">The materials appearing on Pixelfed's website could include technical, typographical, or photographic errors. Pixelfed does not warrant that any of the materials on its website are accurate, complete or current. Pixelfed may make changes to the materials contained on its website at any time without notice. However Pixelfed does not make any commitment to update the materials.</p>
					<h5 class="font-weight-bold mt-5">6. Links</h5>
					<p class="">Pixelfed has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Pixelfed of the site. Use of any such linked website is at the user's own risk.</p>
					<h5 class="font-weight-bold mt-5">7. Modifications</h5>
					<p class="">Pixelfed may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>
					<h5 class="font-weight-bold mt-5">8. Governing Law</h5>
					<p class="">These terms and conditions are governed by and construed in accordance with the laws of Canada and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
					<h5 class="font-weight-bold mt-5">9. Community Guidelines</h5>
					<p class="">You can view our Community Guidelines <a href="{{route('help.community-guidelines')}}">here</a>.</p>
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
