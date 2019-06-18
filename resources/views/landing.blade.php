<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta
    name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
  >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }} API</title>
  <style>
    html {
      height: 100%;
      font-size: 16px;
    }

    body {
      margin: 0;
      display: flex;
      height: 100%;
    }

    div {
      margin: auto;
    }

    a {
      margin-top: 2rem;
      display: block;
      text-align: center;
      font-family: sans-serif;
      color: #1CCE92;
      text-transform: uppercase;
      letter-spacing: .1rem;
      text-decoration: none;
      font-size: 1.25rem;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div>
    <img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }} logo">

    <a href="/docs">API Docs</a>
  </div>
</body>
</html>
