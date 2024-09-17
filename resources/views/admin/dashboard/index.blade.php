<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.dashboard.css')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('admin.dashboard.navbar')
    @include('admin.dashboard.sidebar')
    @include('admin.dashboard.content_wrapper')
    @include('admin.dashboard.main_content')
    @include('admin.dashboard.footer')
</div>
</body>
</html>