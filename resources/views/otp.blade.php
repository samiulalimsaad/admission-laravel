<x-layout title="Student information">

    <div class="bg-gray-100 flex flex-col items-center justify-center gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl w-full">
            <!-- Title Section -->
            <h1 class="text-xl font-semibold text-center mb-4">প্রথম বর্ষ স্নাতক (সম্মান) ভর্তি পরীক্ষা ২০২২-২৩</h1>

            <!-- Content Section -->

            <div class="my-8">
                <h3>
                    মোবাইল নাম্বার ভেরিফিকেশন:
                </h3>
                <div class="divider"></div>
                <div class="bg-info text-info-content p-4 text-center">
                    <div class="my-4">
                        আপনার মোবাইল ফোনে একটি ভেরিফিকেশন কোড পাঠানো হয়েছে । প্রাপ্ত কোডটি নিচের বক্সে লিখে ভেরিফাইয়ে
                        ক্লিক করুন।
                        </p>
                        <div class="divider"></div>

                        @if ($message = Session::get('failed'))
                            <div class="alert alert-warning my-8">{{ $message }}</div>
                        @endif



                        <form method="POST" action="{{ route('profile.otp') }}">
                            @csrf
                            <div>

                                <input type="text" name="id" value="{{ $profile->id }}"
                                    class="input input-bordered block w-full hidden">
                            </div>
                            <div class="join gap-0">
                                <input class="input input-bordered join-item" placeholder="123" name="otp" />
                                <button class="btn join-item rounded-r-full btn-warning">Verify</button>
                            </div>

                            <!-- if there is a button in form, it will close the modal -->
                        </form>

                    </div>

                </div>
            </div>

</x-layout>
