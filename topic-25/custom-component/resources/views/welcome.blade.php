<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Custom Input Component</title>
    </head>
    <body>
        <div id="app">
            <!-- <input type="text" v-model="coupon"> -->
            <!-- <input type="text" :value="coupon" @input="coupon = $event.target.value"> -->
            <coupon v-model="coupon"></coupon>
        </app>

        <script type="application/javascript" src="https://unpkg.com/vue@2.6.11/dist/vue.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
