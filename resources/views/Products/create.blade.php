<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-3">
      <h3 class="text-white text-center"> Simple Larvel 11 CRUD</h3>
    
</div>
<div class="container">
  <div class="row d-flex justify-content-center">  
    <div class="col-md-10">
    <div class="card borde-0 shadow-lg">
      <div class="card-header bg-dark">
          <h3 class ="text-white"> Create Product </h3>
      </div>  
      < form action ="{{route('product.store')}}" method="post">
      @csrf
         <div class="card-body">
          <div  class="mb-3">
            <label for ="" class="form-label">Name</label>
            <input type="text" class ="form-control form-control-lg" placeholder="Name"
            name="name">

          </div>
         
          <div  class="mb-3">
            <label for ="" class="form-label">SKu</label>
            <input type="text" class ="form-control form-control-lg" placeholder="Name"
            name="sku">

          </div>
          <div  class="mb-3">
            <label for ="" class="form-label">price</label>
            <input type="text" class ="form-control form-control-lg" placeholder="Name"
            name="price">

          </div>
          
          <div  class="mb-3">
            <label for ="" class="form-label">Description</label>
            <textarea  class="form-control" name="description" cols="30" rows="10"></textarea> 
           
          </div>
        

          <div  class="mb-3">
            <label for ="" class="form-label">Image</label>
            <input type="file" class="form-controller form-controller-lg" placeholder="Price"
             name="image">
          </div>

          <div class="d-grid">
            <button class="btn btn-lg btn-primary></button>
          </div>
    <div class= "d-grid">
      <button class="btn btn-lg btn primary"> Submit </button>



         </div> 
 
          
  </div>
</div>
  </body>
</html>