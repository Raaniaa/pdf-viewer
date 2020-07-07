<!DOCTYPE html>
<html>
<head>
    <title></title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">    
</head>
  
	<body>
	<h2>{{$data->title}}</h2>
	<h2>{{$data->description}}</h2>	
 
		<iframe class="embed-responsive-item"  src="{{URL::to('storage/'.$data->file)}}" allowfullscreen="allowfullscreen" width="100%" height="600"></iframe>
		
	

	</body></html>