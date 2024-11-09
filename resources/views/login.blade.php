<x-layout title="Student information">

    <div class="bg-gray-100 flex flex-col items-center justify-center gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl w-full">
            <!-- Title Section -->
            <h1 class="text-xl font-semibold text-center mb-4">প্রথম বর্ষ স্নাতক (সম্মান) ভর্তি পরীক্ষা ২০২২-২৩</h1>

            <!-- Content Section -->
            <form action="{{ route('profile.store') }}" method="POST" class="card bg-white ">
                @csrf
                <div class="space-y-4">

                    <!-- Left Column -->
                    <div class="flex flex-col gap-4">
                        <!-- HSC/Equiv. Roll -->
                        <div class="flex items-center justify-between">
                            <label class="w-1/3" for="hsc_roll">HSC/Equiv. Roll</label>
                            <span> : </span>
                            <input type="text" name="hsc_roll" id="hsc_roll" placeholder="Type here"
                                class="input input-bordered w-full" value="{{ old('hsc_roll') }}" />
                            @error('hsc_roll')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- HSC/Equiv. Board -->
                        <div class="flex items-center justify-between">
                            <label class="w-1/3" for="hsc_board">HSC/Equiv. Board</label>
                            <span> : </span>
                            <input type="text" name="hsc_board" id="hsc_board" placeholder="Type here"
                                class="input input-bordered w-full" value="{{ old('hsc_board') }}" />
                            @error('hsc_board')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>



                        <!-- HSC/Equiv. Year -->
                        <div class="flex items-center justify-between">
                            <label class="w-1/3" for="hsc_passing_year">HSC/Equiv. Year</label>
                            <span> : </span>
                            <select name="hsc_passing_year" id="hsc_passing_year" class="select select-bordered w-full">
                                <option disabled {{ old('hsc_passing_year') ? '' : 'selected' }}>Year</option>
                                <option value="2024" {{ old('hsc_passing_year') == '2024' ? 'selected' : '' }}>2024
                                </option>
                                <option value="2023" {{ old('hsc_passing_year') == '2023' ? 'selected' : '' }}>2023
                                </option>
                            </select>
                            @error('hsc_passing_year')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- HSC/Equiv. Board -->
                    <div class="flex items-center justify-between">
                        <label class="w-1/3" for="hsc_result">HSC/Equiv. Result</label>
                        <span> : </span>
                        <input type="text" name="hsc_result" id="hsc_result" placeholder="Type here"
                            class="input input-bordered w-full" value="{{ old('hsc_result') }}" />
                        @error('hsc_result')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Right Column -->
                    <div class="flex flex-col gap-4">
                        <!-- SSC/Equiv. Roll -->
                        <div class="flex items-center justify-between">
                            <label class="w-1/3" for="ssc_roll">SSC/Equiv. Roll</label>
                            <span> : </span>
                            <input type="text" name="ssc_roll" id="ssc_roll" placeholder="Type here"
                                class="input input-bordered w-full" value="{{ old('ssc_roll') }}" />
                            @error('ssc_roll')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- SSC/Equiv. Board -->
                        <div class="flex items-center justify-between">
                            <label class="w-1/3" for="ssc_board">SSC/Equiv. Board</label>
                            <span> : </span>
                            <input type="text" name="ssc_board" id="ssc_board" placeholder="Type here"
                                class="input input-bordered w-full" value="{{ old('ssc_board') }}" />
                            @error('ssc_board')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>



                        <!-- SSC/Equiv. Year -->
                        <div class="flex items-center justify-between">
                            <label class="w-1/3" for="ssc_passing_year">SSC/Equiv. Year</label>
                            <span> : </span>
                            <select name="ssc_passing_year" id="ssc_passing_year" class="select select-bordered w-full">
                                <option disabled {{ old('ssc_passing_year') ? '' : 'selected' }}>Year</option>
                                <option value="2024" {{ old('ssc_passing_year') == '2024' ? 'selected' : '' }}>2024
                                </option>
                                <option value="2023" {{ old('ssc_passing_year') == '2023' ? 'selected' : '' }}>2023
                                </option>
                            </select>
                            @error('ssc_passing_year')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- SSC/Equiv. Board -->
                    <div class="flex items-center justify-between">
                        <label class="w-1/3" for="ssc_result">SSC/Equiv. Result</label>
                        <span> : </span>
                        <input type="text" name="ssc_result" id="ssc_result" placeholder="Type here"
                            class="input input-bordered w-full" value="{{ old('ssc_result') }}" />
                        @error('ssc_result')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Submit Button -->
                    <div class="mt-6 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>


        </div>


    </div>

</x-layout>
