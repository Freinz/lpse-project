@extends('layouts.main')

@section('title', 'User List')
@section('breadcrumb-item', 'Profile')

@section('breadcrumb-item-active', 'User List')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@section('css')
<link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}" >

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
@endsection

@section('content')
      <!-- [ Main Content ] start -->
    
      <div class="div_center">

<div>



  @if(session()->has('message'))

  <div class="alert alert-success">
    
  <button type="button" class="close" data-dismiss="alert" aria-hidden="True">x</button>

  
    {{session()->get('message')}}
    
  </div>

  @endif
</div>

    <h1 class="cat_label">Add Category</h1>

    <form action="{{url('cat_add')}}" method="Post">

      @csrf

      <span style="padding-right: 15px;">
      <label for="">Category Name</label>
      <input type="text" name="category" required>
      </span>

      <input class="btn btn-primary" type="submit" value="Add Category">
    </form>

    <div>

    <table class="center">

    <tr>
      <th>Category Name</th>
      <th>Action</th>
    </tr>

    @foreach($data as $data)
    <tr>
      <td>{{$data->cat_title}}</td>
      <td>
        <a  class="btn btn-info" href="{{url('cat_read', $data->id)}}">Update</a>

        <a onclick="confirmation(event)" class="btn btn-danger" href="{{url('cat_delete', $data->id)}}">Delete</a>
      </td>
    
  
    </tr>

    
    @endforeach
  
    
    </table>

    </div>

</div>

</div>
</div>
</div>

      <!-- [ Main Content ] end -->

@endsection

@section('scripts')
<script type="text/javascript">

function confirmation(ev) {
  ev.preventDefault();
  var urlToRedirect = ev.currentTarget.getAttribute('href');
  console.log(urlToRedirect);

  swal ({
    title: "Are you sure to Delete This",
    text : "You will not be able to revert this!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })

  .then((willCancel) => {
    if (willCancel) {
      window.location.href = urlToRedirect;
    }

  });
}

</script>
  <!-- [Page Specific JS] start -->
  <script src="{{ URL::asset('build/js/plugins/simple-datatables.js') }}"></script>
  <script>
    const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
      sortable: false,
      perPage: 5
    });
  </script>
  <!-- [Page Specific JS] end -->
@endsection