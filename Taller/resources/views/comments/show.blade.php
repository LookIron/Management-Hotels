@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h3>
            Mis comentarios
        </h3>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('comments.show_fields')

                    <a href="{!! route('comments.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
