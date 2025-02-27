@extends('layouts.app')
@section('title', 'Laravel')
@section('content')

@push('css')
    <style>
        body {
            background-color: #f3f3f3
        }
    </style>
@endpush
@push('css')
    <style>
        body {
            color: red;
        }
    </style>
@endpush
    
<div class="max-w-4xl mx-auto px-4">
    <x-alert2 type='warning' class="mb-4">
        <x-slot name='title'>
            Titulo
        </x-slot>
        Contenido de la alerta
    </x-alert2>
    <p>hola mundo</p>
</div>
@endsection