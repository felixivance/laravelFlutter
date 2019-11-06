@extends('layouts.app')

@section('content')

    @if (\Session::has('message'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('message') !!}</li>
            </ul>
        </div>
    @endif
    <div class="row ml-5">

        <form action=" {{ route('save-category') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="title" placeholder="title">
                </div>
            </div>
            <div class="form-group row">
                <label for="color" class="col-sm-2 col-form-label">Color</label>
                <div class="col-sm-10">
                    <input type="color" name="color" class="form-control" id="color" placeholder="color">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Add Category</button>
        </form>
    </div>
    <div class="row m-2">

        @foreach($categories as $category)
           <div class="col-md-3 mb-2">
               <div class="card">
                   <div class="card-body">
                       <li> {{ $category -> title }}</li>
                       <div style="background-color: {{ $category->color }}">{{ $category-> color }}</div>
                   </div>
               </div>
           </div>

        @endforeach
    </div>
@endsection