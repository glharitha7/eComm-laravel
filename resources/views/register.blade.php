@extends("master")
@section("content")
<div class="container d-flex justify-content-center align-items-center" style="height: 60vh;">
  <div class="col-md-4">
    <h2 class="text-center">Register</h2>
    <form action='/register' method="POST">
        @csrf
        <!-- User Input -->
        <div class="mb-3">
            <label for="email" class="form-label">User Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your username" required>
        </div>
        <!-- Email Input -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <!-- Password Input -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
  </div>
</div>

@endsection