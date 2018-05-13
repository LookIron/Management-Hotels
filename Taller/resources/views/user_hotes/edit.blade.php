@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Hote
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userHote, ['route' => ['userHotes.update', $userHote->id], 'method' => 'patch']) !!}

                        @include('user_hotes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection