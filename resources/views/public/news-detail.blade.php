<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes News !</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>


    <h1>Mes Details !</h1> 

    <!-- component -->
<!-- component -->
<div class="mx-auto px-4 py-8 max-w-xl my-20">
    <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide" >
        <div class="md:flex-shrink-0">
            <img src="{{Storage::url($actu->image)}}" alt="mountains" class="w-full h-64 rounded-lg rounded-b-none">
        </div>
        <div class="px-4 py-2 mt-2">
            <h2 class="font-bold text-2xl text-gray-800 tracking-normal">{{$actu->titre}}</h2>
                <p class="text-sm text-gray-700 px-2 mr-1">
                    {{$actu->description}}
                </p>
           
            <div class="author flex items-center -ml-3 my-3">
                <div class="user-logo">
                    <img class="w-12 h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80" alt="avatar">
                </div>
                <h2 class="text-sm tracking-tighter text-gray-900">
                    <a href="#">By Millions Stéphen !</a> <span class="text-gray-600">05 05 2022.</span>
                </h2>
            </div>
        </div>
    </div>
</div>


    
</body>
</html>



    
