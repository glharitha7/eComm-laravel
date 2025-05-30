@extends('master')

@section('content')
<div class="custom-product container my-5">

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-semibold text-dark">Order Summary</h5>
                    <a href="/" class="text-decoration-none text-muted small">← Continue Shopping</a>
                </div>

                <div class="card-body p-4">
                    <!-- Order Details -->
                    <table class="table table-borderless mb-4">
                        <tbody>
                            <tr>
                                <td class="text-muted">Subtotal</td>
                                <td class="text-end text-dark">${{ number_format($total, 2) }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Tax</td>
                                <td class="text-end text-dark">$0.00</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Delivery Fee</td>
                                <td class="text-end text-dark">$10.00</td>
                            </tr>
                            <tr class="border-top pt-3">
                                <td class="fw-bold fs-5 pt-3">Total</td>
                                <td class="fw-bold fs-5 text-end pt-3">${{ number_format($total + 10, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Checkout Form -->
                    <form action="/orderplace" method="POST">
                        @csrf

                        <!-- Shipping Address (Textarea) -->
                        <div class="mb-4">
                            <h6 class="fw-semibold">Shipping Address</h6>
                            <div class="form-group mb-2">
                                <textarea name="address" class="form-control" rows="4" placeholder="Enter your full address (Street, City, State, ZIP)" required></textarea>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="mb-4">
                            <h6 class="fw-semibold">Payment Method</h6>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="payment" id="payment1" value="online" required>
                                <label class="form-check-label" for="payment1">Online Payment</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="payment" id="payment2" value="emi">
                                <label class="form-check-label" for="payment2">EMI Payment</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="payment" id="payment3" value="cod">
                                <label class="form-check-label" for="payment3">Cash on Delivery</label>
                            </div>
                        </div>

                        <!-- Place Order Button -->
                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-warning btn-lg w-100 fw-semibold"
                                style="background-color: #f0c14b; border-color: #a88734; color: #111;">
                                Place Your Order
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
