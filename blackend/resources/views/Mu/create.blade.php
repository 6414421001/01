<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add promotion Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body >
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>ใส่เพลง</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('Mu.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('Mu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="">ชื่ออัลบั้ม</label>
                        <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="album_name" type="text" placeholder="ชื่ออัลบั้ม">
                        @error('album_name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <label for="">ชื่อเพลง</label>
                        <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="music_name" type="text" placeholder="ชื่อเพลง">
                        @error('music_name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <label for="">ยูปทูปหลัง=</label>
                        <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="camp_name" type="text" placeholder="ยูทูป">
                        @error('camp_name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <label for="">วันที่ลง</label>
                        <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="person_date" type="date" placeholder="วันที่">

                        @error('person_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">ตกลง</button>
            </div>
        </form>
    </div>

</html>