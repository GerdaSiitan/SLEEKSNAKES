@extends('partials.layout')
@section('content')
  <body class="bg-primary">

    </section>

    <h1 class="relative text-2xl md:text-5xl text-white font-primary text-center mt-[2em] ">
      SLEEKSNAKES MERCH
    </h1>


        <div  class="w-9/12 grid grid-cols-2 gap-12 content-center mt-10 ml-16 md:ml-52">

            @foreach($products as $product)
        <div class="1">
       <a href="{{route('merchdetail', ['product' => $product])}}"> <img
      src="{{Storage::disk('public')->url($product->image[0])}}" alt="img"> </a>
      <h2 class="relative text-l md:text-xl text-white font-primary mt-5">{{$product->name}}</h2>
      <h2 class="relative text-sm md:text-xl text-white font-secondary md:mt-[-1.5em] md:ml-[30em]">{{$product->price}}</h2>
      </div>
      @endforeach


      <div class="2">
        <a href="{{route('merchdetail', ['product' => $product])}}"> <img
       src="/Group71.png" alt="img"> </a>
       <h2 class="relative text-l md:text-xl text-white font-primary mt-5"> SLEEKSNAKES KEYCHAIN </h2>
       <h2 class="relative text-sm md:text-xl text-white font-secondary md:mt-[-1.5em] md:ml-[30em]"> 29.99$ </h2>
       </div>

      <div class="3">
                <img
      src="/Rectangle16.png" alt="img">
      <h2 class="relative  text-l md:text-xl text-white font-primary mt-5"> SLEEKSNAKES HOODIE </h2>
        <h2 class="relative  text-sm md:text-xl text-white font-secondary md:mt-[-1.5em] md:ml-[30em]"> 45.99$ </h2>
      </div>

             <div class="4">
       <img
      src="/Group82.png" alt="img">
      <h2 class="relative  text-l md:text-xl text-white font-primary mt-5"> SS SOCIETY CAP </h2>
           <h2 class="relative  text-sm md:text-xl text-white font-secondary md:mt-[-1.5em] md:ml-[30em]"> 34.99$ </h2>
      </div>

      <div class="5">
                <img
      src="/Rectangle18.png" alt="img">
      <h2 class="relative md:text-xl text-white font-primary mt-5"> SLEEKSNAKES MOUSEPAD </h2>
             <h2 class="relative  text-sm md:text-xl text-white font-secondary md:mt-[-1.5em] md:ml-[30em]"> 35.99$ </h2>
      </div>
    </div>


    <h1 class="relative text-2xl md:text-5xl text-white font-primary text-center mt-[4em] ">
      SPONSORS
    </h1>

       <div class=":w-12/12 items-center mt-[-3em] md:mt-[-20em]">
       <img
      src="/Group81.png" alt="img">
    </div>
  </body>
@endsection
