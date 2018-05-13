@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">
    <section class="content-header">

        <h1 class="pull-left">Hotels</h1>
        <h1 class="pull-right">

             {!! Form::open(['route'=>'hotels.index','method' =>'GET','class'=>'navbar-form navbar-left pull-right', 'role'=>'search']) !!}
              <div class="form-group">
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar...'])!!}
              </div>
              <button type="submit" class="btn btn-primary" >Buscar</button>
           {!! Form::close()!!}
            <a class="btn btn-primary" style="margin-top: 16px;margin-bottom: 20px" href="{!! route('hotels.create') !!}">Agregar Hotel</a>
        </h1>


    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('hotels.table')
            </div>
        </div>
    </div>
  </div>
   </div>
@endsection

