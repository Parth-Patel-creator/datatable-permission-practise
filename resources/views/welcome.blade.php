<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>yajra</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   
</head>

<body>


    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

    </script>
</body>

</html>
