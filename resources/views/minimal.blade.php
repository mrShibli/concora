@extends('layouts.master')

@section('content')
    <div class="flex items-center justify-center w-full  bg-[#0000009f] absolute top-0 left-0 right-0 bottom-0">

        <form action="" class="w-[500px] bg-White-c shadow-md rounded py-5">
            <div class="flex items-center justify-between px-4 pb-4">
                <h5 class="text-base">Video Interview</h5>
                <div id="cross" class="fas fa-times text-gray-400"></div>
            </div>

            <div class="border"></div>

            <div class=" p-4">

                <div class="mb-2">
                    <label for="" class="text-sm mb-2">Online Meet/Zoom Link</label>
                    <input type="text" name="link" class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                </div>

                <div class="mb-2">
                    <label for="" class="text-sm mb-2">Official Contact Number</label>
                    <input type="tel" name="Number" class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                </div>

                <div class="mb-2">
                    <label for="" class="text-sm mb-2">Message</label>
                    <input type="text" name="Message" class="w-full text-xs  pl-2 py-4 border border-gray-200 rounded">
                </div>

                <div class="mb-2">
                    <label for="" class="text-sm mb-2">Time Zone</label>
                    <input type="datetime-local" name="Time"
                        class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                </div>

                <div class="mb-4">
                    <label for="" class="text-sm mb-2">Time Zone Counry</label>
                    <select name="zonecountry" required=""
                        class="w-full text-xs  pl-2 py-2.5 border border-gray-200 rounded">
                        <option value="India">Dubai</option>
                        <option value="India">India</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Philippines">Indonesia</option>
                        <option value="Philippines">Sri Lanka</option>
                    </select>
                </div>

                <div class="btn mt-8">
                    <a href=""
                        class="w-full block text-center text-sm bg-Black-c text-White-c py-3 rounded">Submit</a>
                </div>


            </div>
        </form>



    </div>
@endsection
