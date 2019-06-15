
@include('admin/layouts/scc')
@include('admin/layouts/layout')



<div class="row">
    <div class="col-lg-12 mt40">
        <div class="pull-left">
            <h2>Add Groupes</h2>
        </div>
        <div class="pull-right">
            <a href="{{route('groupes.index')}}"class="btn btn-primary">Back</a>

        </div>
    </div>
</div>



<form action="{{ route('groupes.store') }}" method="POST" name="add_groupe">
    {{ csrf_field() }}


        <div class="col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name"  placeholder="Enter name">
            </div>
        </div>



         

        <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Add New</button>
        </div>
    </div>

</form>

@include('admin/layouts/nav')