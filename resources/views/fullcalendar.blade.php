@extends('layout.master')
@section('title','TESTE')
@section('screen')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/lang/pt-br.js"></script>
{!! $calendar->script() !!}
@stop
