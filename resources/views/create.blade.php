<!DOCTYPE html>
<html>
<head>
    <title></title>
    
</head>
  
<body>
<div class="container">
   
    <div class="panel panel-primary">
      <div class="panel-heading"><h2></h2></div>
      <div class="panel-body">
   
  
        <form action="/files" method="POST" enctype="multipart/form-data">
          {{@csrf_field()}}  
            <div class="row">
  
                <div class="col-md-6">
                    <input type="text" name="title" class="form-control">
					<input type="text" name="discription" class="form-control">
					<input type="file" name="file" class="form-control">
					 
                </div>
   
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
  
            </div>
        </form>
		 
		
		          

      </div>
    </div>
</div>
</body>
  
</html>