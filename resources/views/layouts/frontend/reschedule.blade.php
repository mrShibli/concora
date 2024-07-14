@extends('layouts.appwithoutheaderfooter')



@section('content')
    @if (Session::has('success'))
        <section style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
            <div class="div300" style="width: 400px; text-align: center;">
                <iframe src="https://lottie.host/embed/46f26792-79f1-46b5-9e0a-14391897bb34/0TCi5OsNhz.json"></iframe>
            </div>
            <div
                style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: .75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem; font-size: 1.7rem; text-align: center;line-height: 2.3rem;">
                {{ Session::get('success') }}

            </div>

            <!-- Button back to home -->
            <div style="text-align: center;">
                <a href="https://conqueror.ae/"
                    style="display: inline-block; padding: 10px 20px; background-color: #113163; color: #fff; text-decoration: none; border-radius: 5px;font-size:14px;">Back
                    to Home</a>
            </div>
        </section>
    @else
        <div style="max-width: 550px; margin: 0 auto;">
            <div style="margin-bottom: 20px;">
                <div style="font-weight: bold; font-size: 1.5rem; margin-bottom: 20px;margin-top: 50px;">Dear
                    {{ $applicant->first_name . ' ' . $applicant->last_name }}, Please Select Your Desired Time and Date</div>

                <div style="background-color: #f8f9fa; padding: 20px; border-radius: 5px;">
                    <form method="POST"
                        action="{{ route('rescheduleSubmit', ['id' => $applicant->id, 'email' => $applicant->email]) }}">
                        @csrf

                        <div style="margin-bottom: 10px;">
                            <label for="scheduled_at"
                                style="display: block; width: 180px; font-size: 1.6rem;margin-bottom: 10px;">Select Date and
                                Time:</label>
                            <input id="scheduled_at" type="datetime-local" name="scheduled_at" required
                                style="width: calc(100%); padding: 12px; border: 1px solid #ced4da; border-radius: 3px;font-size: 1.5rem;"
                                required>
                        </div>

                        <div>
                            <button type="submit"
                                style="padding: 12px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; font-size: 1.4rem; cursor: pointer;width: calc(100%);">Reschedule
                                Interview</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('scripts')
    <script>
        // Get the value of the datetime-local input field
        var scheduledAt = document.querySelector("#scheduled_at").value;

        // Convert the string to a Date object
        var scheduledDate = new Date(scheduledAt);

        // Define the options for date formatting
        var options = {
            year: 'numeric',
            month: 'long',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            hour12: true
        };

        // Format the date using Intl.DateTimeFormat
        var formattedDate = new Intl.DateTimeFormat('en-US', options).format(scheduledDate);

        console.log(formattedDate); // Output: "March 13, 2024, 12:40 PM"
    </script>
@endsection
