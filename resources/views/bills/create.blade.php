@extends('bills.layout')
  
@section('content')
    <div class="overflow-x-auto">
        <div class="flex min-w-full min-h-1/2 bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-4" action="{{ route('bills.store') }}" method="POST" enctype="multipart/form-data"> 

        @csrf
     
            <div class="mb-4">
                <div class="form-group">
                    <div class="block text-gray-700 text-sm font-bold mb-2">Name:</div>
                    <input type="text" name="name"  class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Name">
                </div>
            </div>
            <div class="mb-4">
                <div class="form-group">
                    <div class="block text-gray-700 text-sm font-bold mb-2">Type:</div>
                    <input type="text" name="type"  class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Type">
                </div>
            </div>

            <div class="mb-4">
                <div class="form-group">
                    <div class="block text-gray-700 text-sm font-bold mb-2">Payment:</div>
                    <input type="text" name="payment" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Payment">
                </div>
            </div>
            <div class="mb-4">
                <div class="form-group">
                    <div class="block text-gray-700 text-sm font-bold mb-2">Due Date:</div>
                    <input type="text" name="due_date" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Due Date">
                </div>
            </div>

            <div class="mb-4">
                <div class="form-group">
                    <div class="block text-gray-700 text-sm font-bold mb-2">Balance:</div>
                    <input type="text" name="balance" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Balance">
                </div>
            </div>
            
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Submit</button>
     
    </form>
</div>
</div>   
     
@endsection 
