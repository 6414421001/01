<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>สวัสดีจ้าา</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Noto+Sans+Thai:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
body {
    font-family: 'Kanit', sans-serif;
    font-family: 'Noto Sans Thai', sans-serif; 
    
}
</style>
<body class="bg-black">
    
    <div class="w-2/3 mx-auto my-10" >
        <div class="row">
            <div class="">
                <div class="text-center text-white p-4 font-bold">
                    <h1>เทศกาล</h1>
                </div>
                <div class="">
                    <a class="font-bold rounded text-xs bg-blue-500 hover:bg-green-500/80 text-white p-4" href="{{ route('Mu.create') }}"> Create item</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
  <div class="bg-white shadow-md rounded my-6">
    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
      <thead>
        <tr>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b ">S.No</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b ">Mu Name</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b ">Mu Name</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b ">Mu Name</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b ">Actions</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($Mus as $item)
        <tr class="hover:bg-grey-lighter">
        <td class="py-4 px-6 border-b ">{{ $item->id }}</td>
        <td class="py-4 px-6 border-b ">{{ $item->album_name }}</td>
        <td class="py-4 px-6 border-b ">{{ $item->camp_name }}</td>
        <td class="py-4 px-6 border-b ">{{ $item->music_name }}</td>


        <td class="py-4 px-6 border-b ">

        <form action="{{ route('Mu.destroy',$item->id) }}" method="Post"><div class="flex items-center">
         
         
            <div class="mx-1">
              <a class="font-bold rounded text-xs bg-blue-500 hover:bg-green-500/80 text-white p-4" href="{{ route('Mu.edit',$item->id) }}">Edit</a>
              </div>
              @csrf
              @method('DELETE')
              <div class="mx-1">
              <button type="submit" class="font-bold rounded text-xs bg-red-500 hover:bg-red-500/80 text-white p-4">Delete</button>
         </div>
      </form> 
        
        </tr>
        
         @endforeach
      </tbody>
      
    </table>
    <div class="pull-right">
      <a class="btn btn-primary" href="{{ url('/kuy01') }}"> Back</a>
  </div>
  </div>
   {!! $Mus->links() !!}
</div>
       
</body>
</html>


