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
                <h1 class="m-0">Add Book</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
                  <li class="breadcrumb-item active">Add book</li>
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
              @if(count($errors) > 0)
              <div class="alert alert-warning" role="alert">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
              </div>
              @endif

                <form action="{{route('user.books.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input value="{{old('title')}}" name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Authors</label>
                        <input value="{{old('authors')}}" type="text" name="authors" class="form-control" id="exampleInputEmail1" placeholder="Enter authors">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Genres</label>
                        <br/>
                        @foreach($genres as $genre)
                            <input type="checkbox" class="form-control d-inline" style="width:auto;" name="genres[]" value="{{$genre->id}}"
                            @if(in_array($genre->id,old('genres', []))) checked @endif
                            />
                            {{$genre->name}}
                            <br/>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control" name="description">{{old('price')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input value="{{old('price')}}" type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">File</label>
                        <input type="file" class="form-control" name="cover" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Save book</button>
                  </form>
            </div>

  


@endsection