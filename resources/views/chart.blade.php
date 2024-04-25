@extends('templates.main')

@section('content')
    <div class="container-fluid">
        <div>
            {!! $chart->container() !!}
        </div>
    
        <!-- Load the charts -->
        {!! $chart->script() !!}

    </div>

@endSection