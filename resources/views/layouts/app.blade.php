<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Southern Mindoro Heart Center</title>

    
    <link rel="stylesheet" href="{{ ('css/style.css') }}" class="">
        

</head>
<body>
    
        <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900 pages" href="/">Home</a>
            <a class="mr-5 hover:text-gray-900 pages" href="/about">About Us</a>
            <a class="mr-5 hover:text-gray-900 pages" href="/contact">Contact</a>
            </nav>
        </div>
        </header>





        <main>
            {{ $slot }}
        </main>



</body>
</html>