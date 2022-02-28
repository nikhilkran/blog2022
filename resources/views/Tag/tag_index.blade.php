@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Tag List<span><a href="/tags/create" target="_blank" title="create tag">+</a></span></h3>
    <div class="card">
        <div class="card-body">
            <div class="table ">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Decription</th>
                            <th>Created at</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td>{{$tag->description}}</td>
                            <td>{{$tag->created_at}}</td>
                            <td>
                                <div class="row ml-1">
                                    <a class="btn btn-primary" href="/tags/edit/{{$tag->id}}" target="blank" title="edit tag">Edit</a>&emsp;
                                    <a class="btn btn-danger" href="/tags/delete/{{$tag->id}}" title="Delete tag">Delete</a>&emsp;
                                    <a class="btn btn-info" href="/tags/show/{{$tag->id}}" target="blank" title="view tag" >View</a>&emsp;
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="/tags/shoft_deleted" target="_blank">Soft Deleted tags</a>
    </div>
<div>
@endsection
