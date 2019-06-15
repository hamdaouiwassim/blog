@include('admin/layouts/scc')
<div class="row mt40">
   <div class="col-md-10">
    <h2>Laravel 5.7 Crud Example - Tuts Make</h2>
   </div>
   <div class="col-md-2">
    <a href="{{ route('clients.create') }}" class="btn btn-danger">Add Client</a>
   </div>
   <br><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Opps!</strong> Something went wrong<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif
    <table class="table table-bordered" id="laravel_crud">
       <thead>
          <tr>

             <th>FullName</th>
             <th>Email</th>
             <th>Gendre</th>
             <th>Age</th>
             <td colspan="2">Action</td>
          </tr>
       </thead>
       <tbody>
          @foreach($clients as $client)
          <tr>
             <td>{{ $client->id }}</td>
             <td>{{ $client->fullname }}</td>
             <td>{{ $client->email }}</td>
             <td>{{ $client->gendre }}</td>
             <td>{{ $client->age }}</td>

             <td><a href="{{ route('clients.edit',$client->id)}}" class="btn btn-
                  primary">Edit</a></td>
                 <td>
                <form action="{{ route('clients.destroy', $client->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
       </tbody>
    </table>
    {!! $clients->links() !!}
</div>

</div>