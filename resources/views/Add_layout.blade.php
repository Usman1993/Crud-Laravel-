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

<h2 style="padding-left:600px"> Add Record</h2>

<div class="mid" style="color:green">
{{@session('add')}}</div>

<form action="insert_record" method="get">

{{@csrf_field()}} 
<div class="mid">
<label>Enter name</label><br>
    <td><input type="text" name="name" ></td><br>
	<div style="color:red"> @error('name')
	{{$message}}
	@enderror </div>
	<label> Enter password</label><br>
    <td><input type="text" name="password" ></td><br>
	<div style="color:red">@error('password')
	{{$message}}
	@enderror </div>
  <br>
  
   
<input type="submit" name="submit">
</div>
</form>

<br><div class="mid"><td><a href="/"><button>Home</button> </a></div>
</div>
@show

</body>
</html>
