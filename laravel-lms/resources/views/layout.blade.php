<!-- in laravel, we can have components like in react 
 we can create partials where you can show your views
 we can have a "layout" that all other files will use (header, footer)-->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel LMS</title>
 </head>
 <body>
    <!-- yield means that this is a placeholder for the content that will be injected into this layout -->
    @yield('content') 
 </body>
 </html>