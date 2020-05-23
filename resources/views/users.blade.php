<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MIXblack') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<script src="{{ asset('js/custom.js') }}" defer></script>
   
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Users</div>


                <div class="card-body">
                    <div class="row pl-5">
         @if($users->count())
         @foreach($users as $user)
        <div class="col-2 profile-box border p-1 rounded text-center bg-light mr-4 mt-3">
            <img src="https://dummyimage.com/165x166/420542/edeef5&text=ItSolutionStuff.com" class="w-100 mb-1">
            <h5 class="m-0"><a href="{{ route('user.view', $user->id) }}"><strong>{{ $user->name }}</strong></a></h5>
            <p class="mb-2">
                <small>Following: <span class="badge badge-primary">{{ $user->followings()->get()->count() }}</span></small>
                <small>Followers: <span class="badge badge-primary tl-follower">{{ $user->followers()->get()->count() }}</span></small>
            </p>
            <button class="btn btn-info btn-sm action-follow" data-id="{{ $user->id }}"><strong>
            @if(auth()->user()->isFollowing($user))
                UnFollow
            @else
                Follow
            @endif
            </strong></button>
        </div>
    @endforeach
@endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
   
    </div>
</body>
</html>