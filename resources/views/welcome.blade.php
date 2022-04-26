@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-6">
            <img src="/banner/online-medicine-concept_160901-152.jpg" class="img-fluid">
        </div>

        <div class="col-md-6">
            <h2>Create account & Book your appointment</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quasi sequi maiores iusto? Numquam unde alias reiciendis! 
                Beatae magni perspiciatis excepturi?</p>

                <div class="mt-5">
                    <a href="{{ url('/register') }}">
                    <button class="btn btn-success">
                        Register as a Patient
                    </button>
                    </a>
                    <a href="{{ url('/login') }}">
                    <button class="btn btn-secondary">
                        Login
                    </button>
                </a>
           
                </div>   
        </div>

  
      


    </div>
    <hr>

    {{-- date picker component --}}
    <find-doctor></find-doctor>

</div>
@endsection
