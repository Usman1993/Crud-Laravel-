<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
#cont
{ color:black;
	
}


</style>

</head>
<body>

@section('cont')
<div id="cont">
<h2 style="padding-left:550px">LARAVEL CRUD</h2>
{{@csrf_field()}}
<div style="color:green">{{session('updated')}}</div>
	<div style="color:green">{{session('msg')}}</div><br><br>
	<td><a href="Add"><button>Add Record</button> </a>
<table>

  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Password</th>
	<th>Delete</th>
	<th>Update</th>
  </tr>
 @foreach($show_data as $sd)
  <tr>

    <td>{{$sd->id}}</td>
    <td>{{$sd->name}}</td>
    <td>{{$sd->password}}</td>
	<td><a href="delete_record/{{$sd->id}}"><button>Delete record</button> </a>
		<td><a href="reset_record/{{$sd->id}}"><button>Update record</button> </a>
  </tr>
  @endforeach
  
</table>
</div>
@show

</body>
</html>
