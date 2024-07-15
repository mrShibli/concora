@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css">
    <style>
        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <div class="right-side m-4 Laptop:m-4 pt-20 Laptop:pt-[5.4rem] ml-4 Tablet:ml-[205px] Laptop:ml-[235px]">

        <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
            <div class="">
                <a href="{{ route('dashboard') }}" class="text-xs text-blue-600 hover:underline">Home /</a> <a href="{{ route('admin.users.index') }}"
                    class="text-xs text-blue-600 hover:underline">Users /</a> <a href=""
                    class="text-xs text-gray-500 hover:underline">Create</a>
            </div>
        </div>
        <form method="POST" action="{{ route('admin.agent.store') }}" enctype="multipart/form-data"
        class="bg-White-c p-3 py-4 pb-8 Tablet:p-6 Laptop:p-8 Laptop:py-10 shadow-sm rounded-xl">
        @csrf
        <h2 class="text-base Tablet:text-xl Laptop:text-2xl font-bold text-Primary-c text-center mb-4 Tablet:mb-10">
            User Agent Form</h2>
    
        <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
            <div>
                <label for="name" class="text-sm Laptop:text-base">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Full Name"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('name') }}">
                @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="nationality" class="text-sm Laptop:text-base">Nationality</label>
                <input type="text" name="nationality" id="nationality" placeholder="Nationality"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('nationality') }}">
                @error('nationality')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
            <div>
                <label for="email" class="text-sm Laptop:text-base">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Email Address"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('email') }}">
                @error('email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="confirm_email" class="text-sm Laptop:text-base">Confirm Email</label>
                <input type="email" name="confirm_email" id="confirm_email" placeholder="Confirm Email"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('confirm_email') }}">
                @error('confirm_email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
            <div>
                <label for="passport_no" class="text-sm Laptop:text-base">Passport No</label>
                <input type="text" name="passport_no" id="passport_no" placeholder="Passport No"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('passport_no') }}">
                @error('passport_no')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="expiry_date" class="text-sm Laptop:text-base">Expiry Date</label>
                <input type="date" name="expiry_date" id="expiry_date" class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('expiry_date') }}">
                @error('expiry_date')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
            <div>
                <label for="nid_cnic_no" class="text-sm Laptop:text-base">NID/CNIC No</label>
                <input type="text" name="nid_cnic_no" id="nid_cnic_no" placeholder="NID/CNIC No"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('nid_cnic_no') }}">
                @error('nid_cnic_no')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="alternative_contact" class="text-sm Laptop:text-base">Alternative Contact</label>
                <input type="text" name="alternative_contact" id="alternative_contact" placeholder="Alternative Contact"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('alternative_contact') }}">
                @error('alternative_contact')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
            <div>
                <label for="whatsapp" class="text-sm Laptop:text-base">Whatsapp</label>
                <input type="text" name="whatsapp" id="whatsapp" placeholder="Whatsapp"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('whatsapp') }}">
                @error('whatsapp')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="telegram" class="text-sm Laptop:text-base">Telegram</label>
                <input type="text" name="telegram" id="telegram" placeholder="Telegram"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('telegram') }}">
                @error('telegram')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
            <div>
                <label for="facebook_id" class="text-sm Laptop:text-base">Facebook ID</label>
                <input type="text" name="facebook_id" id="facebook_id" placeholder="Facebook ID"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('facebook_id') }}">
                @error('facebook_id')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="spouse_name" class="text-sm Laptop:text-base">Spouse Name</label>
                <input type="text" name="spouse_name" id="spouse_name" placeholder="Spouse Name"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('spouse_name') }}">
                @error('spouse_name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div class="grid grid-cols-1 Laptop:grid-cols-2 Laptop:gap-12 mb-2 Laptop:mb-8">
            <div>
                <label for="spouse_contact" class="text-sm Laptop:text-base">Spouse Contact</label>
                <input type="text" name="spouse_contact" id="spouse_contact" placeholder="Spouse Contact"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('spouse_contact') }}">
                @error('spouse_contact')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="reference_name" class="text-sm Laptop:text-base">Reference Name</label>
                <input type="text" name="reference_name" id="reference_name" placeholder="Reference Name"
                    class="w-full bg-Low-dull-c mt-2 px-4 py-2 rounded-sm text-xs" value="{{ old('reference_name') }}">
                @error('reference_name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <button type="submit"
            class="bg-Primary-c w-full text-center mt-8 py-3 rounded-md text-xs Laptop:text-base text-White-c">Register</button>
    </form>
    
    

    </div>
    </div>
@endsection

@section('script')


@endsection
