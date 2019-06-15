
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Edit Client</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('admin.forms')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <br>
    <form action="{{route('clients.update',$client->id)}}" method="post" role="form">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('fullname')?' has-error':''}}">
                    <strong>FullName:</strong>
                    <input type="text" name="fullname" value="{{ $client->fullname }}" class="form-control" placeholder="Nom">
                    <span class="text-danger">{{$errors->first('fullname')}}</span>
                </div>
            </div>
           
            

                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group{{$errors->has('email')?' has-error':''}}">
                            <strong>Email:</strong>
                            <input type="text" name="email" value="{{ $client->email }}" class="form-control" placeholder="Email">
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group{{$errors->has('gendre')?' has-error':''}}">
                                <strong>Gendre:</strong>
                                <input type="text" name="gendre" value="{{ $client->gendre }}" class="form-control" placeholder="Gendre">
                                <span class="text-danger">{{$errors->first('gendre')}}</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group{{$errors->has('age')?' has-error':''}}">
                                    <strong>Age:</strong>
                                    <input type="text" name="age" value="{{ $client->age }}" class="form-control" placeholder="Age">
                                    <span class="text-danger">{{$errors->first('age')}}</span>
                                </div>
                            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
