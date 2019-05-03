<form action="{{ route('checkout') }}" method="post" id="payment-form">
    <div class="row">
      <div class="col-xs-12">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" class="form-control" required>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" id="address" class="form-control" required>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="form-group">
          <label for="card-name">Card Holder Name</label>
          <input type="text" id="card-name" class="form-control" required>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="form-group">
          <label for="card-number">Credit Card Number</label>
          <input type="text" id="card-number" class="form-control" required>
        </div>
      </div> 
      <div class="col-xs-12">
        <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              <label for="card-expiry-month">Expiration Month</label>
              <input type="text" id="card-expiry-month" class="form-control" required>
            </div>
          </div> 
          <div class="col-xs-6">
            <div class="form-group">
              <label for="card-expiry-year">Expiration Year</label>
              <input type="text" id="card-expiry-year" class="form-control" required>
            </div>
          </div>                                     
        </div>
      </div> 
      <div class="col-xs-12">
        <div class="form-group">
          <label for="card-cvc">CVC</label>
          <input type="text" id="card-cvc" class="form-control" required>
        </div>
      </div>               
    </div>
    {{ csrf_field() }}
    <button type="submit" class="btn btn-success">Pay</button>
  </form>