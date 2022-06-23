@extends('layout.main')

@section('content')

<main>
    <div class="jumbo">
     <div class="container title"><h2>Current Series</h2></div>
    </div>

    <div class="box-cards">
        <div class="container box-c">
            @foreach ($comics as $comic)
            <div class="card">
                <img src="{{$comic->image}}" alt="{{$comic->type}}">
                <h3>{{$comic->title}}</h3>
            </div>
            @endforeach
        </div>

        <div class="btn-box">
            <a class="btn" href="#">Load More</a>
        </div>

    </div>
    <div class="box-choice">
        <div class="container">
            <ul>
                <li>
                    <a href="#"><img  class="image-a" src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="loghi-choice"><p>digital comics</p></a>
                </li>

                <li>
                    <a href="#"><img  class="image-b" src="{{ asset('img/buy-comics-merchandise.png')}}" alt="loghi-choice"><p>dc merchandise</p></a>
                </li>

                <li>
                    <a href="#"><img  class="image-c" src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="loghi-choice"><p>subscription</p></a>
                </li>

                <li>
                    <a href="#"><img  class="image-d"  src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="loghi-choice"><p>comic shop locator</p></a>
                </li>

                <li>
                    <a href="#"><img  class="image-e" src="{{ asset('img/buy-dc-power-visa.svg')}}" alt="loghi-choice"><p>dc power visa</p></a>
                </li>
            </ul>
        </div>

    </div>
  </main>
</template>


@endsection
