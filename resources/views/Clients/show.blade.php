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
    @vite(['resources/css/app.css'])
{{--    @vite('resources/js/app.js')--}}
{{--    <link href="https://cdn.tailwindcss.com" rel="stylesheet">--}}
{{--    <script type="module" src="https://unpkg.com/vite"></script>--}}
</head>
<body>
<div class="w-4/5 mx-auto">
    <div class="pt-10">
        <a href="{{ URL::previous() }}"
           class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
            < Back to previous page
        </a>
    </div>

    <h4 class="text-left sm:text-center text-2xl sm:text-4xl md:text-5xl font-bold text-gray-900 py-10 sm:py-20">
        {{$client->first_name}} {{$client->last_name}}'s Details
    </h4>

    <div class="pt-10 pb-10 text-gray-900 text-xl">
        <div class="table-responsive">

            <table id="dataTable" class="table table-hover table-sm search-table">
                <thead>
                <tr>
                    <th>Client's Name</th>
                    <th>Client's Email</th>
                    <th>Date Profiled</th>
                    <th>Primary Legal Counsel</th>
                    <th>Date of Birth</th>
                    <th>Case Details</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{$client->first_name}}{{$client->last_name}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->date_profiled}}</td>
                        <td>{{$client->primary_legal_counsel}}</td>
                        <td>{{$client->date_of_birth}}</td>
                        <td>{{$client->case_details}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>
