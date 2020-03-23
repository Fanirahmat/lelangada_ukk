@extends('layouts.global')
@section('title')
    Lelang Saya
@endsection
@section('page')
    Lelang Saya
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
                <a href="{{route('auction.index')}}" class="btn btn-info">Semua</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid mt--7">
        <!-- Table -->
       
        <!-- Dark table -->
        <div class="row" id="own">
          
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
@section('footer-scripts')
    <script type="text/javascript">
        //tampil
        $.getJSON("{{ route('auction.showOwn') }}",function(data){
          var tampil="";
          $.each(data,function(key,dt){
              tampil+= 
              '<div class="col-xl-4" style="margin-bottom: 5px;">'+
                '<div class="card shadow" style="width: 18rem;">'+
                  '<img class="card-img-top" src="{{ asset("storage") }}/'+dt['image']+'" style="width: 285px; height: 180px;" alt="Card image cap">'+
                  '<div class="card-body">'+
                    '<h5 class="card-title">'+dt['name']+'</h5>'+
                    '<p class="card-text">'+dt['description']+'</p>'+
                    '<a href="#" class="btn btn-warning">Detail</a>'+
                  '</div>'+
                '</div>'+
              '</div>'
          });
          $("#own").html(tampil);
        });
    </script>
@endsection