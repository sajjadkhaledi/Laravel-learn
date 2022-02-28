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
                <form action="{{ route('testLogin.store') }}" method="post">
                    @csrf

                  <div class="form-group">
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




                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>
