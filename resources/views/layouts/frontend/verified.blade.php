<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="{{ asset('newAdmin/css/main.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>


    <div class="flex justify-center items-center  absolute bg-[#000000dd] top-0 left-0 right-0 bottom-0">
        @if (Session::has('verifymessage'))
        <div class="thank-you w-full Tablet:w-[550px] m-3 Tablet:m-0   bg-White-c rounded shadow-lg p-4 py-8">

            <div>

                <img src="{{ asset('newAdmin/image/checked.png') }}" alt="" class=" h-full w-12 Tablet:w-16">

                <div class=" my-3">
                    <p class=" text-xs Tablet:text-sm font-medium mb-2">Thank You!</p>
                    <p class=" text-xs Tablet:text-sm font-medium">You have verified your email.</p>
                </div>

                <div class="btn mt-6">
                    <a href=""
                        class="  px-4 py-1.5 bg-Primary-c text-White-c rounded-full inline-block text-sm Tablet:text-base">Close</a>
                </div>
            </div>

        </div>

        @endif
    </div>


</body>

</html>
