@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">

    <section class="content-header">
        <h3>
            Comentar
        </h3>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'comments.store']) !!}

                        @include('comments.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
   </div>
@endsection
