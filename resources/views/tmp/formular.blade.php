<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formular</title>

</head>

<body>
<h1>Formular</h1>

<form method="post" action="/data">
    {{csrf_field()}} <!-- wird benötigt zwegs Sicherheit -->
    <input type="text" name="eingabe">
    <input type="submit" value="Los..!">

</form>
</body>
