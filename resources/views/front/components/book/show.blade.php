
@extends('front.layout.app')

@section('title')
    Book Shop
@endsection

@section('content')

<section style="margin: 130px 0;">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-4">
                <img class="card-img-top rounded-0" src="{{($book->cover!==NULL) ? asset('images/book_covers/' . $book->cover) : 'https://upload.wikimedia.org/wikipedia/commons/8/84/Example.svg' }}" alt="course thumb">
            </div>
            <div class="col-md-8">
                @if($book->is_new)
                  <p class="bg-primary p-1">New</p>
                @endif
                <h1>{{ $book->title }}</h1>
                <hr/>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>Author:
                            @foreach( $book->authors as $author)
                              {{$author->name}},
                            @endforeach
                        </p>
                        <p>Genre:
                            @foreach($book->genres as $genre)
                              {{$genre->name}},
                            @endforeach
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <p> Rating: 
                        @if ($book->bookReviews->count() > 0)
                        <i class="fas fa-star"></i> {{ round($book->book_reviews_avg_rating,1) }} 
                        @else
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        @endif
                        </p>
                    </div>
                    <p class="my-5">{{ $book->description }}</p>

                    @if($book->discount) <p class="bg-warning">-{{ $book->discount }}%</p>@endif
                    <p>Price: {{(!$book->discount) ? $book->price :  $book->price - ($book->price * ($book->discount / 100)) }} $</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <h2>Reviews</h2>
                <hr/>
            </div>
            <div class="offset-md-3 col-md-9">
                <form>
                    <textarea name="review" rows="8" cols="50" style="width: 100%"></textarea>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection