<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.dashboard.css')
<body class="hold-transition sidebar-mini">
    @include('admin.dashboard.navbar')
    @include('admin.dashboard.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Admin List</h1>
            </div><!-- /.col -->
            <div class="col-sm-6" style="text-align:right;">
                <a href="{{url('/admin_add')}}" class="btn btn-primary">Add New Admin</a>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    {{-- tables --}}
    @include('admin.auth.message')
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Admin List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th >Status</th>
                  <th style="text-align: center;">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($getRecords as $value)
                <tr>
                  <td>{{$value->id}}</td>
                  <td >{{$value->name}}</td>
                  <td >{{$value->email}}</td>
                  <td>{{($value->status == 0) ? 'Active' : 'Inactive'}}</td>
                  <td style="text-align: center;">
                    <a href="{{url('/admin_edit/'.$value->id)}}" class="btn btn-primary" style="width: 100px;">Edit</a>
                    <a href="{{url('/admin_delete/'.$value->id)}}" class="btn btn-danger" style="width: 100px;">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
    {{-- table-end --}}

    @include('admin.dashboard.footer')
</body>
</html>