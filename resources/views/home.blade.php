<x-layout title="Home">
    <div class="card w-1/2 mx-auto bg-white py-8">
        <!-- Logo and Title Section -->
        <div class="flex flex-col items-center mb-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c0/Rajshahi_University_update_logo.png"
                alt="University of Rajshahi Logo" class="mb-2 h-32">
            <h1 class="text-2xl font-semibold text-gray-800">University of Rajshahi</h1>
            <h2 class="text-xl font-medium text-gray-700">Undergraduate Admission 2022-23</h2>
        </div>

        <!-- Information Links -->
        <div class="card-body">
            <ul class="list-disc m-8 space-y-3">
                <li><a href="#" class="link">২০২২-২৩ শিক্ষাবর্ষে প্রথমবর্ষ স্নাতক/ স্নাতক (সম্মান) শ্রেণীতে
                        ভর্তি আবেদনের বিজ্ঞপ্তি
                    </a></li>
                <li><a href="#" class="link">Conditions for Different Units</a></li>
                <li><a href="#" class="link">Conditions for Different Quota</a></li>
                <li><a href="#" class="link">Exam Routine</a></li>
                <li><a href="#" class="link">Preliminary Application Guideline</a></li>
                <li><a href="#" class="link">Application form for Ward Quota</a></li>
            </ul>
        </div>

        <div class="card-actions justify-center">
            <a class="btn btn-primary" href='{{ route('info') }}'>Preliminary Application</a>
        </div>
    </div>


</x-layout>
