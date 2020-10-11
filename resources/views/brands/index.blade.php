@extends('master')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-5">
                <h3>Manage Brands</h3>
                <form method="POST" action="/brand">
                    @csrf                    
                    <div class="form-group mt-4">
                      <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{old("name")}}" placeholder="Brand Name" onblur="check(this ,'name_msg')">
                    {{-- <small id="name_msg" class="text-danger"></small>  --}}
                    @error('name')
                        <small  class="text-danger">{{$message}}</small>
                    @enderror
                    </div>
                    <div class="form-group mt-1">
                      <label for="">Info</label>
                      <input type="text" name="info" class="form-control" value="{{old("info")}}" placeholder="Brand Info">
                      @error('info')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>
                    <input class="btn btn-primary" type="submit" value="Save">
                </form>
            </div>
        </div>
    </div>
    <script>
        function check(el ,msg){
            if(el.value==""){
                document.getElementById(msg).innerHTML="The name field is required";
            }
        }
    </script>
@endsection