@extends('layout.app')
@section('page-title', "Home DC-Comics")

@section('main')
<main>
    {{-- jumbotron --}}
    <section id="jumbo"></section>
    {{-- current series --}}
    <section id="series" >
        {{-- container --}}
        <div class="w-70">
            {{-- element overlay --}}
            <div id="over-elem" class="color-white bg-blue flex al-center jc-center">
                <h2>CURRENT SERIES</h2>
            </div>
            {{-- cards container --}}
            <section id="cards" class="flex wrap jc-bw">
                {{-- loop cards --}}
                @foreach ($comics as $id => $elem)
                    <div class="card">
                        {{-- card image --}}
                        <a href="/{{$id}}">
                            <img src="{{$elem['thumb']}}" alt="">
                        </a>
                        {{-- title --}}
                        <p class="color-white">{{$elem['title']}}</p>
                    </div>
                    {{-- load button --}}
                @endforeach
                </section>
                <div id="load" class="bg-blue">
                    <button  class=" color-white">
                        LOAD MORE
                    </button>
                </div>
        </div>
    </section>
    {{-- blue badge --}}
<section id="badge" class="bg-blue">
    <div class="w-70 ">
        {{-- ul badge --}}
        <ul class="flex jc-bw al-center">
            <li>
                <a href="">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                    <span class="color-white">
                        DIGITAL COMICS
                    </span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                    <span class="color-white">
                        DC MERCHANDISE
                    </span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                    <span class="color-white">
                        SUBSCRIPTION
                    </span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                    <span class="color-white">
                        COMIC SHOP LOCATOR
                    </span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                    <span class="color-white">
                        DC POWER VISA
                    </span>
                </a>
            </li>
        </ul>
    </div>
</section>

</main>
@endsection

