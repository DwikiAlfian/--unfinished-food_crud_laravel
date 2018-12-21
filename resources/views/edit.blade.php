@extends('layouts.app')

@section('title')
Edit
@endsection

@section('content')
<div class="uk-card uk-card-body">
    <div class="uk-card-header">
        <h3>Edit Food</h3>
    </div>

    <div class="uk-card uk-card-body">
        @if ($errors->any())
        <div class="uk-alert-success" uk-alert>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div><br>
        @endif

<div class="uk-card uk-card-body">
    <form action="{{ route('food.update', $food->id) }}" method="post">
        <div class="uk-margin">
            @method('PATCH')
            @csrf
            <label class="uk-label" for="name">Food Name: 
            <input class="uk-input uk-form-width-large" type="text" name="name" id="name" value="{{$food->name}}"></label>
        </div>
        <div class="uk-margin">
            <label class="uk-label" for="price">Price: 
            <input class="uk-input uk-form-width-large" type="text" name="price" id="price" value="{{$food->price}}"></label>
        </div>
        <div class="uk-margin">
            <button class="uk-button uk-button-primary" type="submit">Save</button>
        </div>
    </form>
</div>
</div>
@endsection