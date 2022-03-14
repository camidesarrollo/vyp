<div class="container pt-5">
<div class="owlcarousel-categorias-productos">
    <div class="titulo-categorias-productos">
        <h2 class="seccion-title text-center titulo-owlcarousel-categorias titulo-owlcarousel">Categoria</h2>
    </div>
    <br>
    <div class="carousel-wrap">
        <div id="sync1" class="owl-carousel owl-theme">
            @foreach ($categoriasProductos as $key => $value)
            <div class="product-grid">
                    <div class="product-image">
                        <a href="{{route('categoria',$value->id_categoria)}}" class="image">
                            <img src="{{asset('imagenes/Categorias')}}/{{$key}}.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                    <a class="sub-title thumb-info-inner titule-categoria" href="{{route('categoria',$value->id_categoria)}}" >{{$value->nombre_categoria}}</a> 
                        <span class="thumb-info-type"> <mark class="count">{{$value->cantidad}}</mark> Productos </span>                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>
<br>
<br>
