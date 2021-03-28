@foreach($result as $data => $value)
   </br></br> <h1>{{$data}}</h1> 
    @foreach($value as $var)
       </br> {{$var}}
    @endforeach
@endforeach