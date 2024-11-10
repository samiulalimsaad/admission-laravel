<x-layout title="Student information">

    <div class="bg-gray-100 flex flex-col items-center justify-center gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl w-full">
            <!-- Title Section -->
            <h1 class="text-xl font-semibold text-center mb-4">প্রথম বর্ষ স্নাতক (সম্মান) ভর্তি পরীক্ষা ২০২২-২৩</h1>

            <!-- Content Section -->

            <div class="my-8">
                <h3>
                    প্রাথমিক আবেদনের জন্য ছবি আপলোড করুন :
                </h3>
                <div class="divider"></div>
                <div class="bg-info text-info-content p-4 text-center">
                    <ul class="my-4 text-left space-y-2">
                        <li> * ছবিটি 300x400 পিক্সেল আকারের হবে।</li>
                        <li> * ছবির ব্যাকগ্রাউন্ড হালকা এক রঙের হতে হবে।</li>
                        <li> * ছবির সাইজ 100 কিলোবাইটের বেশি হতে পারবে না। |</li>

                    </ul>
                    <div class="divider">

                    </div>
                </div>
            </div>



            <div class="my-8">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success my-8">{{ $message }}</div>
                    <img src="/images/{{ Session::get('image') }}" width="300" />
                @endif

                <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="text" name="id" value="{{ $profile->id }}"
                            class="input input-bordered block w-full hidden">
                    </div>
                    <div class="flex items-center gap-4">
                        <input type="file" class="file-input file-input-info max-w-xs" required name="image" />
                        @if (!Session::get('success'))
                            <button class="btn btn-warning" type="submit">Upload</button>
                        @endif
                        @if ($message = Session::get('success'))
                            <a href="{{ route('quota', $profile->id) }}" class="btn btn-primary">Next</a>
                        @endif
                    </div>
                </form>

            </div>
        </div>
</x-layout>
