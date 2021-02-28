@extends('layouts.layout')
@section('contenido')
    <div class="container-fluid  ">
      
      
      
        <div class="row blue-row">
            <div class="col izq_col">
                <h1 class=" pt-4 text-white  text-left principal-text">Capacita a tu personal de manera virtual con Seven
                    Academy.</h1>
                <p class="text-left">Conoce a través de nuestros reportes semanales el avance de cada uno de tus colaboradores
                    en los distintos cursos.</p>
                <button class="btn">Mas información</button>
            </div>
            <div class="col-7 der_col py-3">
                <admin-component></admin-component>
                <p class="text-center avances-curso">Porcentaje de avance en el curso de Front Desk operativo</p>
            </div>
        </div>

        <div class="row mb-5 second-row">
          
            <div class="col-7 py-3">
              <column-chart> </column-chart>
                <p class="text-center resultados-curso">Resultados de evaluaciones aprobados por lección</p>
            </div>
            <div class="col izq_col mr-2 text-right">
                <h1 class=" pt-4">Conocerás a través de nuestros reportes el resultado obtenido y comparativo en cada una de las evaluaciones realizadas por tus colaboradores.</h1>
               
               
               
                <p class="avances-lecciones">También conocerás a través de nuestros reportes el resultado obtenido y comparativo en cada una de las evaluaciones realizadas por tus colaboradores.</p>
                <button class="btn">Mas información</button>
            </div> 
        </div>
     

    </div>
@endsection