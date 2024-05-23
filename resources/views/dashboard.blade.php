<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex gap-3 items-center justify-between mb-3">
                        <h3>{{ __("Referrals") }}</h3>
                        <livewire:add-user />
                    </div>

                    <p class="hidden md:inline-block text-right">
                        <strong>Referral Link:</strong>
                        <button title="click to copy" type="button" x-clipboard class="text-sm px-2 py-1 rounded bg-gray-200 dark:bg-black font-semibold">
                            {{route('register', request()->user()->referral_code)}}
                        </button>
                    </p>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                    Phone Number
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Occupation
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(request()->user()->referrals as $referral)
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$referral->name}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$referral->email}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$referral->phone_number}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$referral->profession}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <p>
                                            @if($referral->email_verified_at)
                                                <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Verified</span>
                                            @else
                                                <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Not Verified</span>
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
