@if(count($blogs)>0)
@foreach($blogs as $blog)
    <div class="post-preview">
        <a href="{{route('single',[$blog->getCategory->slug,$blog->slug])}}">
            <h2 class="post-title">
                {{$blog->title}}
            </h2>
            <img src="{{$blog->image}}"/>
            <h3 class="post-subtitle">
                {{Str::limit($blog->content,75)}}
            </h3>
        </a>
        <p class="post-meta">Kategori:
            <a href="#">{{$blog->getCategory->name}}</a>

            <span class="float-right">{{$blog->created_at->diffForHumans()}}</span></p>
    </div>

    @if(!$loop->last)
        <hr>
    @endif
@endforeach
<!-- en son satırdaki hr çizgisini kaldırmak için bu if kullanımını yapıyoruz.Documentation kısmında kullanımı var
                hatta last yerine first de yazabiliriz bu da en baştaki çizgiyi siler.-->
<!-- Pager -->
<div class="float-center">
    {{$blogs->links()}}
</div>
@else
    <div class="alert-danger">
        <h1>Böyle bir yazı bulunamamıştır.</h1>
    </div>
@endif
