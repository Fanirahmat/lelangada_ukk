@extends('layouts.global')
@section('title')
    Dashboard
@endsection
@section('page')
    Dashboard
@endsection
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
          <div class="header-body">
            <!-- Card stats -->
            <div class="row">
              <div class="col">
                <a href="{{route('auction.create')}}" class="btn btn-success">buat lelang</a>
                <a href="{{route('auction.own')}}" class="btn btn-info">lelang saya</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid mt--7">
        <!-- Table -->
       
        <!-- Dark table -->
        <div class="row">
          <div class="col-xl-4" style="margin-bottom: 5px;">
            <div class="card shadow" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('assets/img/theme/team-1-800x800.jpg') }}" style="width: 285px; height: 180px;" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer -->
        <footer class="footer">
          <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
              <div class="copyright text-center text-xl-left text-muted">
                &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
              </div>
            </div>
            
          </div>
        </footer>
      </div>
@endsection