<x-layout title="Student information">

    <div class="bg-gray-100 flex flex-col items-center justify-center gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl w-full">
            <!-- Title Section -->
            <h1 class="text-xl font-semibold text-center mb-4">প্রথম বর্ষ স্নাতক (সম্মান) ভর্তি পরীক্ষা ২০২২-২৩</h1>

            <!-- Content Section -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                <div class="col-span-3">
                    @if ($profile->profile_image)
                        <img src="{{ '/images/' . $profile->profile_image }}" alt="Profile Image" class="avater h-52">
                    @endif
                </div>
                <div class="col-span-9">
                    <div class="overflow-x-auto">
                        <table class="table">


                            <tbody>
                                <tr class="bg-base-200">
                                    <th>Application Id:</th>
                                    <td>{{ $profile->applicationId }}</td>
                                </tr>

                                <tr class="bg-base-200">
                                    <th>Applicanta Name:</th>
                                    <td>{{ $profile->name }}</td>
                                </tr>

                                <tr class="bg-base-200">
                                    <th>Father Name:</th>
                                    <td>{{ $profile->father_name }}</td>
                                </tr>

                                <tr class="bg-base-200">
                                    <th>Mother Name:</th>
                                    <td>{{ $profile->mother_name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="my-8">
                <div>
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Exam</th>
                                    <th>Roll</th>
                                    <th>Board</th>
                                    <th>Passing Year</th>
                                    <th>Result</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SSC:</td>
                                    <td>{{ $profile->ssc_roll }}</td>
                                    <td>{{ $profile->ssc_board }}</td>
                                    <td>{{ $profile->ssc_passing_year }}</td>
                                    <td>{{ $profile->ssc_result }}</td>
                                </tr>
                                <tr>
                                    <td>HSC:</td>
                                    <td>{{ $profile->hsc_roll }}</td>
                                    <td>{{ $profile->hsc_board }}</td>
                                    <td>{{ $profile->hsc_passing_year }}</td>
                                    <td>{{ $profile->hsc_result }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="my-8">
                <!-- resources/views/applications/index.blade.php -->

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 border-b">
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Application ID</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    HSC Roll</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    HSC Board</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    HSC Passing Year</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    HSC Result</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    SSC Roll</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    SSC Board</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    SSC Passing Year</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    SSC Result</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Units</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Father's Name</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Mother's Name</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Phone Number</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quota</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Exam Language</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Paid Status</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Invoice</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr class="border-b">
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->applicationId }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->hsc_roll }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->hsc_board }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->hsc_passing_year }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->hsc_result }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->ssc_roll }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->ssc_board }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->ssc_passing_year }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->ssc_result }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($profile->units)

                                        @foreach (json_decode($profile->units, true) as $item)
                                            <span>{{ $item }}</span>
                                        @endforeach
                                    @endif
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->father_name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->mother_name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->phone_number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($profile->quota)
                                        @foreach (json_decode($profile->quota, true) as $item)
                                            <span>{{ $item }}</span>
                                        @endforeach
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->exam_language }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $profile->is_paid ? 'Paid' : 'Unpaid' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $profile->invoice ? 'download' : 'No' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <form action="{{ route('payment', $profile->applicationId) }}" method="GET">
                    @csrf
                    <div class="flex justify-end w-full">

                        <button type="submit" class="btn btn-primary my-8"> <svg xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                            </svg>
                            Pay 100 Tk</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</x-layout>
