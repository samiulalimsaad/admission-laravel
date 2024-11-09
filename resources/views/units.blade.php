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
                            যে ইউনিট গুলোতে আবেদন করতে চান তা সিলেক্ট করতে পারবেন।
                        </div>
                        <div class="divider">

                        </div>

                        @if ($message = Session::get('failed'))
                            <div class="alert alert-warning my-8">{{ $message }}</div>
                        @endif
                    </div>
                </div>

                <form method="POST" action="{{ route('profile.units') }}">
                    @csrf
                    <input type="text" name="id" value="{{ $profile->id }}"
                        class="input input-bordered block w-full hidden">

                    <div class="overflow-x-auto">
                        <table class="table">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th>Unit</th>
                                    <th>Faculty</th>
                                    <th>Application Status</th>
                                    <th>Apply</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Unit - A</th>
                                    <td>Faculty - A, B and C</td>
                                    <td>Not Applied</td>
                                    <td>
                                        <div class="form-control">
                                            <label class="cursor-pointer label justify-center gap-2">
                                                <input type="checkbox" checked="checked" name="units[]"
                                                    class="checkbox checkbox-accent" value="Unit - A" />
                                                <span class="label-text">Select</span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Unit - B</th>
                                    <td>Faculty - D, E and F</td>
                                    <td>Not Applied</td>
                                    <td>
                                        <div class="form-control">
                                            <label class="cursor-pointer label justify-center gap-2">
                                                <input type="checkbox" checked="checked" name="units[]"
                                                    class="checkbox checkbox-accent" value="Unit - B" />
                                                <span class="label-text">Select</span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Unit - C</th>
                                    <td>Faculty - G, H and I</td>
                                    <td>Not Applied</td>
                                    <td>
                                        <div class="form-control">
                                            <label class="cursor-pointer label justify-center gap-2">
                                                <input type="checkbox" checked="checked" name="units[]"
                                                    class="checkbox checkbox-accent" value="Unit - C" />
                                                <span class="label-text">Select</span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button type="submit" class="btn join-item rounded-r-full btn-warning">Confirm</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>
