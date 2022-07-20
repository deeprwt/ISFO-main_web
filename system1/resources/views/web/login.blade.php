@extends('web.layout.template')
@section('main')

<div class="section blog-standard-section py-5 ">
    <div class="container">
    <div class="row">
      
        
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <div class="card ">
                <img class="card-img-top" src="{{ url('web/assets/images/stu.jpg') }}" alt="">
                <div class="card-body">
                    <a href="#"><button class="btn btn-danger mx-2 mb-1"> Login </button></a>
                     <a href="#"><button class="btn btn-danger mx-2 mb-1"> Registration </button></a> 
                </div>
            </div>
           
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</div>

@endsection