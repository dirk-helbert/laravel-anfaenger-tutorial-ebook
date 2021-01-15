<!DOCTYPE html>
<html lang="de">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Demo Laravel</title>
   <link rel="stylesheet" href="{{ mix('css/app.css') }}">
   <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
   <nav id="header" class="fixed w-full z-10 top-0">
       <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
           <div class="pl-4">
               <a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="/">
                   Demo Laravel
               </a>
           </div>
           <div class="block lg:hidden pr-4">
               <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
                   <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                       <title>Menu</title>
                       <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                   </svg>
               </button>
           </div>
           <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
               <ul class="list-reset lg:flex justify-end flex-1 items-center">
                   <li class="mr-3">
                       <a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="/kontakt">Kontakt</a>
                   </li>
                   <li class="mr-3">
                       <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/imprint">Impressum</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>
 
   <div class="container w-full md:max-w-3xl mx-auto pt-20">
       @yield('content')
   </div>
 
   <footer class="py-8">
 
   </footer>
</body>
</html>