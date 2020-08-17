<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carousel Slider</title>
    </head>
    <body>
    <div id="app">
        <carousel :autoplay="true">
            <img src="http://placeimg.com/640/480/any">
            <img src="http://placeimg.com/640/480/any?2">
            <img src="http://placeimg.com/640/480/any?3">
            <img src="http://placeimg.com/640/480/any?4">
            <img src="http://placeimg.com/640/480/any?5">
        </carousel>

    </div>

    <script src="/js/app.js"></script>
    </body>
</html>
