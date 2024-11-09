<x-layout title="Student information">

    <div class="bg-gray-100 flex flex-col items-center justify-center gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl w-full">
            <!-- Title Section -->
            <h1 class="text-xl font-semibold text-center mb-4">প্রথম বর্ষ স্নাতক (সম্মান) ভর্তি পরীক্ষা ২০২২-২৩</h1>

            <!-- Content Section -->
            <div class="my-8">
                <h3>প্রাথমিক আবেদনযোগ্য ইউনিট সমূহ:</h3>
                <div class="divider"></div>
                <div class="p-4 text-center">
                    <div class="bg-info text-info-content p-4 text-center">
                        <div class="my-4">
                            আপনি যদি কোটার জন্য বিবেচিত হতে চান, তবে যে কোটায় আবেদন করতে চান তার পাশে "১৫৫ ০৫০13" তে
                            ক্লিক দিয়ে সংশ্লিষ্ট
                            তথ্য প্রদান করুন এবং সংশ্লিষ্ট কাগজপত্রের স্ক্যান কপি (সর্বোচ্চ ২ মেগাবাইট) একটি মাত্র ০০190
                            ফাইলের মাধ্যমে আপলোড
                            করুন। |
                            কোটায় আবেদন না করতে চাইলে ষুুত্তী এ ক্লিক দিয়ে পরবর্তী পেজে যান।

                            ।
                        </div>
                        <div class="divider">

                        </div>
                    </div>
                </div>

                <form method="POST" action="{{ route('profile.quota') }}">
                    @csrf
                    <input type="text" name="id" value="{{ $profile->id }}"
                        class="input input-bordered block w-full hidden">

                    <div class="overflow-x-auto">
                        <table class="table">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th>Quota</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Quota - A</th>
                                    <td>
                                        <div class="form-control flex">
                                            <label class="cursor-pointer label justify-center gap-2">
                                                <input type="checkbox" checked="checked" name="quota[]"
                                                    class="checkbox checkbox-accent" value="quota - A" />
                                                <span class="label-text">Add Quota</span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Quota - B</th>
                                    <td>
                                        <div class="form-control flex">
                                            <label class="cursor-pointer label justify-center gap-2">
                                                <input type="checkbox" checked="checked" name="quota[]"
                                                    class="checkbox checkbox-accent" value="quota - B" />
                                                <span class="label-text">Add Quota</span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Quota - C</th>
                                    <td>
                                        <div class="form-control flex">
                                            <label class="cursor-pointer label justify-center gap-2">
                                                <input type="checkbox" checked="checked" name="quota[]"
                                                    class="checkbox checkbox-accent" value="quota - C" />
                                                <span class="label-text">Add Quota</span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Quota - D</th>
                                    <td>
                                        <div class="form-control flex">
                                            <label class="cursor-pointer label justify-center gap-2">
                                                <input type="checkbox" checked="checked" name="quota[]"
                                                    class="checkbox checkbox-accent" value="quota - D" />
                                                <span class="label-text">Add Quota</span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button type="submit" class="btn join-item rounded-r-full btn-warning">Confirm</button>
                </form>
                <a href="{{ route('confirmation') }}" class="btn join-item rounded-r-full btn-warning">Skip</button>

            </div>
        </div>
    </div>

</x-layout>
