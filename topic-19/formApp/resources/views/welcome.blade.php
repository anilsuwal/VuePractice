<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shared state 24</title>

        <style>
           
        </style>
    </head>
    <body>
    <div id="one">
        <h1>
        @{{ shared.user.name }}
</h1>
        </div>
        <div id="two"> 
            <h1>
        @{{ shared.user.name }}
</h1>
        </div>


        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@2.6.11/dist/vue.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
