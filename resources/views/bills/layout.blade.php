<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  
    @if ($message = Session::get('success'))
        <div class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md" role="alert">
          <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
              <p class="font-bold">{{ $message }}</p>
            </div>
          </div>
        </div>
    @endif
<div class="w-full p-6 flex bg-gray-100 border-t-4 border-gray-500 rounded-b text-gray-900">
<a class="text-left text-xs mx-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded sm:text-base sm:mx-4 sm:px-4" href="{{ route('bills.create') }}"> Create New Bill</a>
<a class="text-left text-xs mx-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded sm:text-base sm:mx-4 sm:px-4" href="{{ route('bills.index') }}">All Bills</a>
<a class="text-left text-xs mx-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded sm:text-base sm:mx-4 sm:px-4" href="{{ url('welcome') }}">Exit</a>
</div>
    @yield('content')
   
</body>
</html> 
