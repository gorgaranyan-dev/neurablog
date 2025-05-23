<?php

use App\Core\View;

View::layout( 'layouts.dashboard' );
View::section( 'title', 'Dashboard' );
?>

<div class="container">
    <div class="nav-layout">
        <div class="nav-header">
            <div class="nav-header-logo">
                <h1>NEWRABLOG</h1>
            </div>
            <div class="nav-mobile-toggle">
                <button class="nav-mobile-toggle-in"></button>
            </div>
        </div>
        <div class="nav">
            <div class="nav-in">
                <div class="nav-list">
                    <div class="nav-list-in">
                        <div class="nav-item">
                            <button class="nav-item-in">
                                <svg class="nav-item-i">
                                    <use href="sprite.svg#icon-home"></use>
                                </svg>
                                <span class="nav-item-label">Posts</span>
                                <svg class="nav-item-arrow">
                                    <use href="sprite.svg#icon-home"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="nav-item">
                            <button class="nav-item-in">
                                <svg class="nav-item-i">
                                    <use href="sprite.svg#icon-home"></use>
                                </svg>
                                <span class="nav-item-label">Appearance</span>
                                <svg class="nav-item-arrow">
                                    <use href="sprite.svg#icon-home"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="nav-item">
                            <button class="nav-item-in">
                                <svg class="nav-item-i">
                                    <use href="sprite.svg#icon-home"></use>
                                </svg>
                                <span class="nav-item-label">Settings</span>
                                <svg class="nav-item-arrow">
                                    <use href="sprite.svg#icon-home"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="nav-item">
                            <button class="nav-item-in">
                                <svg class="nav-item-i">
                                    <use href="sprite.svg#icon-home"></use>
                                </svg>
                                <span class="nav-item-label">Users</span>
                                <svg class="nav-item-arrow">
                                    <use href="sprite.svg#icon-home"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-in"></div>
</div>
