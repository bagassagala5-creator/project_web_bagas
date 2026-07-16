<!DOCTYPE html>
<html>
<head>
    <title>Keahlian</title>
</head>
<body>

<h1>Keahlian</h1>

<ul>
    @foreach($skill as $s)
        <li>{{ $s }}</li>
    @endforeach
</ul>

<a href="/">Kembali ke Home</a>

</body>
</html>