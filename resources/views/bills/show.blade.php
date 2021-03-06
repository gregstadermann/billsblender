@extends('bills.layout')
   
@section('content')

    <div class="overflow-x-auto">
        <div class="flex min-w-full min-h-1/2 bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="/images/cc_img.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">{{ $bill->name }} {{ $bill->type }}</div>
    <p class="text-gray-700 text-base">
  <ul> 
<li>Payment: {{ $bill->payment }}</li>
<li>Balance: {{ $bill->balance}}</li>
<li>Due Date: {{ $bill->due_date}}</li>
</ul>


    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
  </div>
</div>
        </div>
@endsection
