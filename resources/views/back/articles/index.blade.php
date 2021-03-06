@extends('back.layouts.master')
@section('title','Tüm Makaleler')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
                <span class="float-right">{{$blogs->count()}} Makale Bulundu</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Fotoğraf</th>
                        <th>Makale Başlığı</th>
                        <th>Kategori</th>
                        <th>Hit</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
@foreach($blogs as $blog)
    <tr>

        <td>
            <img src="{{$blog->image}}" width="200">
        </td>


                        <td>{{$blog->title}}</td>
                        <td>{{$blog->getCategory->name}}</td>
                        <td>{{$blog->hit}}</td>
                        <td>{{$blog->created_at->diffForHumans()}}</td>
                        <td>{!!$blog->satus==0 ? "<span class='text-danger'>Pasif </span": "<span class='text-success'>Aktif </span"!!}</td>
                        <td>
                            <a href="#" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <a href="#" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a href="#" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>

                    </tr>
@endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
