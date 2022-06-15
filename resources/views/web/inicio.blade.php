@extends('app')


@section('content')
<section id="somos-proya">
    <section>
		<div class="slider-wrapper theme-mi-slider">
			<div id="slider" class="nivoSlider">     
				<img src="{{asset('img/project/1.png')}}" alt="" >    
				<img src="{{asset('img/project/2.png')}}" alt="">    
				<img src="{{asset('img/project/3.png')}}" alt="">     
			</div>
		</div>
	</section>
    <div class="container">
		<div class="img-container"></div>
		<div class="texto">
			<h2>¿Qui&eacute;nes somos? </h2>
			<p>Nosotros somos un pequeño grupo de estudiantes programadores a nivel bachillerato unidos por la materia.  </p>
			<h2>Descripci&oacute;n </h2>
			<p>Tras hacer un recorrido y pensar en nuestro futuro, supimos de lo complicado y lo difícil  que puede ser encontrar y elegir una carrera en la que te dedicarás a un nivel profesional, buscar la universidad que la imparta e incluso  obtener información de la misma. <br><br> El objetivo de nuestra página es ayudar a que los estudiantes encuentren su carrera e universidad ideal. Es por eso que aquí encontrarás el catálogo de universidades en los estados de Yucatán y Quintana Roo, las ofertas académicas que tienen, su descriptiva información y por si aún no tienes idea de lo que quieres estudiar, tenemos un test vocacional que te ayudará a encontrar una especialidad a tu favor en contraste a tus habilidades y destrezas. </p>
			
		</div>
	</div>
</section>

<section id="nuestros-programas">
	<div class="container">
		<h2>Universidades</h2>
		<div class="programas">
			<div class="carta">
				<h3>Q.Roo</h3>
				<p>Aqu&iacute; encontrarás las universidades del estado.</p>
				<a href="../unis/unis.html"><button>+ Info</button></a>
			</div>
			<div class="carta">
				<h3>Yucat&aacute;n</h3>
				<p>Aqu&iacute; encontrarás las universidades del estado.</p>
				<a href="../unis/unis.html"><button>+ Info</button></a>
			</div>
		</div>
	</div>
</section>

<section id="caracteristicas">
	<div class="container"><center>
		<h2>¿No sabes que estudiar?</h2>
		<p>¡Prueba a realizar un test!</p><br>

	<a href="../Test/Test.html"><button>Clik aquí</button></a>
     </center></div>
</section>


<footer>
	
	<div class="container">
		<div class="center"><br>
		<img src="../media/logo.png"></div>
		<div>
		<h3>Con&oacute;cenos</h3>
		<a href="#somos-proya"><p>Nosotros</p></a>
		<a href="#nuestros-programas"><p>Estados</p></a>
	    </div>
	</div>
</footer>


@endsection