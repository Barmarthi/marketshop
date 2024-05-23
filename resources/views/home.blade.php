<x-layout_base>
<x-menu></x-menu>
<div class="carousel w-full">
  <div id="slide1" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_806000-MLA75393863908_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide4" class="btn btn-circle">❮</a> 
      <a href="#slide2" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide2" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_859602-MLA75368444934_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide1" class="btn btn-circle">❮</a> 
      <a href="#slide3" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide3" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_922106-MLA75377276862_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide2" class="btn btn-circle">❮</a> 
      <a href="#slide4" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide4" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_997780-MLA75425140714_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide3" class="btn btn-circle">❮</a> 
      <a href="#slide5" class="btn btn-circle">❯</a>
    </div>
  </div>

  <div id="slide5" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_755668-MLA75432560149_032024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide4" class="btn btn-circle">❮</a> 
      <a href="#slide6" class="btn btn-circle">❯</a>
    </div>
  </div>

  <div id="slide6" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_945326-MLA75548553029_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide5" class="btn btn-circle">❮</a> 
      <a href="#slide7" class="btn btn-circle">❯</a>
    </div>
  </div>
  <div id="slide7" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_667836-MLA74349586053_022024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide6" class="btn btn-circle">❮</a> 
      <a href="#slide1" class="btn btn-circle">❯</a>
    </div>
  </div>
</div>
<div class="bg-white rounded-nd shadow-md m-6 p-6">

<div class="font-bold text-lg">
  Ofertas do dia
</div>

<div class="grid grid-cols-4 gap-5">

@foreach ($listaProdutos as $produto)
<div class="card bg-base-100 shadow-xl">
  <figure><img class="aspect-square w-full object-cover" src="{{$produto->foto}}" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title">{{$produto->name}}</h2>
    <p>{{$produto->descricao}}</p>
    <div class="card-actions justify-between">
      <div class="font-bold text-lg ">R${{number_format($produto->valor, 2, ',', '.')}}</div>
      <button class="btn btn-primary">Compre já</button>
    </div>
  </div>
</div>
@endforeach

    
</div>


</x-layout_base>