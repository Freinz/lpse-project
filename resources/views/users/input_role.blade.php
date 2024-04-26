@extends('layouts.main')

<<<<<<< HEAD
=======
<style type="text/css">

.div_center {
  text-align : center;
  margin: aut;
}

.cat_label {
  font-size : 30px;
  font-weight: bold;
  padding: 30px;
  color: white;
}

.center {
  margin: auto;
  width: 50%;
  text-align: center;
  margin-top: 50px;
  border: 1px solid white;
}

th {
  background-color: skyblue;
  padding: 10px;
}

tr {
  border:1px solid white;
  padding: 10px;
}

</style>

>>>>>>> fa421796470d8f6c48f09654b6a5e7d955bad27c
@section('title', 'User Widgets')
@section('breadcrumb-item', 'Widget')

@section('breadcrumb-item-active', 'User')

@section('css')
@endsection

@section('content')
<<<<<<< HEAD
<div class="row">
        <div class="col-md-12">
          <div class="card">
            
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="{{url('role_add')}}" method="Post" enctype="multipart/form-data">

                  @csrf

                    <div class="form-group">
                      <label class="form-label" for="exampleInputEmail1">Input Role</label>
                      <input type="text" class="form-control" name="role"
                        placeholder="Enter Role">
                        </div>
                        <button type="submit" class="btn btn-primary mb-4">Submit</button>
                  </form>
                </div>
        </div>
      </div>
    </div>
  </div>
</div>
                
          
       <div class="col-sm-12">
          <div class="card border-0 table-card user-profile-list">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover " id="pc-dt-simple">
                  <thead>
                    <tr>
                      <th>Role</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $data)
                    <tr>
                     
                      <td>{{$data->role_user}}</td>
                      <td>
                       
                        <div class="overlay-edit">
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item m-0"><a href="{{url('role_read', $data->id)}}" class="avtar avtar-s btn btn-primary"><i class="ti ti-pencil f-18"></i></a></li>
                            <li class="list-inline-item m-0"><a href="{{url('role_delete', $data->id)}}" class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

=======
<div class="div_center">

<div>



  @if(session()->has('message'))

  <div class="alert alert-success">
    
  <button type="button" class="close" data-dismiss="alert" aria-hidden="True">x</button>

  
    {{session()->get('message')}}
    
  </div>

  @endif
</div>

    <h1 class="cat_label">Add Role</h1>

    <form action="{{url('role_add')}}" method="Post">

      @csrf

      <span style="padding-right: 15px;">
      <label for="">Role Name</label>
      <input type="text" name="role" required>
      </span>

      <input class="btn btn-primary" type="submit" value="Add Role">
    </form>

    <div>

    <table class="center">

    <tr>
      <th>Role Name</th>
      <th>Action</th>
    </tr>

    @foreach($data as $data)
    <tr>
      <td>{{$data->role_name}}</td>
      <td>
        <a  class="btn btn-info" href="{{url('role_read', $data->id)}}">Update</a>

        <a onclick="confirmation(event)" class="btn btn-danger" href="{{url('role_delete', $data->id)}}">Delete</a>
      </td>
    
  
    </tr>

    
    @endforeach
  
    
    </table>

    </div>

</div>

</div>
</div>
</div>
>>>>>>> fa421796470d8f6c48f09654b6a5e7d955bad27c
@endsection