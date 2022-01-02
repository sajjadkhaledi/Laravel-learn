<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>hi from index</h1>

    {{-- <h1>
        <?php
            // echo $var ?? '';
            // echo $var ;
            ?>
    </h1> --}}

    <h1>
        <?php
            // echo $id;
            // echo session('status');
            ?>
    </h1>

    {{--  <a href="{{ route('category.create') }}">create</a>  --}}


    {{--  <?php echo 'hi' ?>  --}}
    {{--  <?= 'hi' ?>  --}}
    {{--  {{ 'hi' }}  --}}

    {{--  <?php echo htmlentities('<script>alert("hi")</script>') ?>  --}}
    {{--  {{ '<script>alert("hi")</script>' }}  --}}
    {{--  {!! '<script>alert("hi")</script>' !!}  --}}

    {{--  {{ $name }}  --}}

    {{--  <?php if(){ ?>

    <?php } ?>  --}}

    {{--  @if ($name == 'hassan')
        {{ 'salam hasssan' }}
        @elseif($name == 'ali')
        {{ 'salam ali' }}
        @else
        {{ 'slam folani' }}
    @endif  --}}


    {{--  @switch($name)
        @case('hassan')
            {{ 'salam hasssan' }}
            @break
             @case('ali')
            {{ 'salam ali' }}
            @break

        @default
        {{ 'salam folani' }}

    @endswitch  --}}


    {{--  if($name !== 'hassan')  --}}

    {{--  @unless ($name == 'hassan')
    {{ 'go out' }}

    @endunless  --}}

   {{--  @isset($name)
       {{ 'set' }}
   @endisset

   @if(isset())  --}}

   {{--  if(empty)  --}}

   {{--  @empty($name)
   {{ 'empty' }}
   @endempty  --}}


   {{-- @auth
       {{ 'yes' }}
   @endauth

   @guest
       {{ 'no' }}
   @endguest --}}

   {{-- @for($i = 0; $i < 10; $i++)
    {{ $i }}
   @endfor --}}


   {{-- @while (true)
       {{ 'hi hassan' }}
   @endwhile --}}

   {{-- <?php
   $users = ['hassan', 'ali', 'karim'];
   ?> --}}
   {{-- @foreach ($users as $user)
    {{ $user }}
   @endforeach --}}

   {{-- @forelse ($users as $user)
   {{ $user }}
   @empty
       {{ 'هیچ کاربری پیدا نشد' }}
   @endforelse --}}

   {{-- <?php
   $users = ['hassan', 'ali', 'karim'];
   ?> --}}

   {{-- @foreach ($users as $user) --}}
    {{-- @if($user == 'hassan') --}}
    {{-- {{ 'hi hassan' }} --}}
    {{-- @continue --}}
    {{-- @break --}}
    {{-- @endif --}}
    {{-- {{ $user }} --}}
   {{-- @endforeach --}}

   {{-- @foreach ($users as $user) --}}
   {{-- {{ $loop->iteration }} --}}
   {{-- {{ $loop->count }} --}}
   {{-- @if($loop->first)
   {{ 'first' }}
   @endif
   @if($loop->last)
   {{ 'last' }}
   @endif
   {{ $user }}
    @endforeach --}}


    {{-- @php
        $status = false;
    @endphp --}}


</body>
</html>
