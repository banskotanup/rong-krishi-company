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
                <h1 class="m-0">Add New Member</h1>
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
                <input type="text" class="form-control" value="{{old('name')}}" name="name" required placeholder="Enter name">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" value="{{old('email')}}" name="email" required placeholder="Enter email">
                <div style="color: red;">{{$errors->first('email')}}</div>
            </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required placeholder="Enter password">
            </div>
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="{{(old('status') == 0) ? 'selected' : ''}}" value="0">Active</option>
                    <option value="{{(old('status') == 1) ? 'selected' : ''}}" value="1">Inactive</option>
                </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
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