<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container p-5 mt-5 border">
        <div class="row">
            <div class="col">
                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    {{--  <input type="hidden" name="_token" value="{{ csrf_token() }}">  --}}
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>

</body>
</html>
