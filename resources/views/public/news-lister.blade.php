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


    <h1>Mes News !</h1> 
    <ul>
        @foreach ($semaines as $item)

        <li>{{$item->jour}}</li>
            
        @endforeach
    </ul>
    @forelse ($actus as $actu)

    <!-- component -->
<div class="bg-white">
    
    <div class="container mx-auto px-6 py-1">
    <div class="mx-auto sm:w-6/12 lg:w-5/12 xl:w-[30%]">
        <a href="{{route('public-news-detail',['actu'=>$actu])}}">
            <div class="mt-4">
            <div class="relative flex flex-col justify-end overflow-hidden rounded-b-xl pt-6">
                <div class="group relative flex cursor-pointer justify-between rounded-xl bg-amber-200 before:absolute before:inset-y-0 before:right-0 before:w-1/2 before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-amber-600 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
                <div class="relative  space-y-1 p-4">
                    <h4 class="text-lg text-amber-900">{{$actu->titre}}</h4>
                    <div class="relative h-6 text-amber-800 text-sm">
                    <span class="transition duration-300 group-hover:invisible group-hover:opacity-0">{{$actu->created_at}}</span>
                    </div>
                </div>
                <img class="absolute bottom-0 right-6 w-[6rem] transition duration-300 group-hover:scale-[1.4]" src="{{Storage::url($actu->image)}}" alt="" />
                </div>
            </div>
            </div>
        </a>
    </div>
    </div>
</div>
        
    @empty

        <h2>Pas d'actualités !</h2>

    @endforelse


</body>
</html>



    
