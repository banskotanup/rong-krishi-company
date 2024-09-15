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
            <div class="col-sm-12">
                <h1 class="m-0">Edit Admin</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- add admin tables --}}
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <!-- /.card-header -->
          <!-- form start -->
          <form action="" method="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="{{$getRecords->name}}" name="name" required placeholder="Enter name">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" value="{{$getRecords->email}}" name="email" required placeholder="Enter email">
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control"  name="password" placeholder="Enter password">
                    <p>Do you want to change password? If so, please add!!!</p>
                </div>
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option {{($getRecords->status == 0) ? 'selected' : ''}} value="0">Active</option>
                    <option {{($getRecords->status == 1) ? 'selected' : ''}} value="1">Inactive</option>
                </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
    </div>   
    {{-- add admin table-end --}}
            <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
            <!-- /.card-body -->
    </div>

    @include('admin.dashboard.footer')
</body>
</html>