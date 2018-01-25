@extends('master')

@section('content')
       <!-- Page Heading/Breadcrumbs -->
       <h1 class="mt-4 mb-3">{{$title}}
       
     </h1>

     <ol class="breadcrumb">
       <li class="breadcrumb-item">
         <a href="./">Home</a>
       </li>
       <li class="breadcrumb-item active">{{$title}}</li>
     </ol>

     <!-- Image Header -->
    <!-- <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt=""> -->

     <!-- Marketing Icons Section -->
     <div class="row">
         @if($categories)
     @foreach($categories as $row)


        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ asset('images/' . $row['image'])}}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{url('shop/' . $row['url'])}}">{{$row['title']}}</a>
              </h4>
              <p class="card-text">{{$row['article']}}</p>
            </div>
          </div>
        </div>
     @endforeach
       @else
             <p><i>No categories were found...</i></p>
         @endif

     </div>
     <!-- /.row -->

@endsection