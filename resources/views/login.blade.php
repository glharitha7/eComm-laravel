@extends("master")
@section("content")
<div class="container d-flex justify-content-center align-items-center" style="height: 60vh;">
  <div class="col-md-4">
    <h2 class="text-center">Login</h2>
    <form>
      <!-- Email Input -->
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
      </div>

      <!-- Password Input -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
      </div>

      <!-- Remember Me Checkbox -->
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="rememberMe">
        <label class="form-check-label" for="rememberMe">
          Remember me
        </label>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary w-100">Login</button>

      <!-- Forgot Password Link -->
      <div class="mt-3 text-center">
        <a href="#">Forgot password?</a>
      </div>
    </form>
  </div>
</div>

@endsection