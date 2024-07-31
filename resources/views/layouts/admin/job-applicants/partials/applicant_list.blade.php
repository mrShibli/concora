<table class="border bg-White-c w-full my-6 overflow-x">
    <tr>
        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">Sl No</th>
        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">Name</th>
        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">Country</th>
        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">Ref ID</th>
        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">Contact No</th>
        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">Submission Date</th>
        <th class="border text-xs Tablet:text-sm Laptop:text-base p-1 Tablet:p-2 bg-Primary-c text-White-c">Action</th>
    </tr>

    @forelse ($applicants as $applicant)
        @if ((in_array(Auth::user()->email, ['shubash@conquerorgroup.ae', 'kamal@conquerorgroup.ae', 'nepal@conquerorgroup.ae']) && $applicant->nationality === 'Nepal') || !in_array(Auth::user()->email, ['shubash@conquerorgroup.ae', 'kamal@conquerorgroup.ae', 'nepal@conquerorgroup.ae']))
            <tr class="{{ $applicant->viewed > 0 ? 'viewed' : 'notviewed' }}">
                <td style="text-align: center">{{ $loop->index + 1 }}</td>
                <td>{{ $applicant->first_name }}</td>
                <td>{{ $applicant->nationality }}</td>
                <td>{{ $applicant->reference ?? 'Not Provided' }}</td>
                <td>{{ $applicant->contact_number }}</td>
                <td>{{ $applicant->created_at->format('F d, Y') }}</td>
                <td class="flex gap-2">
                    <a href="{{ route('applicants.show', ['id' => $applicant->id]) }}" class="btn p-0">
                        <img src="{{ asset('view.svg') }}" style="width: 27px !important;">
                    </a>
                </td>
            </tr>
        @endif
    @empty
        <tr>
            <td colspan="7">No data available</td>
        </tr>
    @endforelse
</table>

<div class="mt-4">
    {{ $applicants->links('vendor.pagination.simple-tailwind') }}
</div>
