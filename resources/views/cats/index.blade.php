@extends('master')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h3>All Categories</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th></th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr>
                            <td><a href="/category/{{$category->id}}" class="btn-link"> {{$category->name}}</a></td>
                            <td style="width: 50px">
                                <a class="btn btn-success btn-sm" href=" /category/{{$category->id}}/edit" >edit</a>
                            </td>
                            <td style="width: 50px">
                                <form action="/category/{{$category->id}}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <input type="submit" class="btn btn-sm btn-danger" value="delete">
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No Categories</td>
                        </tr>
                        @endforelse
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    
    </div>
    
@endsection