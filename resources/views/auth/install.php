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
        <form class="login-form" action="/install" method="POST">
            <div class="progress-bar">
                <div class="progress-steps">
                    <div class="step" data-step="1">1</div>
                    <div class="step" data-step="2">2</div>
                    <div class="step" data-step="3">3</div>
                    <div class="step" data-step="4">4</div>
                </div>
                <div class="progress-bar-fill"></div>
            </div>
            <h3 class="login-form-error-message"><?php
                echo ! empty($_SESSION['_response']['_error']) ? $_SESSION['_response']['_error'] : '' ?></h3>
            <div class="login-form-body">
                <div class="form-page" data-page="1">
                    <div class="login-form-header">
                        <h2 class="login-form-header-title text-center">Database Setup</h2>
                        <p class="login-form-desc text-center">Enter your database connection details.</p>
                    </div>
                    <label class="login-form-label" for="db_host">Database Host</label>
                    <input class="login-form-input" value="<?php
                    echo View::oldValue('db_host') ?>" type="text" id="db_host" name="db_host"
                           placeholder="e.g. 127.0.0.1" required>
                    <span class="login-form-error"><?php
                        echo View::validationError('db_host') ?></span>

                    <label class="login-form-label" for="db_port">Database Port</label>
                    <input class="login-form-input" value="<?php
                    echo View::oldValue('db_port') ?>" type="text" id="db_port" name="db_port"
                           placeholder="e.g. 3306" required>
                    <span class="login-form-error"><?php
                        echo View::validationError('db_port') ?></span>

                    <label class="login-form-label" for="db_name">Database Name</label>
                    <input class="login-form-input" value="<?php
                    echo View::oldValue('db_name') ?>" type="text" id="db_name" name="db_name"
                           placeholder="e.g. neurablog" required>
                    <span class="login-form-error"><?php
                        echo View::validationError('db_name') ?></span>

                    <label class="login-form-label" for="db_user">Database Username</label>
                    <input class="login-form-input" value="<?php
                    echo View::oldValue('db_user') ?>" type="text" id="db_user" name="db_user"
                           placeholder="e.g. root" required>
                    <span class="login-form-error"><?php
                        echo View::validationError('db_user') ?></span>

                    <label class="login-form-label" for="db_pass">Database Password</label>
                    <input class="login-form-input" value="<?php
                    echo View::oldValue('db_pass') ?>" type="password" id="db_pass" name="db_pass"
                           placeholder="Your database password">
                    <span class="login-form-error"><?php
                        echo View::validationError('db_pass') ?></span>

                </div>
                <div class="form-page" data-page="2">
                    <div class="login-form-header">
                        <h2 class="login-form-header-title text-center">Site Setup</h2>
                        <p class="login-form-desc text-center">Configure your site settings.</p>
                    </div>

                    <label class="login-form-label" for="site_name">Site Name</label>
                    <input class="login-form-input" value="<?php
                    echo View::oldValue('site_name') ?>" type="text" id="site_name" name="site_name"
                           placeholder="e.g. Neura Blog" required>
                    <span class="login-form-error"><?php
                        echo View::validationError('site_name') ?></span>

                    <label class="login-form-label" for="site_url">Site URL</label>
                    <input class="login-form-input" value="<?php
                    echo View::oldValue('site_url') ?>" type="url" id="site_url" name="site_url"
                           placeholder="e.g. https://example.com" required>
                    <span class="login-form-error"><?php
                        echo View::validationError('site_url') ?></span>
                </div>
                <div class="form-page" data-page="3">
                    <div class="login-form-header">
                        <h2 class="login-form-header-title text-center">Admin Account</h2>
                        <p class="login-form-desc text-center">Create your admin login credentials.</p>
                    </div>

                    <label class="login-form-label" for="admin_name">Admin Name</label>
                    <input class="login-form-input" value="<?php
                    echo View::oldValue('admin_name') ?>" type="text" id="admin_name" name="admin_name"
                           placeholder="Your full name" required>
                    <span class="login-form-error"><?php
                        echo View::validationError('admin_name') ?></span>

                    <label class="login-form-label" for="admin_email">Admin Email</label>
                    <input class="login-form-input" value="<?php
                    echo View::oldValue('admin_email') ?>" type="email" id="admin_email" name="admin_email"
                           placeholder="your.email@example.com" required>
                    <span class="login-form-error"><?php
                        echo View::validationError('admin_email') ?></span>

                    <label class="login-form-label" for="admin_password">Password</label>
                    <input class="login-form-input" value="<?php
                    echo View::oldValue('admin_password') ?>" type="password" id="admin_password" name="admin_password"
                           placeholder="Choose a strong password" required>
                    <span class="login-form-error"><?php
                        echo View::validationError('admin_password') ?></span>

                    <label class="login-form-label" for="admin_password_confirm">Confirm Password</label>
                    <input class="login-form-input" value="<?php
                    echo View::oldValue('admin_password_confirm') ?>" type="password" id="admin_password_confirm"
                           name="admin_password_confirm"
                           placeholder="Repeat your password" required>
                    <span class="login-form-error"><?php
                        echo View::validationError('admin_password_confirm') ?></span>
                </div>
                <div class="form-page" data-page="4">
                    <div class="login-form-header">
                        <h2 class="login-form-header-title text-center">Finalize Installation</h2>
                        <p class="login-form-desc text-center">Review your settings and confirm to proceed.</p>
                    </div>
                    <p class="mb-22">Please ensure all your details are correct before installing Neura Blog.</p>
                </div>
            </div>
            <div class="button-twice">
                <button class="button button-reset button-primary button-disabled" type="button" id="back">Back</button>
                <button class="button button-reset button-primary" type="button" id="next">Next</button>
            </div>
        </form>
    </div>
</div>