@extends('layouts.app')

@section('content')

<div class="container">

        <div class="jumbotron">
            <div class="buscar">
                 <h2>Bienvenido a Smart Hotels </h2>
            </div>
             <div class="buscar">
                <h5>Registra y Busca tus hoteles </h5>
              </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Buscar tu Hotel por nombre o por ciudad..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>

        </div>

</div>

@endsection
