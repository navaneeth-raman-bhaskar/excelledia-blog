<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta id="csrf" data-token="{{csrf_token()}}">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
@yield('content')
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('#csrf').data('token')
            },
            statusCode: {
                401: function () {
                    location.reload()
                },
                419: function () {
                    location.reload()
                }
            }
        })
    })
</script>
@stack('js')

</html>
