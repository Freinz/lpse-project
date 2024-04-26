@extends('layouts.main')

@section('title', 'Form Elements')
@section('breadcrumb-item', 'Forms')

@section('breadcrumb-item-active', 'Input User')

@section('css')
@endsection

@section('content')
      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>User Control</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="{{url('store_user')}}" method="Post" enctype="multipart/form-data">

                  @csrf

                    <div class="form-group">
<<<<<<< HEAD
                      <label class="form-label" for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="user_name"
                        placeholder="Enter Nama">
                    </div>
                    
                    <div class="form-group">
                      <label class="form-label" for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" name="email"
                        placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                      <label class="form-label">Role User</label>
<br>
                      <select class="btn btn-light-secondary" name="role" required>

                      <option >Select Role</option>
                      @foreach($data as $data)

                      <option  value="{{$data->id}}">{{$data->role_user}}</option>

                      @endforeach
                      </select>

                    </div>

                    <div class="form-group">
                      <label class="form-label" for="exampleInputPassword1">Alamat</label>
                      <input type="text" class="form-control" name="address_user" placeholder="Masukkan Alamat">
                    </div>

                   

                    <div class="form-group">
                      <label class="form-label" for="exampleInputPassword1">No Handphone</label>
                      <input type="number" class="form-control" name="phone_user" placeholder="No Handphone" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mb-4">Submit</button>
                  
                </div>
                
                <div class="col-md-6">
            

                  <div class="form-group">
                    <label class="form-label">NIP</label>
                    <input type="number" class="form-control" name="nip" placeholder="NIP">
                  </div>
                  <div class="form-group">
                    <label class="form-label">No KTP</label>
                    <input type="number" class="form-control" name="no_ktp" placeholder="No KTP">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                  </div>
                </form>
                  </div>
=======
                      <label class="form-label" for="exampleInputEmail1">User Name</label>
                      <input type="text" class="form-control" name="user_name"
                        placeholder="Enter User Name">
                    
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputPassword1">Role User</label>
                      <input type="text" class="form-control" name="role_user" placeholder="Role User">
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputPassword1">Address</label>
                      <input type="text" class="form-control" name="address_user" placeholder="Address User">
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputPassword1">Phone</label>
                      <input type="text" class="form-control" name="phone_user" placeholder="Phone">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mb-4">Submit</button>
                  </form>
                </div>
                
                  </form>
>>>>>>> fa421796470d8f6c48f09654b6a5e7d955bad27c
                
        <!-- [ form-element ] end -->
      </div>
@endsection
<<<<<<< HEAD

=======
>>>>>>> fa421796470d8f6c48f09654b6a5e7d955bad27c
