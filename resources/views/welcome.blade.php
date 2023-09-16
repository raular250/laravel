@extends('layouts.app')

@section('content')
<main role="main" class="container">
    <div>
        <h1>Page example</h1>
        <i class="bi bi-bell"></i>
        <p class="lead">Esta es una página de ejemplo</p>
        @php
            if(DB::connection()->getPdo()){
                echo "conectado a la BD";
            }
        @endphp
    </div>
</main>
@endsection