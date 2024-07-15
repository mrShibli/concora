@extends('layouts.master')

@section('content')
    {{-- <div class="content-wrapper">

        @if (Auth::user()->role == 'user')
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"> <a href="{{ route('applicants.index') }}"> Home </a> </li>
                    <li class="breadcrumb-item "><a href="{{ route('applicants.index') }}">Applicants </a>

                    </li>
                </ol>
            </nav>
        @elseif(true)
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "> <a href="{{ route('dashboard') }}"> Home </a> </li>
                    <li class="breadcrumb-item"><a href="{{ route('applicants.index') }}">Applicants </a>
                    <li class="breadcrumb-item bactive"><a href="{{ url()->current() }}">View </a>
                    </li>
                </ol>
            </nav>
        @endif

        <div class="row">

            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="bg-White-c">
                <p class="card-title mb-2">Latest Job Applications</p>
                <div class="table-responsive ">

                    <table class="table table-bordered mt-3" id="jobapplicants">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>First Name</th>
                                <th>Country</th>
                                <th>Position</th>
                                <th>Contact No</th>
                                <th>Email</th>
                                <th>Submitted</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($applicants as $applicant)
                                @if ((in_array(Auth::user()->email, ['shubash@conquerorgroup.ae', 'kamal@conquerorgroup.ae', 'nepal@conquerorgroup.ae']) && $applicant->nationality === 'Nepal') || !in_array(Auth::user()->email, ['shubash@conquerorgroup.ae', 'kamal@conquerorgroup.ae', 'nepal@conquerorgroup.ae'])) 
                                    <tr class="{{ $applicant->viewed > 0 ? 'viewed' : 'notviewed' }}">
                                        <td> {{ $loop->index + 1 }} </td> 
                                        <td>{{ $applicant->first_name }}</td>
                                        <td>{{ $applicant->nationality }}</td>
                                        <td>{{ $applicant->position->title ?? 'Position Not Found' }}</td>
                                        <td>{{ $applicant->contact_number }}</td>
                                        <td>{{ $applicant->email }}</td>
                                        <td>{{ $applicant->created_at->format('F d, Y') }}</td>
                                        <td>
                                            <!-- View data link -->
                                            <a href="{{ route('applicants.show', ['id' => $applicant->id]) }}"
                                                class="btn p-0">
                                                <img src="{{ asset('view.svg') }}" style="width: 27px !important;">
                                            </a>

                                            @if (in_array(Auth::user()->role, ['super_admin']))
                                                <!-- Edit data link -->
                                                <a href="{{ route('applicants.editappli', ['id' => $applicant->id]) }}"
                                                    class="btn p-0">
                                                    <img src="{{ asset('edit.svg') }}" style="width: 27px !important;">
                                                </a>

                                                <!-- Delete data link -->
                                                <form action="{{ route('applicant.destroy', ['id' => $applicant->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn p-0"
                                                        onclick="return confirm('Are you sure you want to delete this item?')">
                                                        <img src="{{ asset('delete.svg') }}"
                                                            style="width: 27px !important;">
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="8">No data available</td>
                                </tr>
                            @endforelse
                        </tbody>


                    </table>
                </div>
            </div>

        </div>
    </div> --}}
 <style> 
    tr,td{
        border: 1px solid black;
        padding: 5px;
    }
    td.flex.gap-2 {
    border: none;
}
 </style>
    <div class="right-side m-4 Laptop:m-4 pt-20 Laptop:pt-[5.4rem] ml-4 Tablet:ml-[205px] Laptop:ml-[235px]">
        @if (Auth::user()->role == 'user')
            <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
                <div class="">
                    <a href="{{ route('dashboard') }}" class="text-xs text-blue-600 hover:underline">Home /</a>
                    <a href="{{ route('applicants.index') }}" class="text-xs text-blue-600 hover:underline">Applicants
                        /</a>
                </div>
            </div>
        @elseif(true)
            <div class="breadcums mb-3 ml-2 Tablet:mt-[-5px]">
                <div class="">
                    <a href="{{ route('dashboard') }}" class="text-xs text-blue-600 hover:underline">Home /</a>
                    <a href="{{ route('applicants.index') }}" class="text-xs text-blue-600 hover:underline">Applicants
                        /</a> <a href="{{ url()->current() }}" class="text-xs text-gray-500 hover:underline">All
                        Applicants</a>
                </div>
            </div>
        @endif



        <div class=" bg-White-c p-3 py-4 pb-8 Tablet:p-6 Laptop:p-8 Laptop:py-10  shadow-sm rounded-xl ">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div id="Job_Application " class="overflow-x-scroll Tablet:overflow-x-hidden">
                <!-- <div class="filteritems text-right mb-1">
                    <a class="btn border rounded" href="{{ route('applicants.indexverified') }}">Verified</a>
                    <a class="btn border rounded" href="{{ route('applicants.notverified') }}">Not Verified</a>
                    <a class="btn border rounded" href="{{ route('applicants.invited') }}">Invited for
                        Interview</a>
                    <a class="btn border rounded" href="{{ route('applicants.hired') }}">Hired</a>
                </div> -->
                <h2 class="text-base Tablet:text-xl font-bold text-Primary-c">All Applicants</h2>

                <table class="border  bg-White-c w-full my-6 overflow-x">
                    <tr>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Sl No</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Name</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Country</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Ref ID</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Contact No</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Submission Date</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Status</th>
                        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">
                            Action</th>
                    </tr>

                    @forelse ($applicants as $applicant)
                        {{-- @dd($applicant->applicant_status) --}}
                        @if (
                            (in_array(Auth::user()->email, [
                                'shubash@conquerorgroup.ae',
                                'kamal@conquerorgroup.ae',
                                'nepal@conquerorgroup.ae',
                            ]) &&
                                $applicant->nationality === 'Nepal') ||
                                !in_array(Auth::user()->email, [
                                    'shubash@conquerorgroup.ae',
                                    'kamal@conquerorgroup.ae',
                                    'nepal@conquerorgroup.ae',
                                ]))
                            <tr class="{{ $applicant->viewed > 0 ? 'viewed' : 'notviewed' }}">
                                <td style="text-align: center">{{ $loop->index + 1 }}</td>
                                <td>{{ $applicant->first_name }}</td>
                                <td>{{ $applicant->nationality }}</td>
                                <td>{{ $applicant->reference ?? 'Not Provided' }}</td>
                                <td>{{ $applicant->contact_number }}</td>
                                {{-- <td>{{ $applicant->email }}</td> --}}
                                <td>{{ $applicant->created_at->format('F d, Y') }}</td>
                                <td>{{ $applicant->applicant_status == 'new_entry' ? 'New eantry' : '' }}</td>
                                <td class="flex gap-2">
                                    <!-- View data link -->
                                    <a href="{{ route('applicants.show', ['id' => $applicant->id]) }}" class="btn p-0">
                                        <img src="{{ asset('view.svg') }}" style="width: 27px !important;">
                                    </a>

                                    @if (in_array(Auth::user()->role, ['super_admin']))
                                        <!-- Edit data link -->
                                        {{-- <a href="{{ route('applicants.editappli', ['id' => $applicant->id]) }}"
                                            class="btn p-0">
                                            <img src="{{ asset('edit.svg') }}" style="width: 27px !important;">
                                        </a>
{{--  -
                                        <!-- Delete data link -->
                                        <form action="{{ route('applicant.destroy', ['id' => $applicant->id]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn p-0"
                                                onclick="return confirm('Are you sure you want to delete this item?')">
                                                <img src="{{ asset('delete.svg') }}" style="width: 27px !important;">
                                            </button>
                                        </form> --}}
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @empty
                        <tr>
                            <td colspan="8">No data available</td>
                        </tr>
                    @endforelse

                </table>

                
            </div>
            <div class="mt-4">
                {{ $applicants->links('vendor.pagination.simple-tailwind') }} 
            </div>

        </div>


    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#jobapplicants').DataTable();
        });
    </script>
@endsection