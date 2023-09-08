<h1>our first page</h1>
{{-- <a href="/post">Post Page1</a>
<a href="/about">Post Page1</a> --}}
{{-- to echo --}}
{{ 5+2 }} 
{{"This is echo"}}
{{-- {{"<h1>Hello</h1>"}} --}}
{!!"<h1>Hello</h1>"!!}
{!!"<script>alert('Hello Shiri')</script>"!!}
@php
$user="Shireen";
$names= ["one"=>"shiri","two"=>"sara","three"=>"Saira"];
$fruites=["Apple","Bannana","Orange"];
@endphp
{{-- {{$user}} --}}
<ul>
@foreach ($names as $n )
<li>{{$n}}</li>
@endforeach
</ul>
{{-- @include('post',['name'=>$names]) --}}
@include('post',['fruit'=>$fruites])
{{-- @include('content') --}}
@includeIf('content', ['name' => 'Hello'])

