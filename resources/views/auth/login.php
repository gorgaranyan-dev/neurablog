<?php
use App\Core\View;
View::layout( 'layouts.dashboard' );
View::section( 'title', 'Login Page' );
?>
<div class="container-row">
    <div class="container-row-in">

    </div>
    <div class="container-row-in">
        <div class="card shadow p-4">
            <h1 class="text-center mb-4">Login</h1>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign In</button>
            </form>
        </div>
    </div>
</div>