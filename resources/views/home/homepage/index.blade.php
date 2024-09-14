<h2>Hi, This is home page...</h2>
<H2>Welcome, {{ Auth::user()->name ?? 'None'}}</H2>
<p><a href="{{url('log_out')}}">Logout</a></p>
