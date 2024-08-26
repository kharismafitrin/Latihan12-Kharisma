@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center">Biodata</h3>
    @if (isset($manusia))
        @include('biodata.formupdate')
    @else
        @include('biodata.formtambah')

    @endif

    @include('biodata.table')
</div>

@endsection