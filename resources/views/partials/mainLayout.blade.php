<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include("partials.head")

@include("partials.styles")
<body class="antialiased">

@include("partials.nav")

@yield("content")

@include("partials.footer")

@include("partials.bootstrapScripts")
</body>
</html>

