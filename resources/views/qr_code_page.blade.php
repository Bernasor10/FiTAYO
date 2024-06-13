@extends('base')
@section('title', 'QR Code')
@section('content')
<div class="container text-center mt-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <div class="qr-code-container shadow-lg rounded">
                <img src="{{ route('qr',auth()->user()->id) }}" alt="QR Code" class="img-fluid qr-code-image rounded">
                <div class="scan-me mt-3">
                    <i class="fa fa-mobile"></i>
                    <span class="scan-me-text">SCAN ME</span>
                </div>
                <p class="qr-instruction mt-3">Present this QR code to the Gym Admin to check in/out</p>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>

<style>
    .qr-code-container {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .qr-code-image {
        border: 5px solid #000;
        padding: 10px;
        background-color: #fff;
        max-width: 100%;
        height: auto;
    }

    .scan-me {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 15px;
        padding: 10px;
        background-color: #000;
        color: #fff;
        border-radius: 10px;
        font-size: 1.2em;
        font-weight: bold;
    }

    .scan-me i {
        margin-right: 10px;
    }

    .scan-me-text {
        margin-left: 10px;
    }

    .qr-instruction {
        margin-top: 10px;
        font-size: 1.2em;
        color: #212529;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        padding: 10px 20px;
        font-size: 1em;
        border-radius: 0.25rem;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }

    .rounded {
        border-radius: 10px;
    }
</style>
@endsection