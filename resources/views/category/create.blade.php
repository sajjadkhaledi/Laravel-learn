<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>

    <h1>create</h1>
    {{-- {{ dd($errors) }} --}}
{{--
    @if($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)

            <li>
                {{ $error }}
            </li>

            @endforeach

        </ul>
    </div>


    @endif --}}

    <div class="container m-5 p-5 border">
        <div class="row">
            <div class="col">
                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label for="name">name:</label>
                      <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter name" id="name">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    {{-- <input type="text" name="employees[0][firstName]">
                    <input type="text" name="employees[0][lastName]">
                    <input type="text" name="employees[1][firstName]">
                    <input type="text" name="employees[1][lastName]"> --}}

                    <label for="">image</label>
                    <input type="file" name="image" id="">

                    {{--  <div class="form-group">
                      <label for="name">description:</label>
                      <input type="text" name="description[]" value="{{ old('description') }}" class="form-control" placeholder="Enter description" id="description">
                      <input type="text" name="description[second]" value="{{ old('description') }}" class="form-control" placeholder="Enter description" id="description">
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  --}}

                 {{--  <div class="form-group">
                      <label for="name">email:</label>
                      <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter description" id="description">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <div class="form-group">
                      <label for="password">password:</label>
                      <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Enter password" id="password">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <div class="form-group">
                      <label for="password">confirm password:</label>
                      <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" placeholder="Enter password" id="password">
                    </div>
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  --}}


                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>
