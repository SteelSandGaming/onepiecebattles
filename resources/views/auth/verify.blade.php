@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white border-warning">
                <div class="card-header bg-warning text-dark">
                    <h3 class="mb-0">Verify Your Email</h3>
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            A fresh verification link has been sent to your email address.
                        </div>
                    @endif

                    <p class="mb-4">Before proceeding, please check your email for a verification link.</p>
                    <p class="mb-4">If you did not receive the email,</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-warning">
                            Click here to request another
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
