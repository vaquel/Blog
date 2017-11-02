<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
    <script src="/js/blog/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

    <div>
        <ul class="nav nav-pills" style="margin-top: 2%;margin-left: 70%;">
            <li role="presentation"><a href="{{url('/')}}">Home</a></li>
            <li role="presentation" style="color: #2a88bd"><a href="https://github.com/vaquel">GitHub</a></li>
            <li role="presentation"><a href="{{url('/about')}}">AboutMe</a></li>
            <li role="presentation"><a href="#">Links</a></li>
        </ul>
    </div>
    <hr>


<section id="main-content">
    @yield('content')
</section>


</body>

</html>
