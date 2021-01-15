@extends('layouts.app')
@section('content')
<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
   <div class="font-sans">
               <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">Kontakt</h1>
   </div>
   <p class="py-6 ">
       <form method="post" action="/kontakt">
           {{ csrf_field() }}
           <label class="block">
               <span class="text-gray-700">Name</span>
               <input class="h-12 border px-4 block w-full" placeholder="Name" name="name">
           </label>
           <label class="block mt-4">
               <span class="text-gray-700">E-Mail</span>
               <input class="h-12 border px-4 block w-full" placeholder="E-Mail" name="email">
           </label>
           <label class="block mt-4">
               <span class="text-gray-700">Nachricht</span>
               <textarea class="h-48 border px-4 block w-full" name="message"></textarea>
           </label>
           <button type="submit" class="border px-4 py-2 mt-2 bg-blue-500 text-white">Absenden</button>
       </form>
   </p>
 
</div>
@endsection
