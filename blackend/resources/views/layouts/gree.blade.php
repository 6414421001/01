<!--การ์ด1-->

<div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4 mt-10 ">  
  @foreach ($Albums as $item)
<a href="{{ url('album', $item->album_name)}}">
    <div aria-label="card" class="p-2 rounded-3xl bg-white max-w-sm w-full">
      <div class="bg-black rounded-lg p-5 flex justify-center items-center ">
        <div class=" p-8 rounded-lg shadow-md w-80">
          <!-- Album Cover -->
          <img src="{{ $item->album_pdf }}" alt="idk - Highvyn, Taylor Shin" class="w-64 h-64 mx-auto rounded-lg mb-4 shadow-lg shadow-teal-50">
          <!-- Song Title -->
          <h2 class="text-white font-semibold text-center">{{ $item->album_name}}</h2>
       
     
          <div class="w-full  flex items-center">
        <button class="mt-140 p-4 rounded-full bg-gray-200 hover:bg-gray-300 focus:outline-none mx-auto  items-center">
            <svg width="40px" height="40px" viewBox="0 0 24 24" class="w-6 h-6 text-gray-600" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M2 6C2 4.11438 2 3.17157 2.58579 2.58579C3.17157 2 4.11438 2 6 2C7.88562 2 8.82843 2 9.41421 2.58579C10 3.17157 10 4.11438 10 6V18C10 19.8856 10 20.8284 9.41421 21.4142C8.82843 22 7.88562 22 6 22C4.11438 22 3.17157 22 2.58579 21.4142C2 20.8284 2 19.8856 2 18V6Z" fill="#000000"></path>
                <path d="M14 6C14 4.11438 14 3.17157 14.5858 2.58579C15.1716 2 16.1144 2 18 2C19.8856 2 20.8284 2 21.4142 2.58579C22 3.17157 22 4.11438 22 6V18C22 19.8856 22 20.8284 21.4142 21.4142C20.8284 22 19.8856 22 18 22C16.1144 22 15.1716 22 14.5858 21.4142C14 20.8284 14 19.8856 14 18V6Z" fill="#000000"></path>
              </g>
            </svg>
          </button>
          </div>
          
        </div>
        
      </div>
      
        </div>
      </a>
      
      @endforeach

       