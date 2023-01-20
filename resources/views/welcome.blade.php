<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>DC COMICS</title>

  {{-- Viene caricato il JS ed anche il file app.scss --}}
  @vite('resources/js/app.js')
</head>

<body>

  {{-- header --}}
  @include('partials.header')
  @include('partials.jumbotron')
  @include('partials.card-section')
  @include('partials.blue-section')
  <div class="container">
    {{-- segnaposto per il contenuto di ogni pagina.
        Questo dovrà essere sostituito in ogni pagina con un contenuto diverso --}}
    @yield('content')
  </div>

  {{-- footer --}}
  @include('partials.commercial-section')
  @include('partials.footer')

</body>

</html>