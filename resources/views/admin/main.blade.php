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

  


@endsection