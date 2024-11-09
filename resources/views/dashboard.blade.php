<x-layout title="Student information">

    <div class="bg-gray-100 flex flex-col items-center justify-center gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl w-full">
            <!-- Title Section -->
            <h1 class="text-xl font-semibold text-center mb-4">প্রথম বর্ষ স্নাতক (সম্মান) ভর্তি পরীক্ষা ২০২২-২৩</h1>

            <!-- Content Section -->
            <div>
                <div></div>
                <div>
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
                <h3>
                    প্রাথমিক আবেদনযোগ্য ইউনিট সমূহ:
                </h3>
                <div class="divider"></div>
                <div class="bg-info text-info-content p-4 text-center">
                    <p class="my-4">
                        ভর্তি আবেদন সম্পন্ন করার আগে আপনার ফোন নাম্বারটি ভেরিফাই করুন
                    </p>
                    <div class="divider"></div>

                    <button class="btn btn-warning" onclick="number_verification.showModal()">Mobile Number
                        Verification</button>
                    <!-- Open the modal using ID.showModal() method -->
                    <dialog id="number_verification" class="modal">
                        <div class="modal-box">
                            <h3 class="text-lg font-bold">Phone Number Verification</h3>
                            <div class="divider"></div>

                            <div class="text-left space-y-4">
                                <h3>

                                    ভর্তি পরীক্ষার আবেদন শুরু করার পূর্বে আপনার মোবাইল নম্বর নিশ্চিত করুন।
                                </h3>
                                <ul class="space-y-4">
                                    <li>
                                        * মোবাইল নম্বরটি অবশ্যই প্রার্থীর বা অভিভাবকের হতে হবে
                                    </li>
                                    <li>
                                        * একই মোবাইল নাম্বার একাধিক প্রার্থীর জন্য ব্যবহার করা যাবে না
                                    </li>
                                </ul>


                                <div class="alert my-4">
                                    মোবাইল নম্বর ভেরিফিকেশনের জন্য আপনার ব্যক্তিগত
                                    অথবা অভিভাবকের মোবাইল নম্বরটি পরবর্তী পেজে প্রদান
                                    করুন।
                                    <br />
                                    <br />
                                    মোবাইল নম্বর নিশ্চিত করার জন্য আপনার
                                    মোবাইলে একটি ভেরিফিকেশন কোড পাঠানো হবে।
                                </div>
                            </div>


                            <form method="POST" action="{{ route('profile.phone') }}">
                                @csrf
                                <label class="input input-bordered flex items-center gap-2 mt-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                    </svg>

                                    <input type="tel" class="grow" name="phone_number" placeholder="Phone"
                                        required />
                                </label>
                                <div>

                                    <input type="text" name="id" value="{{ $profile->id }}"
                                        class="input input-bordered block w-full hidden">
                                </div>
                                <div class="modal-action">
                                    <button class="btn btn-success w-full">Confirm</button>

                                </div>

                                <!-- if there is a button in form, it will close the modal -->
                            </form>
                            <button class="btn btn-warning w-full my-4"
                                onclick="number_verification.close()">Close</button>

                        </div>
                    </dialog>
                </div>
            </div>

        </div>
    </div>

</x-layout>
