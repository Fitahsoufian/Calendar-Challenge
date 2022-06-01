<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-rows-1 grid-cols-3">
                    <div class="row-span-2 col-span-1 bg-gray-200 pt-20 space-y-5 w-2/3">
                       <button id="btn1" class="group bg-gray-300  pt-4 pb-4  focus:bg-red-300 hover:bg-red-300 hover:text-red-700 w-11/12 rounded-r-2xl font-bold focus:outline-none ">My Transactions</button>
                       <button id="btn2" class="group bg-gray-300  pt-4 pb-4  focus:bg-blue-300 hover:bg-blue-300 hover:text-blue-700 w-11/12 rounded-r-2xl font-bold focus:outline-none ">My Invoices</button> 
                </div>
                <div id="div1" class="col-span-2">
                <div class="col-span-2">
                    <div class="bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                        <div class="w-full mt-20 min-h-screen lg:w-5/6">
                            @if (Auth::check() && Auth::user()->role ==0)
                            <a href="/add" class="bg-red-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-6 rounded-3xl">
                                + Add Transaction
                                </a>
                            @endif
                            <div class="bg-white shadow-md rounded my-6">
                                <table class="min-w-max w-full table-auto">
                                    <thead>
                                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                            <th class="py-3 px-6 text-left">Date</th>
                                            <th class="py-3 px-6 text-left">Journal</th>
                                            <th class="py-3 px-6 text-center">Entitled</th>
                                            <th class="py-3 px-6 text-center">Debit</th>
                                            <th class="py-3 px-6 text-center">Credit</th>
                                            <th class="py-3 px-6 text-center">Management</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div id="div2" class="col-span-2">
                    <div  class="col-span-3 ">
                        <div class=" bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                            <div class="w-full lg:w-5/6 mt-20 min-h-screen ">
                                @if (Auth::check() && Auth::user()->role ==0)
                                <a href="/join" class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-6 rounded-3xl">
                                    + Add Invoice
                                    </a>
                                    @endif
                                <div class="bg-white shadow-md rounded my-6">
                                    <table class="min-w-max w-full table-auto">
                                        <thead>
                                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                                <th class="py-3 px-6 text-left">Date</th>
                                                <th class="py-3 px-6 text-left">Number</th>
                                                <th class="py-3 px-6 text-center">Customer Name</th>
                                                <th class="py-3 px-6 text-center">Amount</th>
                                                <th class="py-3 px-6 text-center">Statement</th>
                                                <th class="py-3 px-6 text-center">Management</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
