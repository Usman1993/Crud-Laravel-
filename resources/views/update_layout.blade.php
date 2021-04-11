<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<head>
<style>
#cont
{ color:black;
	
}
.mid
{
padding-left:500px;	
	
}

</style>

</head>
<body>

@section('cont')
<div id="cont">

<h2 style="padding-left:600px"> Update Record</h2>


<form action="{{route('updt',[$record->id])}}" method="post">

{{@csrf_field()}} 
<div class="mid">
<label>Enter name</label><br>
    <td><input type="text" name="name" value="{{$record->name}}"></td><br>
	
	<label> Enter password</label><br>
    <td><input type="text" name="password" value="{{$record->password}}"></td><br>

  <br>
  
   
<input type="submit" name="submit">
</div>
</form>

<br><div class="mid"><td><a href="/"><button>Home</button> </a></div>
</div>
@show

</body>
</html>
