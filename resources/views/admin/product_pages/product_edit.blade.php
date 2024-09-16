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
                <h1 class="m-0">Edit Product</h1>
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
                <label>Title<span style="color: red;">*</span></label>
                <input type="text" class="form-control" value="{{old('title')}}" name="title" required placeholder="Enter Product Title">
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