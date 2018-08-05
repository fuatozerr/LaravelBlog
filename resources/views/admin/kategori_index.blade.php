@extends('layouts.master')

@section('icerik')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header mavi-back" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Kategoriler Listesi</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Resim</th>
                        <th>Başlık</th>
                        <th>Slug</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($kategoriler as $kategori)
                        <tr>
                           <td></td>
                            <td>{{$kategori->baslik}}</td>
                            <td>{{$kategori->slug}}</td>
                            <td>
                                <a href="/kategori/{{$kategori->id}}/edit" class="btn btn-primary eylem" data-toggle="tooltip" title="Düzenle"><i class="fa fa-edit"></i></a>
                                <a href="/kategori/{{$kategori->id}}" class="btn btn-danger eylem" data-toggle="tooltip" title="Sil" data-method="delete" data-confirm="Emin misin ?"><i class="fa fa-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="text-center">
                    {{$kategoriler->links()}}
                </div>



            </div>
        </div>
@stop

