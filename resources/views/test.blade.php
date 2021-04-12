<h1>Welcome!</h1>
<h1>{{ auth()->user()->name }}</h1>

<p><a href="{{ url('http://localhost/my_laravel_project/public/get_started') }}">Second page</a></p>
<p><a href="{{route('user.logout') }}">Logout</a></p>

