@extends('layouts.master')

@section('content')
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
                        /</a> <a href="{{ url()->current() }}" class="text-xs text-gray-500 hover:underline">View</a>
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
                <div class="filteritems text-right mb-1">
                    <a class="btn border rounded" href="{{ route('applicants.indexverified') }}">Verified</a>
                    <a class="btn border rounded" href="{{ route('applicants.notverified') }}">Not Verified</a>
                    <a class="btn border rounded" href="{{ route('applicants.invited') }}">Invited for
                        Interview</a>
                    <a class="btn border rounded" href="{{ route('applicants.hired') }}">Hired</a>
                </div>
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
                            Action</th>
                    </tr>

                    @forelse ($applicants as $applicant)
                        @if (
                            (in_array(Auth::user()->email, [
                                'shubash@conquerorgroup.ae',
                                'kamal@conquerorgroup.ae',
                                'nepal@conquerorgroup.ae',
                            ]) &&
                                $applicant->nationality === 'Nepal') ||
                                (Auth::user()->email === 'india@conquerorgroup.ae' && $applicant->nationality === 'India') ||
                                (Auth::user()->email === 'noman@conquerorgroup.ae' && $applicant->nationality === 'Pakistan') ||
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
                                <td>
                                    <!-- View data link -->
                                    <a href="{{ route('applicants.show', ['id' => $applicant->id]) }}" class="btn p-0">
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
                                                <img src="{{ asset('delete.svg') }}" style="width: 27px !important;">
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

                </table>

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
