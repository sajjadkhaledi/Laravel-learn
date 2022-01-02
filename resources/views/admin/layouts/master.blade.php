<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'عنوان')
    </title>
    @section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    @show
    @yield('style')
</head>
<body>

    {{-- @include('admin.layouts.sidebar') --}}
    {{-- @include('admin.layouts.sidesadsdasdasdasbar') --}}
    {{-- @includeIf('admin.layouts.sidesadsdasdasdasbar') --}}
        {{-- @include('admin.layouts.sidebar', ['some' => 'data']) --}}
        {{-- @includeWhe(true ,'admin.layouts.sidebar', ['some' => 'data']) --}}

        {{-- @includeWhe($user->age >= 18 ,'admin.layouts.sidebar', ['some' => 'data']) --}}

        @if(count($projectes) > 0)
        <ul>
            @foreach ($projects as $projecte)
                @include('admin.layouts.patials.error', $projecte)
            @endforeach
        </ul>
        @else
        @include('admin.layouts.patials.none-error')
        @endif


        @each('admin.layouts.partials.error', $projectes , 'project', 'admin.layouts.patials.none-error');




    <div class="container">
        @yield('content')

    </div>

    @yield('script')
</body>
</html>
