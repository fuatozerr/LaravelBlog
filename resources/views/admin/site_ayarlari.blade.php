@extends('layouts.master')

@section('icerik')

    <header class="intro-header mavi-back" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Site Ayarları</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Site ayarları</div>
                    <div class="panel-body">
                    {!! Form::open(["url"=>"/site-ayarlari/guncelle","method"=>"put"]) !!}
                        @foreach($ayarlar as $ayar)
                            {!! Form::bsText($ayar->name,trans("formlar.$ayar->name"),$ayar->value) !!}

                        @endforeach
                        {!! Form::bsSubmit("Kaydet") !!}
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>

        </div>
    </div>


@stop
