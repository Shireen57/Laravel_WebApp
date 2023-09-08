<h1>Our Post Page</h1>
{{-- To write alternative syntax of php we use blade template --}}
{{"Hello"}} 
{{-- {{$name}} --}}
{!!"<h1>Hello</h1>"!!}
@php 
// php code

@endphp
{{-- <ul>
    @foreach ($names as $n )
    <li>{{$n}}</li>
    @endforeach
    </ul> --}}
    {{-- <ul>
        @foreach ($name as $key=>$value )
        <li>{{$key}} - {{$value}}</li>
        @endforeach
        </ul> --}}
        
        {{-- For else loop --}}
       @forelse ($fruit as $item)
           <p>{{$item}}</p>
       @empty
          <p>No value Found</p> 
       @endforelse
{{-- <p>{{$name}}</p> --}}