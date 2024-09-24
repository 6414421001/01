@extends('layouts.app') 
    @section('kuy')
        h
    @endsection
<!--การ์ด1-->

<div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-50 mt-10 ">
  @foreach ($Mus as $item)
    <div aria-label="card" class="p-9 rounded-3xl  max-w-sm w-full ">
      <div class="bg-black rounded-lg p-4 flex justify-center items-center shadow-lg shadow-cyan-500/50">
        <div class=" p-8 rounded-lg shadow-md w-80">
          <!-- Album Cover -->
          <iframe width="655" height="368" src="https://www.youtube.com/embed/{{$item->camp_name}}" title="รักเอ๋ย - ธงไชย แมคอินไตย์ (เพลงจากละครพนมนาคา) [OFFICIAL MV]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen alt="idk - Highvyn, Taylor Shin" class="w-64 h-64 mx-auto rounded-lg mb-4 shadow-lg shadow-teal-50"></iframe>
          <!-- Song Title -->
          <h2 class="text-white font-semibold text-center">{{$item->music_name}} </h2>
          <!-- Artist Name -->
          <!-- Music Controls -->
          
          <!-- Progress Bar -->
          <div class="mt-6 bg-gray-200 h-2 rounded-full">
            <div class="bg-teal-800 h-2 rounded-full w-1/2"></div>
          </div>
          <!-- Time Information -->
          <div class="flex justify-between mt-2 text-sm text-white">
           
          </div>
          
            
        
          </div>
          
        </div>
        
      </div>
      @endforeach
        </div>
        
        