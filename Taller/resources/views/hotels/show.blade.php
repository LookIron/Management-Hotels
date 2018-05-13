@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">
    <section class="content-header">
        <h1>
            Hotel
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('hotels.show_fields')

                    <a href="{!! route('comments.create') !!}" class="btn btn-default">Comentar</a>
                    <a href="{!! route('hotels.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
