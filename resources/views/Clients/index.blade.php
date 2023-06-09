<html>
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <title>
        Clients App
    </title>
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    @vite(['resources/css/app.css'])
</head>
<body class="w-full h-full bg-gray-100">
<div class="w-4/5 mx-auto">
    <div class="text-center pt-20">
        <h1 class="text-3xl text-gray-700">
            All Clients
        </h1>
        <hr class="border border-1 border-gray-300 mt-10">
    </div>

    <div class="py-10 sm:py-20">
        <a class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
           href="{{route('clients.create')}}">
            Register New Client
        </a>
    </div>

    <form>
        <input type="search" class="form-control" placeholder="Search client by last name here" name="search" value="{{ request('search') }}">
    </form>
</div>
<ul class="list-group mt-3">
        @forelse($clients as $client)
            <div class="w-4/5 mx-auto pb-10">
                <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
                    <div class="w-11/12 mx-auto pb-10">
                        <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                            <a href=" {{route('clients.show', $client->id)}}">
                                <li class="list-group-item">{{$client->first_name}} {{$client->last_name }}</li>
                            </a>
                        </h2>
                    </div>
                </div>
            </div>
        @empty
            <li class="list-group-item list-group-item-danger">Client Not Found.</li>

        @endforelse
</ul>
</body>
</html>
