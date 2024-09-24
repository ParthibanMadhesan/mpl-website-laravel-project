<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mpl</title>
    <link href='https://fonts.googleapis.com/css?family=Hanken Grotesk' rel='stylesheet'>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="bg-gray-700 text-white font-hanken-grotesk">
    <div class="px-10">

        <nav class="flex justify-between items-center py-4 border-b border-white/10">
              <div>
               <a href="/">
                <img src="{{ Vite::asset('resources/images/logo-color.svg') }}" alt="" width="50" height="50">
               </a>
              </div>
              <div class="space-x-5 font-bold " >
                  <a href="">jobs</a>
                  <a href="">carriers</a>
                  <a href="">salary</a>
                  <a href="">companies</a>
              </div>
              @auth
              <div class="space-x-5 font-bold flex">
                 <a href="/jobs/create">post a job</a>
                 <form method="post" action="/logout">
                  @csrf
                  @method('delete')
                 <button>Logout</button>
                </form>
                
              </div>
              @endauth

              @guest
              <div class="space-x-5 font-bold">
                  <a href="/register">signup</a>
                  <a href="/login">login</a>
              </div>
              @endguest
              
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">

            {{$slot}}
        </main>
    </div>
    
</body>
</html>