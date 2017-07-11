<!DOCTYPE HTML>
<html>
<head>
    <script src="js/blog/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/loginTitle/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/loginTitle/demo.css"/>
    <link rel="stylesheet" type="text/css" href="css/loginTitle/linkstyles.css"/>
</head>
<body>
<video autoplay loop preload="auto" style="width:100%;" id="video" data-toggle="modal"
       data-target=".bs-example-modal-sm">
    <source src="https://t.alipayobjects.com/images/T1T78eXapfXXXXXXXX.mp4">
</video>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content" style="width: 110%">
            <div class="grid__item color-">
                <a class="link link--mallki" href="#">Vaquel<span data-letters="Vaquel"></span>
                    <span data-letters="Vaquel"></span></a>
            </div>
            <div class="form-group ">
                <input type="text" class="form-control" id="name" placeholder="Who are you">
            </div>
            <button type="button" class="btn btn-primary" id="enter" style="width: 100%"> Enter
            </button>
        </div>
    </div>
</div>
</body>
<script>
    $(function () {
        $('#enter').click(function () {
            var name = $('#name').val();
            if (name.length == 0) {
                alert('快点告诉我你是谁')
            } else {
                window.location.href = "{{url('me')}}"
            }
        })
    })
</script>
</html>
