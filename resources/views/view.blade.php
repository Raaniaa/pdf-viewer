<!DOCTYPE html>
<html>
<head>
    <title></title>
    
</head>
  
<body>
	<table border="1">
<tr>
	<th>title</th>
	<th>descritipon</th><th>view</th>
	<th>download</th></tr>
	@foreach($file as $key=>$data)
	<tr>
	<td>{{++$key}}</td>
	<td>{{$data->title}}</td>
	<td>{{$data->description}}</td>
	<td><a href="create/files/{{$data->id}}">view</a></td>
	<td><a href="files/download/{{$data->file}}">download</a></td>	
		
	</tr>
	@endforeach
	</table>
</body>
  
</html>