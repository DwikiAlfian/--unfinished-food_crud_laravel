@extends('layouts.app')

@section('title')
Index Page
@endsection

@section('content')
<div class="uk-body uk-card-body">
@if(session()->get('success'))
    <div class="uk-alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
</div>
<div class="uk-card uk-card-body">
<table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Food Name</th>
            <th>Price</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($foods as $food)
        <tr>
            <td>{{$food->name}}</td>
            <td>{{$food->price}}</td>
            <td><a href="{{route('food.edit', $food->id)}}"><button class="uk-button uk-button-primary">
                Edit
            </button></a></td>
            <td>
                <form action="{{route('food.destroy', $food->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="uk-button uk-button-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection