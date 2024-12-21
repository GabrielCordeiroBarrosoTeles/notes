@extends('layouts.main_layout')


@section('content')
    <h1>Welcome View and Blade!</h1>
    <h3>The value is {{ $value }} </h3>
    <!--
        <h3>The value is <?= $value; ?> </h3>
        <h3>The value is <?php $value ?> </h3>
    -->
@endsection

    
