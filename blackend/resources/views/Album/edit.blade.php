<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Album Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Album</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('Album.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{ route('Album.update', $Album->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Album Name:</strong>
                        <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="album_pdf" type="text" placeholder="Product Type Name" value="{{ $Album->album_pdf}}">
                        <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="album_name" type="text" placeholder="Product Type Name" value="{{ $Album->album_name}}">
                        <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="person_name" type="text" placeholder="Product Type Name" value="{{ $Album->person_name}}">
                        <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="song_date" type="date" placeholder="Product Type Name" value="{{ $Album->song_date}}">

                    
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
    
</body>

</html>