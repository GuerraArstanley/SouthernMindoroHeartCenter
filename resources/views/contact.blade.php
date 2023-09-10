<x-app-layout>
    
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Southern Mindoro Heart Center</title>


        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ ('css/style.css') }}" class="">
        



</head>
<body class="antialiased">

            <section class="text-gray-600 body-font relative">
                <div class="absolute inset-0 bg-gray-300">
                <div class="absolute inset-0 bg-gray-300">
                <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe
                                class="gmap_iframe"
                                width="100%"
                                frameborder="0"
                                scrolling="no"
                                marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Lmg%20Gas%20Station,%20Roxas,%20Oriental%20Mindoro&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            ></iframe>
                            <a href="https://gachanymph.com/">Gacha Nymph APK</a>
                        </div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                width: 100%;
                                height: 100%;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                width: 100%;
                                height: 100%;
                            }

                            .gmap_iframe {
                                width: 100% !important;
                                height: 100% !important;
                            }
                        </style>
                    </div>



                </div>
                </div>
                <div class="container px-5 py-24 mx-auto flex">
                    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md bg-opacity-75">
                    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">EMAIL</h2>
                    <p class="leading-relaxed mb-5 text-gray-600">southernmindoroheartclinic@gmail.com</p>
                    <div class="relative mb-4">
                        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">ADRESS</h2>
                        <p class="leading-relaxed mb-5 text-gray-600">Inside LMG Gas Station, Bagumbayan, Roxas, Oriental Mindoro</p>
                    </div>
                    <div class="relative mb-4">
                        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">PHONE</h2>
                        <p class="leading-relaxed mb-5 text-gray-600">09XX XXX XXXX</p>
                    </div>
                    
                    </div>
                </div>
            </section>
            


            

            

</body>
</html>


</x-app-layout>