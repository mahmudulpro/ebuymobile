@extends('layouts.app')

@section('title')
    EBUY | FRESH FOOD
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total: ${{ $total }}</h4>
            <div id="charge-error" class="alert alert-danger {{ Session::has('error') ? 'hidden' : '' }}">
                {{ Session::get('error') }}
            </div>
          <form action="{{ route('checkout') }}" method="post" id="payment-form">
            
              <div class="form-group">
                <label for="card_email">
                  Email
                </label>
                <input id="card_email" class="form-control" name="card_email" required>
            </div>
              <div class="form-group">
                <label for="card-element">
                  Credit or debit card
                </label>
                <div id="card-element" class="form-control">
                  <!-- A Stripe Element will be inserted here. -->
                </div>
            
                <!-- Used to display form errors. -->
                <div id="card-errors"  role="alert"></div>
              </div>
            
              <button>Submit Payment</button>
              {{ csrf_field() }}
            </form>
            <br>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('src/js/stripe.js') }}"></script>
@endsection
