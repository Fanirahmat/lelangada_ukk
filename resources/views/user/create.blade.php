@extends('layouts.global')
@section('title')
    Create Auction
@endsection
@section('page')
    Create Auction
@endsection
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
          <div class="header-body">
            <!-- Card stats -->
            <div class="row">
              <div class="col">
                <a href="{{route('auction.index')}}" class="btn btn-danger">back</a>
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
            <div class="col">
              <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                  <h3 class="text-white mb-0">Create Auction</h3>
                </div>
                <div class="card-body">

                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif 

                    <form action="{{route('auction.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name" class="text-white">Name</label>
                                    <input type="text" value="{{old('name')}}" name="name" class="form-control {{$errors->first('name') ? "is-invalid" : ""}}">
                                        <div class="invalid-feedback">
                                            {{$errors->first('name')}}
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="text-white">Description</label>
                                    <textarea class="form-control {{$errors->first('description') ? "is-invalid" : ""}}" name="description" rows="2">{{old('description')}}</textarea>
                                    <div class="invalid-feedback">
                                        {{$errors->first('description')}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start_price" class="text-white">Start Price</label>
                                    <input type="number" value="{{old('start_price')}}" name="start_price" class="form-control {{$errors->first('start_price') ? "is-invalid" : ""}}" id="">
                                    <div class="invalid-feedback">
                                        {{$errors->first('start_price')}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="text-white">Image</label>
                                    <input type="file" value="{{old('image')}}" name="image" class="form-control {{$errors->first('image') ? "is-invalid" : ""}}" id="">
                                    <div class="invalid-feedback">
                                        {{$errors->first('image')}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="text-white">Durasi (Jam)</label>
                                    <input type="number" class="form-control" id="" placeholder="belum bisa">
                                </div>
                                <div class="form-group">
                                    <label for="status" class="text-white">Status</label>
                                    <select value="{{old('status')}}" class="form-control {{$errors->first('status') ? "is-invalid" : ""}}" id="exampleFormControlSelect1" name="status">
                                        <option value="dibuka">BUKA</option>
                                        <option value="ditutup">TUTUP</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        {{$errors->first('status')}}
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success" aria-pressed="true" value="Save">
                        </div>
                    </form>
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