@extends('template')
@section('body')
<ul class="list-group">
    
    @foreach($article as $arts)
        <li class="list-group-item">
            {{ $arts->title}}
        </li>
    
    @endforeach
</ul>
@endsection