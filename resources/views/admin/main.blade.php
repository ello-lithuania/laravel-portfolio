@extends('admin.layout.app')

@section('title')
    Book Shop
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">All Books</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
                  <li class="breadcrumb-item active">All books</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">

          <!-- Main row -->
          <div class="row">
            <div class="col-md-12">
              
              @if(session('message'))
                <div class="alert alert-success" role="alert">
                  {{ session('message')}}
                </div>
              @endif

                <a class="btn btn-lg btn-primary" href="{{route('user.books.create')}}">Add New Book</a>
 
            </div>
          </div>

          <div class="row mt-3">

            @foreach ($book_data as $book)
            <div class="col-md-3 col-6">
              <div class="card">
                <img class="card-img-top" src="{{($book->cover!==NULL) ? asset('images/book_covers/' . $book->cover) : 'https://upload.wikimedia.org/wikipedia/commons/8/84/Example.svg' }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$book->title}}</h5>
                  <hr/>
                  <p>Price: {{(!$book->discount) ? $book->price :  $book->price - ($book->price * ($book->discount / 100)) }} $</p>
                  @if(count($book->genres) > 0)
                  <p>Genre:
                  @foreach($book->genres as $genre)
                    {{$genre->name}},
                  @endforeach
                  </p>
                  @endif
                  <p class="card-text">{{$book->description}}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col-md-12">
              {{ $book_data->links() }}
            </div>
          </div>

  


@endsection