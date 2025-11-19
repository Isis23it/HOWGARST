<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Harry Potter API - Laravel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 20px;
    }

    .nav {
      margin-bottom: 20px;
    }

    .nav a {
      margin-right: 10px;
      text-decoration: none;
      color: #333;
    }

    .card {
      background: white;
      padding: 15px;
      margin-bottom: 15px;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  <div class="nav">
    <a href="{{ route('characters.index') }}">Personajes</a>
    <a href="{{ route('spells.index') }}">Hechizos</a>
  </div>

  @yield('content')
</body>

</html>