<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    @vite('resources/js/app.js')
</head>
<body>
<div class="w-4/5 mx-auto">
    <div class="text-center pt-20">
        <h1 class="text-3xl text-gray-700">
            Register New Client
        </h1>
        <hr class="border border-1 border-gray-300 mt-10">
    </div>

    <div class="m-auto pt-20">
        <form
            action="{{route('clients.store')}}"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <label for="first_name" class="text-gray-500 text-2xl">
                First Name
            </label>
            <input type="text"
                   name="first_name"
                   placeholder="First name..."
                   class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
            <br>

            <label for="last_name" class="text-gray-500 text-2xl">
                last Name
            </label>
            <input type="text"
                   name="last_name"
                   placeholder="Last name..."
                   class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
            <br>

            <label for="email" class="text-gray-500 text-2xl">
                Email
            </label>
            <input type="email"
                   name="email"
                   placeholder="Email Address..."
                   class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
            <br>

            <label for="date_profiled" class="text-gray-500 text-2xl">
                Date Profiled
            </label>
            <input type="date"
                   name="date_profiled"
                   placeholder="Date profiled..."
                   class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
            <br>

            <label for="primary_legal_counsel" class="text-gray-500 text-2xl">
                Primary Legal Counsel
            </label>
            <input type="text"
                   name="primary_legal_counsel"
                   placeholder="Primary Legal Counsel..."
                   class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
            <br>

            <label for="date_of_birth" class="text-gray-500 text-2xl">
                Date Of Birth
            </label>
            <input type="date"
                   name="date_of_birth"
                   placeholder="Date of birth..."
                   class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
            <br>

            <div class="bg-grey-lighter py-10">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select a Profile Image
                    </span>
                    <input
                        type="file"
                        name="profile_image"
                        class="hidden">
                </label>
            </div>

            <label for="date_of_birth" class="text-gray-500 text-2xl">
                Case Details
            </label>
            <textarea
                name="case_details"
                placeholder="Case details..."
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea> <br>

            <button
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit
            </button>
        </form>
    </div>
</div>
</body>
</html>
