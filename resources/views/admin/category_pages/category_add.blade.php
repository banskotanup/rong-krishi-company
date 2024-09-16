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
                <h1 class="m-0">Add New Category</h1>
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
                <label>Category Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" value="{{old('name')}}" name="name" required placeholder="Enter category name">
              </div>

              <div class="form-group">
                <label>Slug <span style="color: red;">*</span></label>
                <input type="text" class="form-control" value="{{old('slug')}}" name="slug" required placeholder="Enter slug Ex. URL">
              </div>
              <div style="color: red;">{{$errors->first('slug')}}</div>

              <div class="form-group">
                <label>Status <span style="color: red;">*</span></label>
                <select class="form-control" name="status">
                    <option value="{{(old('status') == 0) ? 'selected' : ''}}" value="0">Active</option>
                    <option value="{{(old('status') == 1) ? 'selected' : ''}}" value="1">Inactive</option>
                </select>
              </div>

              <div class="form-group">
                <label>Meta Title <span style="color: red;">*</span></label>
                <input type="text" class="form-control" value="{{old('meta_title')}}" name="meta_title" required placeholder="Meta title">
              </div>

              <div class="form-group">
                <label>Meta Description</label>
                <textarea class="form-control" name="meta_description" placeholder="Meta description">{{old('meta_description')}}</textarea>
              </div>

              <div class="form-group">
                <label>Meta Keywords</label>
                <input type="text" class="form-control" value="{{old('meta_keywords')}}" name="meta_keywords" placeholder="Meta keywords">
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