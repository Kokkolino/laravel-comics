@extends('layout.app')
@section('page-title', "DC - Comics")

@section('main')
<main>
    {{-- badge overlay --}}
    <section id="badge-2" class="bg-blue">
        <div class="w-70">

            <img src="{{$comic['thumb']}}" alt="">
        </div>
    </section>
    {{-- info box --}}
    <section id="info-cont">
        <div class="w-70 flex jc-bw">
            {{-- main box --}}
            <div id="infobox">
                {{-- title --}}
                <h1>{{$comic['title']}}</h1>
                <div id="green" class="flex">
                    <div id="price" class="flex al-center jc-bw">
                        {{-- price --}}
                        <div class="flex" style="gap: 7px">
                            <h4 style="opacity: 0.7;">U.S. Price: </h4>
                            <h4>{{$comic['price']}}</h4>
                        </div>
                        {{-- available --}}
                        <span style="opacity: 0.7;">
                            <h4>AVAILABLE</h4>
                        </span>
                    </div>
                    {{-- check --}}
                    <ul id="available" class="flex al-center jc-center">
                        <h4>Check Availability</h4>
                    </ul>
                </div>
                {{-- description --}}
                <div id="description">
                    <p>{{$comic['description']}}</p>
                </div>
            </div>
            {{-- adv box --}}
            <div id="advbox">
                <h4>ADVERTISEMENT</h4>
                <a href="">
                    <img src="{{asset('img/adv.jpg')}}" alt="">
                </a>
            </div>
        </div>
    </section>
    {{-- authors --}}
    <section id="author-box">
        <div class="w-70 flex jc-bw">
            {{-- talent --}}
            <div class="author">  
                <div>
                    <h2>Talent</h2>
                </div>     
                <div class="author-elem">
                    {{-- artists --}}
                    <div>
                        <h5>
                            Art by:
                        </h5>
                    </div>
                    <div>
                        @foreach ($comic['artists'] as $artist)
                            <a href="">{{$artist}}, </a>
                        @endforeach
                    </div>
                </div>     
                {{-- writers  --}}
                <div class="author-elem">
                    <div>
                        <h5>Written by:</h5>
                    </div>
                    <div>
                        @foreach ($comic['writers'] as $writer)
                        <a href="">{{$writer}}, </a>
                    @endforeach
                    </div>
                </div>   
                
            </div>
            {{-- specs --}}
            <div class="author"> 
                <div>
                    <h2>Specs</h2>
                </div>     
                {{-- series --}}
                <div class="author-elem">
                    <div>
                        <h5>
                            Series:
                        </h5>
                    </div>
                    <div>
                        <a href="">{{$comic['series']}}</a>
                    </div>
                </div>
                {{-- us price --}}
                <div class="author-elem">
                    <div>
                        <h5>
                            U.S. Price:
                        </h5>
                    </div>
                    <div>
                        <p>
                            {{$comic['price']}}
                        </p>
                    </div>
                </div>
                {{-- sale date --}}
                <div class="author-elem">
                    <div>
                        <h5>
                            On Sale Date:
                        </h5>
                    </div>
                    <div>
                        <p>{{$comic['sale_date']}}</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</main>
@endsection
