<?php

use App\Core\View;

View::layout('layouts.auth');
View::section('title', 'Login Page');
?>
<div class="row">
    <div class="cover">
        <img class="cover-img" src="/public/assets/img/header-cover.png" alt="cover">
    </div>
    <div class="login-container">
        <form class="login-form" method="POST" action="/login">
            <div class="login-form-header">
                <h2 class="login-form-header-title text-center">Welcome Back!</h2>
                <p class="login-form-desc text-center">Enter your email and password to sign in</p>
            </div>
            <?php
            if ( ! empty($_SESSION['_response']) && ! empty($_SESSION['_response']['error'])): ?>
                <h3 class="login-form-error-message mb-22"><?php
                    echo $_SESSION['_response']['error'] ?></h3>
            <?php
            endif; ?>
            <div class="login-form-body">
                <label class="login-form-label" for="username">Email</label>
                <input class="login-form-input" type="email" id="email" name="email"
                       placeholder="Your email address"
                       required>
                <label class="login-form-label" for="password">Password</label>
                <input class="login-form-input" type="password" id="password" name="password"
                       placeholder="Your password"
                       required>
            </div>

            <div class="login-form-footer">
<!--                <div class="login-form-footer-in">-->
<!--                    <button class="toggle" type="button">-->
<!--                        <i class="toggle-in"></i>-->
<!--                    </button>-->
<!--                    <span class="remember-sect">Remember me</span>-->
<!--                </div>-->
                <button class="button button-reset button-primary mb-22" type="submit">SIGN IN</button>
                <p class="login-form-desc text-center">Don't have an account? <a href="#" class="login-form-link">Sign
                        up</a></p>
            </div>
        </form>
    </div>
</div>