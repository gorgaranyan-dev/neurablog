<?php
use App\Core\View;
View::layout( 'layouts.dashboard' );
View::section( 'title', 'Login Page' );
?>
<div class="row">
    <div class="row-in">
        <div class="login-container">
            <form class="login-form">
                <label class="login-form-label" for="username">Email</label>
                <input class="login-form-input" type="text" id="username" name="username" placeholder="Your email address" required>

                <label class="login-form-label" for="password">Password</label>
                <input class="login-form-input" type="password" id="password" name="password" placeholder="Your password" required>

                <div class="row">
                    <button class="toggle">
                        <i class="toggle-in"></i>
                    </button>
                    <span class="remember-sect">Remember me</span>
                </div>

                <button class="button button-reset button-primary" type="submit">SIGN IN</button>
            </form>
        </div>
    </div>
    <div class="row-in">
        <div class="cover"></div>
    </div>
</div>