@include('admin/layouts/scc')
@include('admin/layouts/layout')


<div class="row ">
<div class="col-lg-12" style="margin-top: 20px;">

    <div class="pull-right">
 <a href="{{ route('groupes.create') }}"
  class="btn btn-success">Create New Groupes</a>
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

                  <th>Nom</th>
                  
                  <th width="160px">Action</th>
               </tr>
            </thead>
            <tbody>  
                    @foreach($groupes as $Groupe)
                    <tr>
 
                   <td>{{ $Groupe->name }}</td>
               
                 <td>
                    <form action="
                    {{ route('groupes.destroy', $Groupe->id)}}" method="post" role="form">
                           <a href="
                 {{ route('groupes.edit',$Groupe->id)}}" class="btn btn-primary">Edit</a>
 
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