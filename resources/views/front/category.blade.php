

@extends('front.layouts.master')
@section('title',$category->name.'  Kategorisi |'.count($blogs). ' yazı bulundu')


@section('content')


      <div class="col-md-9 mx-auto">
@include('front.widgets.articleList')
      </div>
    <!-- en son satırdaki hr çizgisini kaldırmak için bu if kullanımını yapıyoruz.Documentation kısmında kullanımı var
                hatta last yerine first de yazabiliriz bu da en baştaki çizgiyi siler.-->
        <hr>

@endsection


