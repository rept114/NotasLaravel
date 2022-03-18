@extends('layout')

@section('title', 'Listado de notas')

@section('content')
    <main class="content">
        <div class="cards">
            @forelse($notas as $nota)
                <div class="card card-small">
                    <div class="card-body">
                        <h4>{{ $nota->titulo }}</h4>

                        <p>
                            {!! $nota->contenido !!}
                        </p>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
            @empty
                <p>No hay notas disponibles en este momento <a href="{{ url('agregar') }}">Agrega una?</a></p>
            @endforelse         
        </div>
    </main>
@endsection
