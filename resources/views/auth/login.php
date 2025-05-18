<?php

use App\Core\View;

View::layout( 'layouts.dashboard' );
View::section( 'title', 'Login Page' );
?>
<div class="row">
    <div class="cover">
        <img class="cover-img" src="public/assets/img/header-cover.png" alt="cover">
    </div>
    <div class="login-container">
        <form class="login-form d-none">

            <div class="login-form-header">
                <h2 class="login-form-header-title">Welcome Back!</h2>
                <p class="login-form-desc">Enter your email and password to sign in</p>
            </div>
            <div class="login-form-body">
                <label class="login-form-label" for="username">Email</label>
                <input class="login-form-input" type="text" id="username" name="username"
                       placeholder="Your email address"
                       required>
                <label class="login-form-label" for="password">Password</label>
                <input class="login-form-input" type="password" id="password" name="password"
                       placeholder="Your password"
                       required>
            </div>

            <div class="login-form-footer">
                <div class="login-form-footer-in">
                    <button class="toggle" type="button">
                        <i class="toggle-in"></i>
                    </button>
                    <span class="remember-sect">Remember me</span>
                </div>
                <button class="button button-reset button-primary mb-22" type="submit">SIGN IN</button>
                <p class="login-form-desc text-center">Don't have an account? <a href="#" class="login-form-link">Sign
                        up</a></p>
            </div>
        </form>

        <form class="login-form d-none">
            <div class="login-form-header">
                <div class="progress-bar">
                    <div class="progress-bar-fill"></div>
                </div>
            </div>
            <div class="login-form-body">
                <div class="form-page" data-page="1">
                    <label class="login-form-label" for="username">Email</label>
                    <input class="login-form-input" type="text" id="username" name="username"
                           placeholder="Your email address" required>
                    <label class="login-form-label" for="password1">Password 1</label>
                    <input class="login-form-input" type="password" id="password1" name="password1"
                           placeholder="Your password" required>
                    <label class="login-form-label" for="password2">Password 2</label>
                    <input class="login-form-input" type="password" id="password2" name="password2"
                           placeholder="Your password" required>
                </div>
                <div class="form-page" data-page="2">
                    <label class="login-form-label" for="password3">page 2</label>
                    <input class="login-form-input" type="password" id="password3" name="password3"
                           placeholder="Your password" required>
                    <label class="login-form-label" for="password4">Password 4</label>
                    <input class="login-form-input" type="password" id="password4" name="password4"
                           placeholder="Your password" required>
                    <label class="login-form-label" for="password5">Password 5</label>
                    <input class="login-form-input" type="password" id="password5" name="password5"
                           placeholder="Your password" required>
                </div>
                <div class="form-page" data-page="3">
                    <label class="login-form-label" for="password3">page 2</label>
                    <input class="login-form-input" type="password" id="password3" name="password3"
                           placeholder="Your password" required>
                    <label class="login-form-label" for="password4">Password 4</label>
                    <input class="login-form-input" type="password" id="password4" name="password4"
                           placeholder="Your password" required>
                    <label class="login-form-label" for="password5">Password 5</label>
                    <input class="login-form-input" type="password" id="password5" name="password5"
                           placeholder="Your password" required>
                </div>
                <div class="form-page" data-page="4">
                    <label class="login-form-label" for="password3">page 2</label>
                    <input class="login-form-input" type="password" id="password3" name="password3"
                           placeholder="Your password" required>
                    <label class="login-form-label" for="password4">Password 4</label>
                    <input class="login-form-input" type="password" id="password4" name="password4"
                           placeholder="Your password" required>
                    <label class="login-form-label" for="password5">Password 5</label>
                    <input class="login-form-input" type="password" id="password5" name="password5"
                           placeholder="Your password" required>
                </div>
            </div>

            <div class="button-twice">
                <button class="button button-reset button-primary button-disabled" type="button" id="back">Back</button>
                <button class="button button-reset button-primary" type="button" id="next">Next</button>
            </div>
        </form>
        <form class="login-form">
            <div class="login-form-header">
                <h2 class="login-form-header-title text-center">Register with</h2>
            </div>
            <div class="login-form-body">
                <label class="login-form-label" for="username">Name</label>
                <input class="login-form-input" type="text" id="username" name="Your full name"
                       placeholder="Your email address"
                       required>
                <label class="login-form-label" for="username">Email</label>
                <input class="login-form-input" type="text" id="username" name="Your email address"
                       placeholder="Your email address"
                       required>
                <label class="login-form-label" for="password">Password</label>
                <input class="login-form-input" type="password" id="password" name="password"
                       placeholder="Your password"
                       required>
            </div>

            <div class="login-form-footer">
                <div class="login-form-footer-in">
                    <button class="toggle" type="button">
                        <i class="toggle-in"></i>
                    </button>
                    <span class="remember-sect">Remember me</span>
                </div>
                <button class="button button-reset button-primary mb-22" type="submit">SIGN UP</button>
                <p class="login-form-desc text-center">Already have an account? <a href="#" class="login-form-link">Sign
                        in</a></p>
            </div>
        </form>
    </div>
</div>

<script>
    let toggleButton = document.querySelector('.toggle')

    toggleButton.addEventListener('click', () => {
        toggleButton.classList.toggle('active')
    });
    document.addEventListener('DOMContentLoaded', () => {
        const formPages = document.querySelectorAll('.form-page');
        const backButton = document.querySelector('#back');
        const nextButton = document.querySelector('#next');
        const progressBarFill = document.querySelector('.progress-bar-fill');
        let currentPage = 1;

        updatePage();

        nextButton.addEventListener('click', () => {
            if (currentPage < formPages.length) {
                currentPage++;
                updatePage();
            }
        });

        backButton.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                updatePage();
            }
        });

        function updatePage() {
            formPages.forEach(page => {
                const isActive = page.dataset.page == currentPage;
                page.classList.toggle('active', isActive);
                page.classList.toggle('d-none', !isActive);
            });

            const progress = ((currentPage - 1) / (formPages.length - 1)) * 100;
            progressBarFill.style.width = `${progress}%`;

            backButton.classList.toggle('button-disabled', currentPage === 1);
            nextButton.classList.toggle('button-disabled', currentPage === formPages.length);
        }
    });
</script>