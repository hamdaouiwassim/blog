@include('admin/layouts/layout')
<div class="row">
    <div class="col-lg-12 mt40">
        <div class="pull-left">
            <h2>Ajouter client</h2>
        </div>
    </div>
</div>
    
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Something went wrong<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
<form action="{{ route('clients.store') }}" method="POST" name="add_client">
    {{ csrf_field() }}
    <div class="col-md-12">
            <div class="form-group">
                <strong>FullName</strong>
                <input type="text" name="fullname"  placeholder="Enter fullname">
            </div>
        </div>
        
    
                
         <div class="col-md-12">
        <div class="form-group">
        <strong>Email</strong>
     <input type="text" name="email"placeholder="Example@gamil.com">
     </div>
    </div>
  
    

    <div class="col-md-12">
  <div class="form-group">
  <strong>Gendre</strong>
  <select name="gendre" >
      <option value="M">Male</option>
      <option value="F">Female</option>
  </select>
        
        </div> 
 </div>
 

 
                                
     <div class="col-md-12">
 <div class="form-group">
 <strong>Age</strong>
 <input type="text" name="age"  placeholder="Enter Age">
</div>
</div>

        <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    
</form>
                                   
           
 @include('admin/layouts/nav') 
    

    

    

    

   
