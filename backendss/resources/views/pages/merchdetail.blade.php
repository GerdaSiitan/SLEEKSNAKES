@extends('partials.layout')
@section('content')

    <body class="bg-primary">

        </section>

        <h1 class="relative text-4xl md:text-5xl text-white font-primary text-center mt-[2em] ">
            MERCH
        </h1>

        <div class=" max-w-[24px] md:max-w-[32px] ml-[3em]  md:ml-[13em] mt-[-2em]">
            <a href="merch.html"> <img src="arrow.png" alt="img"> </a>
        </div>

        <div class="md:w-5/12 w-11/12 mt-10  ml-4 md:ml-52">
            <img src="{{ Storage::disk('public')->url($product->image[0]) }}" alt="img">
            <h2
                class="relative text-3xl md:text-6xl md:leading-relaxed text-white font-primary md-text-center mt-8 md:mt-[-10em]   md:ml-[14em] ">
                {{ $product->name }}
            </h2>
            <h2
                class="relative text-3xl md:text-5xl text-white font-secodary font-bold md:text-center mt-4 md:mt-[-1.70em] md:ml-[24em] ">
                {{ $product->price }}
            </h2>

            <h2 class="absolute text-l md:text-xl text-white font-secodary text-left mt-4 md:mt-12 md:ml-[42em] ">
                {{ $product->description }}
                <br>
                <br>
                <br>
                {{$product->size}}
            </h2>
            <img class="w-3/12 mt-40 md:mt-56 md:ml-[52em]" src="/Group34.png" alt="img">
        </div>
        <div
            class="relative text-7xl text-white font-secondary my-22 px-32 text-left z-10 ml-[-110px] md:ml-[12.75em] mt-4">
            <button
                class="rounded-md bg-accent py-4 px-8 border border-transparent text-center text-sm text-white transition-all
         shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none
         disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button">
                Add to Cart </button>
        </div>

        <h1
        class="w-3/12 md:w-1/12 mt-4 ml-[1em] md:ml-[13em] mb-[8em] md:mb-[20em]">
        {{ $product->color }}
    </h1>


        <h1 class="relative text-2xl md:text-4xl text-white font-primary text-left mt-[3em]  ml-4 md:ml-52 ">
            {{ $product->name }}
        </h1>

        <h1
            class="relative text-xs md:text-xl text-white font-secondary font-light text-left mt-[1em] ml-4 md:ml-52 mr-32 ">
            {{ $product->description }}
        </h1>

        <h1 class="relative text-2xl md:text-4xl text-white font-primary text-left mt-10 ml-4 md:ml-52 ">
            COLORS AVAILABLE
        </h1>

        <h1
        class="w-3/12 md:w-1/12 mt-4 ml-[1em] md:ml-[13em] mb-[8em] md:mb-[20em]">
        {{ $product->color }}
    </h1>

    </body>
@endsection
