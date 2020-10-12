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
                    <input type="text" name="name" class="form-control" value="{{old("name")}}" placeholder="Brand Name">
                    {{-- <small id="name_msg" class="text-danger"></small>  --}}
                    @error('name')
                        <small  class="text-danger">{{$message}}</small>
                    @enderror
                    </div>
                    <div class="form-group mt-1">
                      <label for="">Comments</label>
                     <textarea class="form-control" name="comments">{{old("comments")}}</textarea>
                      @error('comments')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>
                    <input class="btn btn-primary" type="submit" value="Save">
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Commments</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($brands as $brand)
                        <tr>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->comments}}</td>                            
                            {{-- <td><a class="btn btn-sm btn-danger" href="/brand/delete/{{$brand->id}}" >delete</a></td>                          --}}
                            <td>
                                <a class="btn btn-sm btn-success" href="{{route("brand_edit" ,["id"=>$brand->id])}}" >edit</a>
                                <a class="btn btn-sm btn-danger" href="{{route("brand_delete" ,["id"=>$brand->id])}}" >delete</a>
                            
                            </td>                         
                        </tr>
                        @empty
                            <td colspan="3">No Brand</td>
                        @endforelse
                      
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection