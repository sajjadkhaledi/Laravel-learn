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
                <form action="{{ route('category.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                      <label for="name">name:</label>
                      <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter name" id="name">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                      <label for="name">description:</label>
                      <input type="text" name="description" value="{{ old('description') }}" class="form-control" placeholder="Enter description" id="description">
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                 <div class="form-group">
                      <label for="name">hassan:</label>
                      <input type="text" name="hassan" value="{{ old('hassan') }}" class="form-control" placeholder="Enter description" id="description">
                    </div>
                    @error('hassan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                 <div class="form-group">
                      <label for="name">email:</label>
                      <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter description" id="description">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>
