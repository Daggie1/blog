
<!DOCTYPE html>
<html>
<head>
    <link href="{{URL:: to('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL:: to('css/main.css')}}" rel="stylesheet">
    @yield('styles')
	<title>
        @yield('title')
    </title>
</head>
<body background="#BB7E5D">

<main role="main" class="container">
<div class="row">
    <div class="col-md-8">
        @yield('content')
    </div>

        <div class="col-md-4">
            <div class="content-section">
                <h3>Others</h3>
                <p class='text-muted'>Use this links to do more
                <ul class="list-group">
                    <li class="list-group-item list-group-item-light">Latest Posts</li>
                    <li class="list-group-item list-group-item-light">Announcements</li>
                    <li class="list-group-item list-group-item-light">Calendars</li>
                    <li class="list-group-item list-group-item-light">Contact us</li>
                </ul>
                </p>
            </div>
        </div>
        @yield('updates')
    </div>
</div>
</main>
<script src="{{URl:: to('js/jquery-1.8.3.min.js')}}"></script>
<script src="{{URl:: to('js/bootstrap.bundle.min.js')}}"></script>
@yield('scripts')
</body>
</html>
