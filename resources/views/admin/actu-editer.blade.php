<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Editer
                </div>
            </div>
        </div>
    </div>
    {{-- formulaire pour ajouter --}}
       
{{-- <form method="POST" action="{{route("admin-actu-editer")}}" enctype="multipart/form-data" >
    @csrf

    <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
      <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
        <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">ADD POST </h1>
        <div class="space-y-4">
          <div>
            <label for="title" class="text-lx font-serif">Titre:</label>
            <input value="{{$actu->titre}}" type="text" placeholder="Saisissez votre titre" name="titre" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          </div>
          <div>
            <label for="description" class="block mb-2 text-lg font-serif">Description:</label>
            <textarea  name="description" cols="30" rows="10" placeholder="whrite here.." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md">{{$actu->description}}</textarea>
          </div>
          <div>
              <label for="image"  type="file">Mettre une image :</label>
              <input type="file" name="imageActu">
          </div>
          <button type="submit" class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  ">Ajouter mon Actualité</button>
        </div>
      </div>
    </div>
  </form> --}}
{{-- formulaire pour modifier--}}  


  @if (isset($actu))

        <form method="POST" action='{{route('admin-actu-editer')}}' enctype="multipart/form-data" >
            
  @else

        <form method="POST" action='{{route('admin-actu-modifier',['actu'=>$actu])}}' enctype="multipart/form-data" >
            
  @endif

    
  @csrf
    <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
      <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
        <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">ADD POST </h1>
        <div class="space-y-4">
          <div>
            <label for="title" class="text-lx font-serif">Titre:</label>
            <input value="{{$actu->titre}}" type="text" placeholder="Saisissez votre titre" name="titre" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          </div>
          <div>
            <label for="description" class="block mb-2 text-lg font-serif">Description:</label>
            <textarea  name="description" cols="30" rows="10" placeholder="whrite here.." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md">{{$actu->description}}</textarea>
          </div>
          <div>
              <label for="image"  type="file">Mettre une image :</label>
              <input type="file" name="imageActu">
          </div>
          <button type="submit" class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  ">Ajouter mon Actualité</button>
        </div>
      </div>
    </div>
  </form>

  


</x-app-layout>
