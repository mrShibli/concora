@extends('layouts.master')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    Quotation Details
                </div>
                <div class="card-body">
                
                    <div class="mb-3">
                        <strong>Enquiry for:</strong> {{ $quotation->enquiry }}
                    </div>
                    <div class="mb-3">
                        <strong>First Name:</strong> {{ $quotation->firstName }}
                    </div>
                    <div class="mb-3">
                        <strong>Last Name:</strong> {{ $quotation->lastName }}
                    </div>
                    <div class="mb-3">
                        <strong>Phone Number:</strong> {{ $quotation->phoneNumber }}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> {{ $quotation->email }}
                    </div>
                    <div class="mb-3">
                        <strong>Delivery Time:</strong> {{ $quotation->deliveryTime }}
                    </div>
                    <div class="mb-3">
                        <strong>Message:</strong> {{ $quotation->message }}
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
