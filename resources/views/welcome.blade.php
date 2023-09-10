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

            <section class="text-gray-600 body-font">
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                    <img class="object-cover object-center rounded" alt="hero" src="images/Logo.png">
                    </div>
                    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Southern Mindoro <br>Heart Center
                    </h1>
                    <p class="mb-8 leading-relaxed">Meet our Certified Cadiologist / Internist, Dr. Rainier Buensalida is here to guide you on your journey to a healthier heart. Trust your heart to the expert at Southern Mindoro Heart Center because your heart deserves the best care.</p>
                    <div class="flex justify-center">
                        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">About Us</button>
                        <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Contact</button>
                    </div>
                    </div>
                </div>
            </section>


            <section class="text-gray-600 body-font">
            <div class="text-center mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">About Us</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Southern Mindoro Heart Clinic Informations and Services</p>
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -m-4">
                    <div class="p-4 lg:w-1/3">
                        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Why Choose Us?</h1>
                        <p class="leading-relaxed mb-3 flex items-start">
                            <span class="inline-block align-top mr-2 text-green-500">&#10003;</span>
                            Expertise
                        </p>
                        <p class="leading-relaxed mb-3 flex items-start">
                            <span class="inline-block align-top mr-2 text-green-500">&#10003;</span>
                            Comprehensive State-of-the-art heart tests
                        </p>
                        <p class="leading-relaxed mb-3 flex items-start">
                            <span class="inline-block align-top mr-2 text-green-500">&#10003;</span>
                            Compassionate Care
                        </p>
                        </div>
                    </div>
                    
                    <div class="p-4 lg:w-1/3">
                        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Our Services Include:</h1>
                        <p class="leading-relaxed mb-3 flex items-start">
                            <span class="inline-block align-top mr-2 text-green-500">&#10003;</span>
                            Comprehensive Cardiac Consultations
                        </p>
                        <p class="leading-relaxed mb-3 flex items-start">
                            <span class="inline-block align-top mr-2 text-green-500">&#10003;</span>
                            Advance Heart Diagnostic Tests
                        </p>
                        <p class="leading-relaxed mb-3 flex items-start">
                            <span class="inline-block align-top mr-2 text-green-500">&#10003;</span>
                            Personalized Heart Health Plans
                        </p>
                        <p class="leading-relaxed mb-3 flex items-start">
                            <span class="inline-block align-top mr-2 text-green-500">&#10003;</span>
                            Medication Management
                        </p>
                        <p class="leading-relaxed mb-3 flex items-start">
                            <span class="inline-block align-top mr-2 text-green-500">&#10003;</span>
                            Expert Advice and Guidance
                        </p>
                        </div>
                    </div>

                    <div class="p-4 lg:w-1/3">
                        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Cardiologist | Internist</h1>
                        <p class="leading-relaxed mb-3 flex items-start">
                            <span class="inline-block align-top mr-2 text-green-500">&#10003;</span>
                            Dr. Rainier John Buensalida
                        </p>
                        <p class="leading-relaxed mb-3 flex items-start">
                            <span class="inline-block align-top mr-2 text-green-500">&#10003;</span>
                            Certified Cardiologist
                        </p>
                        <p class="leading-relaxed mb-3 flex items-start">
                            <span class="inline-block align-top mr-2 text-green-500">&#10003;</span>
                            Internist
                        </p>
                        </div>
                    </div>
                </div>
            </section>


        


            <section class="text-gray-600 body-font relative">
                <div class="absolute inset-0 bg-gray-300">
                <div class="absolute inset-0 bg-gray-300">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe
                                class="gmap_iframe"
                                frameborder="0"
                                scrolling="no"
                                marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=LMG Gas Station, Roxas&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
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
                    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
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
            


            <footer class="text-gray-600 body-font">
                <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl">Tailblocks</span>
                    </a>
                    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 Tailblocks —
                    <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@knyttneve</a>
                    </p>
                    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                    </span>
                </div>
            </footer>

            

    </body>
</html>


