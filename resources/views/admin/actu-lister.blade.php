<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 pb-8">
                    Liste d'actualitées !
                </div>
                @forelse ($actus as $actu)
                <div class="  py-5 flex flex-col gap-4 items-center justify-center bg-white">

                    <!-- Card 1 -->
                    <a href='{{route('admin-actu-modifier',['actu'=>$actu])}}' class="w-[30rem] border-2 border-b-4 border-gray-200 rounded-xl hover:bg-gray-50">
                  
                      <!-- Badge -->
                      <p class="bg-sky-500 w-fit px-4 py-1 text-sm font-bold text-white rounded-tl-lg rounded-br-xl">{{$actu->created_at}}</p>
                  
                      <div class="grid grid-cols-6 p-5 gap-y-2">
                  
                        <!-- Profile Picture -->
                        <div>
                             @if ((isset($actu->image)))

                                <img src="{{Storage::url($actu->image)}}" class="max-w-16 max-h-16 rounded-full" />

                            @endif 
                        </div>
                  
                        <!-- Description -->
                        <div class="col-span-5 md:col-span-4 ml-4">
                  
                          <p class="text-sky-500 font-bold text-xl "> {{$actu->titre}} </p> <br>
                  
                          
                        </div>
                  
                        <!-- Price -->
                        <div class=" ml-4 md:col-start-auto md:ml-0 md:justify-end flex space-x-2">
                          <p class="rounded-lg text-sky-500 font-bold bg-sky-100  py-1 px-3 text-sm w-fit h-fit"> Modifier</p>
                  
                            
                          </div>
                      </div>
                  
                    </a>

                </div>

                <div class=" py-5 flex items-center justify-center rounded-lg text-sky-500 font-bold bg-sky-100  text-sm ">

                    <a  href="{{route("admin-actu-supprimer",["actu"=>$actu])}}">Supprimer</a>
                </div>
                
            @empty

                <h2>Pas d'actualités !</h2>

            @endforelse
            </div>
        </div>
    </div>

   




</x-app-layout>
