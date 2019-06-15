
@include('admin/layouts/layout')

        
<div class="row ">
<div class="col-lg-12" style="margin-top: 20px;">
            
    <div class="pull-right">
 <a href="{{ route('clients.create') }}"
  class="btn btn-success">Create New Client</a>
        </div>
    </div>
</div>
        
@if ($message = Session::get('success'))
      <div class="alert alert-success">
      <p>{{ $message }}</p>
     </div>
         @endif
         
 <div class="table-responsive">
     <table class="table table-hover">
         <thead>
               <tr>
                  
                  <th>FullName</th>
                  <th>Email</th>
                  <th>Gendre</th>
                  <th>Age</th>
                  <th width="160px">Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach($clients as $client)
                   <tr>
                 
                  <td>{{ $client->fullname }}</td>
                  <td>{{ $client->email }}</td>
                  <td>{{ $client->gendre }}</td>
                  <td>{{ $client->age }}</td>
                <td>
                   <form action="
                   {{ route('clients.destroy', $client->id)}}" method="post" role="form">
                          <a href="
                {{ route('clients.edit',$client->id)}}" class="btn btn-primary">Edit</a>
                                
                <input type="hidden"
                 name="_token" value="{{csrf_token()}}">
                <input type="hidden"
                 name="_method" value="DELETE">
                <button type="submit"
                 class="btn btn-danger">Delete</button>
                     </form>
                 </td>
                </tr>
               @endforeach
            </tbody>
         </table>
      
     </div>  
                                   
 @include('admin/layouts/nav')  