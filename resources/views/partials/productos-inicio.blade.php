
<body>
<div id="content">

<div class="container-fluid p-0">
 <!-- Productos -->

<section class= "productos" id="wrap">
<div id="columns" class="columns_4">

@foreach ($products as $product ) 
{{-- $pi={{$product->image}} --}}
<figure>
          <img src="/img/{{$product->image}}">

          <figcaption>{{$product->tittle}}</figcaption>
          <span class="price">${{$product->price}}</span>
          <a class="button" href="#">Comprar ahora</a>
 </figure>

@endforeach 

</div>
</section>


</div>