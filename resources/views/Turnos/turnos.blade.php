
@extends('layouts.app')

@section('content')
    

<body>


    <nav class="navbar r">
      
   
            <h4 class="navbar-brand" href="#">Medidesk</h4>
          
            <ul class="nav justify-content-center">
                      
                <li class="nav-item">
                      <div class="fecha">
                	<p id="diaSemana" class="diaSemana">Martes</p>
				<p id="dia" class="dia">27</p>
				<p>de </p>
				<p id="mes" class="mes">Octubre</p>
				<p>del </p>
				<p id="year" class="year">2015</p>
                    </div>
            </li>
            <li class="nav-item">
                <div class="reloj">
                    <p id="horas" class="horas">11</p>
                    <p>:</p>
                    <p id="minutos" class="minutos">48</p>
                    <p>:</p>
          
                       <p id="segundos" class="segundos">12</p>  
                    <p id="ampm" class="ampm">AM</p>
                       
               
                </div>
            </li>
 
              </ul>
       
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <h5 class="nav-link" href="#">Teléfonos</h5>
            </li>
            <li class="nav-item">
              <h5 class="nav-link" href="#">054-123456</h5>
            </li>
            <li class="nav-item">
                <h5 class="nav-link" href="#">054-987632</h5>
              </li>
          </ul>


      
      </nav>

      

      <div class="row m">
        <div class="col-sm-6">
         
          <div id="carouselExampleSlidesOnly" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="/img/turnos/img1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/img/turnos/img2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/img/turnos/img3.jpg" alt="Third slide">
              </div>
            </div>
          </div>



        </div>
        <div class="col-sm-6">
            <table class="table table-dark text-center">
                <thead>
                  <tr>
                    <th scope="col">DNI</th>
                    <th scope="col">ESPECIALIDAD</th>
                 
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-success">
                    <th scope="row">{{$t1}}</th>
                    <td>Audiometria</td>
                  
                  </tr>
                  <tr class="bg-success"> 
                    <th scope="row">{{$t2}}</th>
                    <td>Laboratorio</td>
                 
                  </tr>
                  <tr class="bg-success">
                    <th scope="row">{{$t3}}</th>
                    <td>Oftalmología</td>
                  
                  </tr>
                  <tr class="bg-success">
                    <th scope="row">{{$t4}}</th>
                    <td>Psicología</td>
                 
                  </tr>
                  <tr class="bg-success">
                    <th scope="row">{{$t5}}</th>
                    <td>Radiología</td>
                 
                  </tr>
                  <tr class="bg-success">
                    <th scope="row">{{$t6}}</th>
                    <td>Espirometría</td>
                
                  </tr>
                  <tr class="bg-success">
                    <th scope="row">{{$t7}}</th>
                    <td>Odontología</td>
              
                  </tr>
             
                
                </tbody>
              </table>
        </div>
      </div>
<script>
    (function(){
	var actualizarHora = function(){
		// Obtenemos la fecha actual, incluyendo las horas, minutos, segundos, dia de la semana, dia del mes, mes y año;
		var fecha = new Date(),
			horas = fecha.getHours(),
			ampm,
			minutos = fecha.getMinutes(),
			segundos = fecha.getSeconds(),
			diaSemana = fecha.getDay(),
			dia = fecha.getDate(),
			mes = fecha.getMonth(),
			year = fecha.getFullYear();
 
		// Accedemos a los elementos del DOM para agregar mas adelante sus correspondientes valores
		var pHoras = document.getElementById('horas'),
			pAMPM = document.getElementById('ampm'),
			pMinutos = document.getElementById('minutos'),
			pSegundos = document.getElementById('segundos'),
			pDiaSemana = document.getElementById('diaSemana'),
			pDia = document.getElementById('dia'),
			pMes = document.getElementById('mes'),
			pYear = document.getElementById('year');

		
		// Obtenemos el dia se la semana y lo mostramos
		var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
		pDiaSemana.textContent = semana[diaSemana];

		// Obtenemos el dia del mes
		pDia.textContent = dia;

		// Obtenemos el Mes y año y lo mostramos
		var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
		pMes.textContent = meses[mes];
		pYear.textContent = year;

		// Cambiamos las hora de 24 a 12 horas y establecemos si es AM o PM

		if (horas >= 12) {
			horas = horas - 12;
			ampm = 'PM';
		} else {
			ampm = 'AM';
		}

		// Detectamos cuando sean las 0 AM y transformamos a 12 AM
		if (horas == 0 ){
			horas = 12;
		}

		// Si queremos mostrar un cero antes de las horas ejecutamos este condicional
		// if (horas < 10){horas = '0' + horas;}
		pHoras.textContent = horas;
		pAMPM.textContent = ampm;

		// Minutos y Segundos
		if (minutos < 10){ minutos = "0" + minutos; }
		if (segundos < 10){ segundos = "0" + segundos; }

		pMinutos.textContent = minutos;
		pSegundos.textContent = segundos;
	};

	actualizarHora();
	var intervalo = setInterval(actualizarHora, 1000);
}())



</script>
<style>
.r{
    background-color: #007d71;
    color: white;
}
   .col-sm-6{
       padding: 0;
   }
   table{
       font-size: 28px;
   }
   .fecha {

	text-align: center;
	font-size:1.5em;

	/*margin-bottom: 5px;*/
	background: rgba(0,0,0,.5);
	padding: 10px;
	width: 100%;
}
p{
    display: inline-block;
	line-height: 1em;
}

.reloj {

	width: 100%;
	padding: 10px;
	font-size: 1.5em;
	text-align: center;
	background: rgba(0,0,0,.5);
}

img{

  width: 100%;
  height: 560px;
}





</style>
   <!-- Scripts -->
   <script src="{{ asset('js/main.js') }}" defer></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
   <script src="{{ asset('js/popper.min.js') }}"></script>
   <script src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
   <script type="text/javascript">
       $('#sampleTable').DataTable();
   </script>
  

    </body>




@endsection