<?php

use App\Core\View;

View::layout( 'layouts.dashboard' );
View::section( 'title', 'Dashboard' );
?>

<div class="dashboard">
    <div class="container">
        <div class="nav-layout">
            <div class="nav-header nav-in">
                <div class="nav-header-logo">
                    <h1 class=" nav-header-logo-in text-center">Our logo here</h1>
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
                                    <svg class="nav-item-i" viewBox="0 0 24 24" fill="none">
                                        <path d="M8.4375 17.6252H7.6875C7.53832 17.6252 7.39524 17.566 7.28975 17.4605C7.18426 17.355 7.125 17.2119 7.125 17.0627V13.6877C7.125 13.5386 7.18426 13.3955 7.28975 13.29C7.39524 13.1845 7.53832 13.1252 7.6875 13.1252H8.4375C8.58668 13.1252 8.72976 13.1845 8.83525 13.29C8.94074 13.3955 9 13.5386 9 13.6877V17.0627C9 17.2119 8.94074 17.355 8.83525 17.4605C8.72976 17.566 8.58668 17.6252 8.4375 17.6252V17.6252Z"
                                              fill="#602F6B"/>
                                        <path d="M13.6875 17.6246H12.9375C12.7883 17.6246 12.6452 17.5654 12.5398 17.4599C12.4343 17.3544 12.375 17.2113 12.375 17.0621V11.4371C12.375 11.2879 12.4343 11.1449 12.5398 11.0394C12.6452 10.9339 12.7883 10.8746 12.9375 10.8746H13.6875C13.8367 10.8746 13.9798 10.9339 14.0852 11.0394C14.1907 11.1449 14.25 11.2879 14.25 11.4371V17.0621C14.25 17.2113 14.1907 17.3544 14.0852 17.4599C13.9798 17.5654 13.8367 17.6246 13.6875 17.6246V17.6246Z"
                                              fill="#602F6B"/>
                                        <path d="M16.3125 17.625H15.5625C15.4133 17.625 15.2702 17.5657 15.1648 17.4602C15.0593 17.3548 15 17.2117 15 17.0625V8.8125C15 8.66332 15.0593 8.52024 15.1648 8.41475C15.2702 8.30926 15.4133 8.25 15.5625 8.25H16.3125C16.4617 8.25 16.6048 8.30926 16.7102 8.41475C16.8157 8.52024 16.875 8.66332 16.875 8.8125V17.0625C16.875 17.2117 16.8157 17.3548 16.7102 17.4602C16.6048 17.5657 16.4617 17.625 16.3125 17.625V17.625Z"
                                              fill="#602F6B"/>
                                        <path d="M11.0625 17.6248H10.3125C10.1633 17.6248 10.0202 17.5655 9.91475 17.46C9.80926 17.3545 9.75 17.2114 9.75 17.0623V6.93726C9.75 6.78807 9.80926 6.645 9.91475 6.53951C10.0202 6.43402 10.1633 6.37476 10.3125 6.37476H11.0625C11.2117 6.37476 11.3548 6.43402 11.4602 6.53951C11.5657 6.645 11.625 6.78807 11.625 6.93726V17.0623C11.625 17.2114 11.5657 17.3545 11.4602 17.46C11.3548 17.5655 11.2117 17.6248 11.0625 17.6248V17.6248Z"
                                              fill="#602F6B"/>
                                        <circle cx="12" cy="12" r="11.5" stroke="#602F6B"/>
                                    </svg>
                                    <span class="nav-item-label">Posts</span>
                                    <svg class="nav-item-arrow" viewBox="0 0 24 24">
                                        <path d="M5.29606 8.554C5.48568 8.36444 5.74282 8.25795 6.01095 8.25795C6.27907 8.25795 6.53622 8.36444 6.72584 8.554L11.7311 13.5593L16.7364 8.554C16.9271 8.36981 17.1825 8.26789 17.4476 8.27019C17.7127 8.2725 17.9664 8.37884 18.1538 8.56632C18.3413 8.7538 18.4477 9.00741 18.45 9.27253C18.4523 9.53766 18.3503 9.79308 18.1662 9.98379L12.446 15.7039C12.2564 15.8935 11.9992 16 11.7311 16C11.463 16 11.2058 15.8935 11.0162 15.7039L5.29606 9.98379C5.10649 9.79417 5 9.53702 5 9.2689C5 9.00077 5.10649 8.74362 5.29606 8.554Z"/>
                                    </svg>
                                </button>
                                <div class="nav-dropdown">
                                    <div class="nav-dropdown-in">
                                        <div class="nav-dropdown-item">
                                            <a href="#" data-tab="posts" class="nav-dropdown-item-in">
                                                <span class="nav-dropdown-item-label">All Posts</span>
                                            </a>
                                        </div>
                                        <div class="nav-dropdown-item">
                                            <a href="#" data-tab="add-post" class="nav-dropdown-item-in">
                                                <span class="nav-dropdown-item-label">Add New</span>
                                            </a>
                                        </div>
                                        <div class="nav-dropdown-item">
                                            <a href="#" data-tab="comments" class="nav-dropdown-item-in">
                                                <span class="nav-dropdown-item-label">Comments</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-item">
                                <button class="nav-item-in">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="11.5" stroke="#602F6B"/>
                                        <path d="M6.75 14.8121C6.75 15.1602 6.88828 15.4941 7.13442 15.7402C7.38056 15.9864 7.7144 16.1246 8.0625 16.1246H15.9375C16.2856 16.1246 16.6194 15.9864 16.8656 15.7402C17.1117 15.4941 17.25 15.1602 17.25 14.8121V11.2028H6.75V14.8121ZM8.29687 13.0309C8.29687 12.8444 8.37095 12.6656 8.50281 12.5337C8.63468 12.4018 8.81352 12.3278 9 12.3278H10.125C10.3115 12.3278 10.4903 12.4018 10.6222 12.5337C10.754 12.6656 10.8281 12.8444 10.8281 13.0309V13.4996C10.8281 13.6861 10.754 13.865 10.6222 13.9968C10.4903 14.1287 10.3115 14.2028 10.125 14.2028H9C8.81352 14.2028 8.63468 14.1287 8.50281 13.9968C8.37095 13.865 8.29687 13.6861 8.29687 13.4996V13.0309Z"
                                              fill="#602F6B"/>
                                        <path d="M15.9375 7.87427H8.0625C7.7144 7.87427 7.38056 8.01255 7.13442 8.25869C6.88828 8.50483 6.75 8.83867 6.75 9.18677V9.79614H17.25V9.18677C17.25 8.83867 17.1117 8.50483 16.8656 8.25869C16.6194 8.01255 16.2856 7.87427 15.9375 7.87427V7.87427Z"
                                              fill="#602F6B"/>
                                    </svg>
                                    <span class="nav-item-label">Appearance</span>
                                    <svg class="nav-item-arrow" viewBox="0 0 24 24">
                                        <path d="M5.29606 8.554C5.48568 8.36444 5.74282 8.25795 6.01095 8.25795C6.27907 8.25795 6.53622 8.36444 6.72584 8.554L11.7311 13.5593L16.7364 8.554C16.9271 8.36981 17.1825 8.26789 17.4476 8.27019C17.7127 8.2725 17.9664 8.37884 18.1538 8.56632C18.3413 8.7538 18.4477 9.00741 18.45 9.27253C18.4523 9.53766 18.3503 9.79308 18.1662 9.98379L12.446 15.7039C12.2564 15.8935 11.9992 16 11.7311 16C11.463 16 11.2058 15.8935 11.0162 15.7039L5.29606 9.98379C5.10649 9.79417 5 9.53702 5 9.2689C5 9.00077 5.10649 8.74362 5.29606 8.554Z"/>
                                    </svg>
                                </button>
                                <div class="nav-dropdown">
                                    <div class="nav-dropdown-in">
                                        <div class="nav-dropdown-item">
                                            <a href="#" data-tab="logo" class="nav-dropdown-item-in">
                                                <span class="nav-dropdown-item-label">Logo</span>
                                            </a>
                                        </div>
                                        <div class="nav-dropdown-item">
                                            <a href="#" data-tab="themes" class="nav-dropdown-item-in">
                                                <span class="nav-dropdown-item-label">Themes</span>
                                            </a>
                                        </div>
                                        <div class="nav-dropdown-item">
                                            <a href="#" data-tab="colors" class="nav-dropdown-item-in">
                                                <span class="nav-dropdown-item-label">Colors etc</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-item">
                                <button class="nav-item-in">
                                    <svg class="nav-item-i" viewBox="0 0 24 24" fill="none">
                                        <path d="M17.0051 8.82518C16.978 8.77267 16.939 8.72727 16.8912 8.69269C16.8433 8.65811 16.7879 8.63532 16.7296 8.62618C16.6712 8.61704 16.6116 8.62181 16.5554 8.6401C16.4993 8.65839 16.4482 8.68969 16.4065 8.73143L14.9665 10.1724C14.8958 10.242 14.8005 10.2811 14.7013 10.2811C14.602 10.2811 14.5068 10.242 14.4361 10.1724L13.8136 9.54893C13.7787 9.51411 13.7511 9.47277 13.7323 9.42726C13.7134 9.38176 13.7037 9.33299 13.7037 9.28374C13.7037 9.23448 13.7134 9.18571 13.7323 9.14021C13.7511 9.09471 13.7787 9.05337 13.8136 9.01854L15.2475 7.5844C15.2905 7.54142 15.3224 7.48864 15.3404 7.43059C15.3585 7.37255 15.3621 7.31099 15.3511 7.25121C15.3401 7.19143 15.3147 7.13523 15.2771 7.08744C15.2396 7.03966 15.1909 7.00172 15.1354 6.9769V6.9769C14.0524 6.49268 12.7005 6.74534 11.8481 7.59143C11.1239 8.3105 10.908 9.43409 11.2563 10.6742C11.2751 10.7403 11.2752 10.8103 11.2566 10.8765C11.238 10.9427 11.2015 11.0025 11.1511 11.0492L7.2492 14.6128C7.09719 14.7493 6.97458 14.9153 6.88885 15.1008C6.80312 15.2862 6.75606 15.4871 6.75055 15.6913C6.74503 15.8955 6.78118 16.0987 6.85678 16.2885C6.93238 16.4783 7.04585 16.6507 7.19027 16.7952C7.33469 16.9397 7.50703 17.0532 7.69678 17.1289C7.88653 17.2046 8.0897 17.2408 8.29392 17.2354C8.49813 17.23 8.6991 17.183 8.88456 17.0973C9.07002 17.0117 9.23609 16.8892 9.37264 16.7372L12.9745 12.8267C13.0205 12.7769 13.0793 12.7406 13.1444 12.7217C13.2095 12.7028 13.2786 12.7021 13.3441 12.7196C13.6972 12.8163 14.0613 12.8665 14.4274 12.8689C15.2102 12.8689 15.8972 12.6155 16.3926 12.1273C17.3102 11.2233 17.4501 9.69003 17.0051 8.82518ZM8.33178 16.4806C8.17742 16.4974 8.02163 16.4659 7.88592 16.3905C7.75022 16.315 7.64127 16.1993 7.57413 16.0593C7.50699 15.9193 7.48496 15.7619 7.51108 15.6088C7.53721 15.4558 7.61019 15.3146 7.71997 15.2048C7.82975 15.0949 7.97091 15.0219 8.12396 14.9957C8.27701 14.9696 8.43442 14.9915 8.57445 15.0586C8.71449 15.1257 8.83025 15.2346 8.90575 15.3703C8.98126 15.506 9.01279 15.6618 8.99599 15.8161C8.97752 15.986 8.9016 16.1444 8.78082 16.2652C8.66003 16.3861 8.50161 16.462 8.33178 16.4806V16.4806Z"
                                              fill="#602F6B"/>
                                        <circle cx="12" cy="12" r="11.5" stroke="#602F6B"/>
                                    </svg>
                                    <span class="nav-item-label">Settings</span>
                                    <svg class="nav-item-arrow" viewBox="0 0 24 24">
                                        <path d="M5.29606 8.554C5.48568 8.36444 5.74282 8.25795 6.01095 8.25795C6.27907 8.25795 6.53622 8.36444 6.72584 8.554L11.7311 13.5593L16.7364 8.554C16.9271 8.36981 17.1825 8.26789 17.4476 8.27019C17.7127 8.2725 17.9664 8.37884 18.1538 8.56632C18.3413 8.7538 18.4477 9.00741 18.45 9.27253C18.4523 9.53766 18.3503 9.79308 18.1662 9.98379L12.446 15.7039C12.2564 15.8935 11.9992 16 11.7311 16C11.463 16 11.2058 15.8935 11.0162 15.7039L5.29606 9.98379C5.10649 9.79417 5 9.53702 5 9.2689C5 9.00077 5.10649 8.74362 5.29606 8.554Z"/>
                                    </svg>
                                </button>
                                <div class="nav-dropdown">
                                    <div class="nav-dropdown-in">
                                        <div class="nav-dropdown-item">
                                            <a href="#" data-tab="seo" class="nav-dropdown-item-in">
                                                <span class="nav-dropdown-item-label">SEO</span>
                                            </a>
                                        </div>
                                        <div class="nav-dropdown-item">
                                            <a href="#" data-tab="general" class="nav-dropdown-item-in">
                                                <span class="nav-dropdown-item-label">General</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-item">
                                <button class="nav-item-in">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="11.5" stroke="#602F6B"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.5 10.75C8.5 9.50736 9.50736 8.5 10.75 8.5C11.9927 8.5 13 9.50736 13 10.75C13 11.9927 11.9927 13 10.75 13C9.50736 13 8.5 11.9927 8.5 10.75Z"
                                              fill="#602F6B"/>
                                        <path d="M13.184 12.0316C13.1612 12.0747 13.1709 12.1285 13.21 12.1575C13.5008 12.3727 13.8607 12.5 14.2502 12.5C15.2167 12.5 16.0002 11.7165 16.0002 10.75C16.0002 9.7835 15.2167 9 14.2502 9C13.8607 9 13.5008 9.1273 13.21 9.34257C13.1709 9.37157 13.1612 9.42529 13.184 9.46839C13.3859 9.85109 13.5002 10.2872 13.5002 10.75C13.5002 11.2128 13.3859 11.6489 13.184 12.0316Z"
                                              fill="#602F6B"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.32033 13.8496C8.93651 13.5822 9.74498 13.5 10.7497 13.5C11.7554 13.5 12.5644 13.5823 13.1808 13.8504C13.8523 14.1423 14.2604 14.6396 14.4743 15.3418C14.5745 15.6709 14.3273 16 13.9867 16H7.51376C7.1727 16 6.92498 15.6704 6.02554 15.3407C7.23973 14.6385 7.64845 14.1413 8.32033 13.8496Z"
                                              fill="#602F6B"/>
                                        <path d="M13.4094 13.0182C13.2024 13.0311 13.1903 13.3092 13.3805 13.3919C13.9017 13.6185 14.2941 13.9522 14.5756 14.378C14.8065 14.7275 15.1652 15 15.584 15H16.4743C16.8279 15 17.0859 14.6487 16.9615 14.3054C16.9544 14.2857 16.9469 14.2661 16.9392 14.2466C16.768 13.8143 16.4746 13.4961 16.0401 13.2932C15.6321 13.1028 15.1214 13.0242 14.5198 13.0004L14.5099 13H14.5C14.1456 13 13.7755 12.9955 13.4094 13.0182Z"
                                              fill="#602F6B"/>
                                    </svg>
                                    <span class="nav-item-label">Users</span>
                                    <svg class="nav-item-arrow" viewBox="0 0 24 24">
                                        <path d="M5.29606 8.554C5.48568 8.36444 5.74282 8.25795 6.01095 8.25795C6.27907 8.25795 6.53622 8.36444 6.72584 8.554L11.7311 13.5593L16.7364 8.554C16.9271 8.36981 17.1825 8.26789 17.4476 8.27019C17.7127 8.2725 17.9664 8.37884 18.1538 8.56632C18.3413 8.7538 18.4477 9.00741 18.45 9.27253C18.4523 9.53766 18.3503 9.79308 18.1662 9.98379L12.446 15.7039C12.2564 15.8935 11.9992 16 11.7311 16C11.463 16 11.2058 15.8935 11.0162 15.7039L5.29606 9.98379C5.10649 9.79417 5 9.53702 5 9.2689C5 9.00077 5.10649 8.74362 5.29606 8.554Z"/>
                                    </svg>
                                </button>
                                <div class="nav-dropdown">
                                    <div class="nav-dropdown-in">
                                        <div class="nav-dropdown-item">
                                            <a href="#" data-tab="users" class="nav-dropdown-item-in">
                                                <span class="nav-dropdown-item-label">All Users</span>
                                            </a>
                                        </div>
                                        <div class="nav-dropdown-item">
                                            <a href="#" data-tab="add-user" class="nav-dropdown-item-in">
                                                <span class="nav-dropdown-item-label">Add New</span>
                                            </a>
                                        </div>
                                        <div class="nav-dropdown-item">
                                            <a href="#" data-tab="user-comments" class="nav-dropdown-item-in">
                                                <span class="nav-dropdown-item-label">Comments</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-in">
            <div class="content">
                <div class="content-body">
                    <div class="content-body-in">
                        <div class="content-body-inner" id="posts">
                            <div class="posts-toolbar">
                                <div class="posts-toolbar-left">
                                    <h1 class="posts-title">
                                        Posts <a href="#" class="btn btn-primary">Add New</a>
                                    </h1>

                                    <div class="post-status-tabs">
                                        <a href="#" class="tab active">All</a>
                                        <span class="post-status-tabs-divider"> | </span>
                                        <a href="#" class="tab">Published</a>
                                        <span class="post-status-tabs-divider"> | </span>
                                        <a href="#" class="tab">Draft</a>
                                    </div>

                                    <div class="select-container select-primary">
                                        <select class="select-in">
                                            <option value="">All Categories</option>
                                            <option>News</option>
                                            <option>Tutorials</option>
                                            <option>Reviews</option>
                                        </select>
                                        <select class="select-in">
                                            <option value="">All Authors</option>
                                            <option>Admin</option>
                                            <option>Editor</option>
                                        </select>
                                        <button class="btn btn-primary">Filter</button>
                                        <button class="btn btn-primary"><span>Delete</span></button>
                                    </div>
                                </div>

                                <div class="posts-toolbar-right">
                                    <div><input type="text" class="search-box" placeholder="Search posts..."/>
                                        <button class="btn btn-primary ml-12">Search</button>
                                    </div>

                                    <div class="pagination-container">
                                        <span class="pagination-info">Showing 11–20 of 100 results</span>
                                        <ul class="pagination">
                                            <li class="pagination-in"><a class="pagination-item" href="#">«</a></li>
                                            <li class="pagination-in"><a class="pagination-item" href="#">1</a></li>
                                            <li class="pagination-in"><a class="pagination-item" href="#"
                                                                         class="active">2</a></li>
                                            <li class="pagination-in"><a class="pagination-item" href="#">3</a></li>
                                            <li class="pagination-in"><a class="pagination-item" href="#">4</a></li>
                                            <li class="pagination-in"><a class="pagination-item" href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-content">
                                <div class="table-body">
                                    <div class="table-body-in">
                                        <table class="table">
                                            <thead class="table-head">
                                            <tr class="table-head-tr">
                                                <th class="table-head-items">
                                                    <input type="checkbox">
                                                </th>
                                                <th class="table-head-items">Title</th>
                                                <th class="table-head-items">Views</th>
                                                <th class="table-head-items">Created At</th>
                                                <th class="table-head-items">Author</th>
                                                <th class="table-head-items">Categories</th>
                                            </tr>
                                            </thead>
                                            <tbody class="table-body">
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Nine
                                                    </div>
                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Ten
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a></div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <a href="#" class="table-actions">
                                                                <span>Trash</span>
                                                            </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Eleven
                                                    </div>

                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            <tr class="table-body-tr">
                                                <td class="table-body-items table-active-users">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="table-body-items">
                                                    <div class="table-project-name">
                                                        Blog Twenty
                                                    </div>
                                                    <div class="table-progress-bar">
                                                        <a href="#" class="table-actions">
                                                            <span>Edit</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>View</span>
                                                        </a>
                                                        |
                                                        <a href="#" class="table-actions">
                                                            <span>Trash</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>10.000</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>26.05.2025</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Jon Jons</span>
                                                </td>
                                                <td class="table-body-items">
                                                    <span>Animals</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-container">
                                <span class="pagination-info">Showing 11–20 of 100 results</span>
                                <ul class="pagination">
                                    <li class="pagination-in"><a class="pagination-item" href="#">«</a></li>
                                    <li class="pagination-in"><a class="pagination-item" href="#">1</a></li>
                                    <li class="pagination-in"><a class="pagination-item" href="#" class="active">2</a>
                                    </li>
                                    <li class="pagination-in"><a class="pagination-item" href="#">3</a></li>
                                    <li class="pagination-in"><a class="pagination-item" href="#">4</a></li>
                                    <li class="pagination-in"><a class="pagination-item" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-body-inner" id="add-post">
                            <div class="posts-toolbar">
                                <div class="posts-toolbar-left">
                                    <h1 class="posts-title">
                                        Editor
                                    </h1>
                                </div>

                                <div class="table-content">
                                    <div class="editor-column">
                                        <h2 class="editor-title-in">Title</h2>
                                        <div class="editor-column-in">
                                            <div class="editor-title">
                                                <input class="editor-title-desc input-reset" type="text"
                                                       placeholder="Title">
                                            </div>

                                            <div class="editor-actions">
                                                <div class="editor-actions-in">
                                                    <button class="button button-secondary button-w-85 h-38">
                                                        <svg class="button-i" viewBox="0 0 16 16" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8 7.75C8.95703 7.75 9.75 8.54297 9.75 9.5C9.75 10.4844 8.95703 11.25 8 11.25C7.01562 11.25 6.25 10.4844 6.25 9.5C6.25 8.54297 7.01562 7.75 8 7.75ZM13.7148 4.30469C13.9609 4.55078 14.125 4.90625 14.125 5.23438V12.125C14.125 13.1094 13.332 13.875 12.375 13.875H3.625C2.64062 13.875 1.875 13.1094 1.875 12.125V3.375C1.875 2.41797 2.64062 1.625 3.625 1.625H10.5156C10.8438 1.625 11.1992 1.78906 11.418 2.00781L13.7148 4.30469ZM5.375 2.9375V5.125H9.3125V2.9375H5.375ZM12.8125 12.125V5.31641C12.8125 5.26172 12.7852 5.23438 12.7578 5.20703L10.625 3.04688V5.78125C10.625 6.16406 10.3242 6.4375 9.96875 6.4375H4.71875C4.33594 6.4375 4.0625 6.16406 4.0625 5.78125V2.9375H3.625C3.37891 2.9375 3.1875 3.15625 3.1875 3.375V12.125C3.1875 12.3711 3.37891 12.5625 3.625 12.5625H12.375C12.5938 12.5625 12.8125 12.3711 12.8125 12.125Z"/>
                                                        </svg>
                                                        <span class="button-label">Draft</span>
                                                    </button>
                                                    <button class="button button-secondary button-w-85 h-38">
                                                        <svg class="button-i" viewBox="0 0 16 16" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.5 7.75C4.5 5.83594 6.05859 4.25 8 4.25C9.91406 4.25 11.5 5.83594 11.5 7.75C11.5 9.69141 9.91406 11.25 8 11.25C6.05859 11.25 4.5 9.69141 4.5 7.75ZM8 9.9375C9.20312 9.9375 10.1875 8.98047 10.1875 7.75C10.1875 6.54688 9.20312 5.5625 8 5.5625C7.97266 5.5625 7.94531 5.5625 7.91797 5.5625C7.97266 5.72656 8 5.86328 8 6C8 6.98438 7.20703 7.75 6.25 7.75C6.08594 7.75 5.94922 7.75 5.8125 7.69531C5.8125 7.72266 5.8125 7.75 5.8125 7.75C5.8125 8.98047 6.76953 9.9375 8 9.9375ZM2.72266 3.83984C4.00781 2.63672 5.78516 1.625 8 1.625C10.1875 1.625 11.9648 2.63672 13.25 3.83984C14.5352 5.01562 15.3828 6.4375 15.793 7.42188C15.875 7.64062 15.875 7.88672 15.793 8.10547C15.3828 9.0625 14.5352 10.4844 13.25 11.6875C11.9648 12.8906 10.1875 13.875 8 13.875C5.78516 13.875 4.00781 12.8906 2.72266 11.6875C1.4375 10.4844 0.589844 9.0625 0.179688 8.10547C0.0976562 7.88672 0.0976562 7.64062 0.179688 7.42188C0.589844 6.4375 1.4375 5.01562 2.72266 3.83984ZM8 2.9375C6.19531 2.9375 4.74609 3.75781 3.625 4.79688C2.55859 5.78125 1.84766 6.92969 1.46484 7.75C1.84766 8.57031 2.55859 9.74609 3.625 10.7305C4.74609 11.7695 6.19531 12.5625 8 12.5625C9.77734 12.5625 11.2266 11.7695 12.3477 10.7305C13.4141 9.74609 14.125 8.57031 14.5078 7.75C14.125 6.92969 13.4141 5.78125 12.3477 4.79688C11.2266 3.75781 9.77734 2.9375 8 2.9375Z"/>
                                                        </svg>
                                                        <span class="button-label">Preview</span>
                                                    </button>
                                                    <button class="button button-primary button-w-85 h-38 button-disabled">
                                                        <svg class="button-i" viewBox="0 0 16 16" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.6992 0.886719C14.918 1.02344 15.0273 1.26953 14.9453 1.51562L13.1953 13.3281C13.168 13.5195 13.0586 13.7109 12.8672 13.793C12.7852 13.8477 12.6758 13.9023 12.5664 13.9023C12.457 13.9023 12.375 13.875 12.293 13.8477L9.61328 12.6992L6.57812 14.668C6.46875 14.7227 6.33203 14.75 6.22266 14.75C6.14062 14.75 6.03125 14.7227 5.92188 14.6953C5.70312 14.5586 5.59375 14.3398 5.59375 14.0938V11.0039L1.38281 9.25391C1.16406 9.14453 1 8.92578 1 8.67969C0.972656 8.43359 1.10938 8.1875 1.32812 8.07812L14.0156 0.859375C14.2344 0.722656 14.5078 0.75 14.6992 0.886719ZM11.0898 4.03125L3.13281 8.54297L5.97656 9.74609L11.0898 4.03125ZM6.87891 12.8906L8.13672 12.0977L6.87891 11.5508V12.8906ZM12.0469 12.2891L13.3594 3.45703L7.23438 10.2656L12.0469 12.2891Z"/>
                                                        </svg>
                                                        <span class="button-label">Public</span>
                                                    </button>
                                                </div>
                                                <table class="editor-table">
                                                    <tbody>
                                                    <tr class="editor-table-in">
                                                        <td class="editor-table-title">Status:</td>
                                                        <td class="editor-table-desc">
                                                            <div class="editor-table-desc-in">
                                                                <svg class="editor-table-i" viewBox="0 0 16 16"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12.5388 7.06274H8.43726C8.06429 7.06274 7.70661 6.91458 7.44289 6.65086C7.17916 6.38714 7.03101 6.02945 7.03101 5.65649V1.55493C7.03101 1.52385 7.01866 1.49404 6.99668 1.47207C6.97471 1.45009 6.9449 1.43774 6.91382 1.43774H4.21851C3.72122 1.43774 3.24431 1.63529 2.89268 1.98692C2.54105 2.33855 2.34351 2.81546 2.34351 3.31274V12.6877C2.34351 13.185 2.54105 13.6619 2.89268 14.0136C3.24431 14.3652 3.72122 14.5627 4.21851 14.5627H10.781C11.2783 14.5627 11.7552 14.3652 12.1068 14.0136C12.4585 13.6619 12.656 13.185 12.656 12.6877V7.17993C12.656 7.14885 12.6437 7.11904 12.6217 7.09707C12.5997 7.07509 12.5699 7.06274 12.5388 7.06274Z"/>
                                                                    <path d="M12.2816 6.026L8.06841 1.81282C8.06021 1.80467 8.0498 1.79913 8.03846 1.79689C8.02713 1.79465 8.01539 1.79581 8.00471 1.80022C7.99403 1.80464 7.9849 1.81211 7.97846 1.8217C7.97202 1.83129 7.96855 1.84257 7.96851 1.85412V5.65715C7.96851 5.78147 8.01789 5.9007 8.1058 5.98861C8.19371 6.07652 8.31294 6.1259 8.43726 6.1259H12.2403C12.2518 6.12585 12.2631 6.12239 12.2727 6.11595C12.2823 6.10951 12.2898 6.10037 12.2942 6.0897C12.2986 6.07902 12.2998 6.06728 12.2975 6.05594C12.2953 6.04461 12.2897 6.03419 12.2816 6.026Z"/>
                                                                </svg>
                                                                <span>Draft</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="editor-table-in">
                                                        <td class="editor-table-title">Publish:</td>
                                                        <td class="editor-table-desc">
                                                            <div class="editor-table-desc-in">
                                                                <svg class="editor-table-i" viewBox="0 0 16 16"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12.5388 7.06274H8.43726C8.06429 7.06274 7.70661 6.91458 7.44289 6.65086C7.17916 6.38714 7.03101 6.02945 7.03101 5.65649V1.55493C7.03101 1.52385 7.01866 1.49404 6.99668 1.47207C6.97471 1.45009 6.9449 1.43774 6.91382 1.43774H4.21851C3.72122 1.43774 3.24431 1.63529 2.89268 1.98692C2.54105 2.33855 2.34351 2.81546 2.34351 3.31274V12.6877C2.34351 13.185 2.54105 13.6619 2.89268 14.0136C3.24431 14.3652 3.72122 14.5627 4.21851 14.5627H10.781C11.2783 14.5627 11.7552 14.3652 12.1068 14.0136C12.4585 13.6619 12.656 13.185 12.656 12.6877V7.17993C12.656 7.14885 12.6437 7.11904 12.6217 7.09707C12.5997 7.07509 12.5699 7.06274 12.5388 7.06274Z"/>
                                                                    <path d="M12.2816 6.026L8.06841 1.81282C8.06021 1.80467 8.0498 1.79913 8.03846 1.79689C8.02713 1.79465 8.01539 1.79581 8.00471 1.80022C7.99403 1.80464 7.9849 1.81211 7.97846 1.8217C7.97202 1.83129 7.96855 1.84257 7.96851 1.85412V5.65715C7.96851 5.78147 8.01789 5.9007 8.1058 5.98861C8.19371 6.07652 8.31294 6.1259 8.43726 6.1259H12.2403C12.2518 6.12585 12.2631 6.12239 12.2727 6.11595C12.2823 6.10951 12.2898 6.10037 12.2942 6.0897C12.2986 6.07902 12.2998 6.06728 12.2975 6.05594C12.2953 6.04461 12.2897 6.03419 12.2816 6.026Z"/>
                                                                </svg>
                                                                <span>Immediately</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="editor-column-in">
                                            <div class="editor-title">
                                                <h2 class="editor-title-in">Title</h2>
                                                <textarea class="editor-textarea input-reset">
                                                </textarea>
                                            </div>

                                            <div class="editor-column-right">
                                                <h2 class="editor-title-in">Explanation</h2>
                                                <div class="editor-actions">
                                                    <div class="editor-title">
                                                        <textarea class="editor-textarea input-reset">
                                                        </textarea>

                                                        <div class="editor-actions secondary">
                                                            <button class="button button-primary h-38">
                                                                <span class="button-label">Get Started</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="editor-actions secondary">
                                                    <div class="select-container select-secondary">
                                                        <label class="select-label">Language</label>
                                                        <div class="select-item">
                                                            <select class="select-in">
                                                                <option value="">English</option>
                                                                <option>Spanish</option>
                                                                <option>Russian</option>
                                                                <option>Armenian</option>
                                                            </select>
                                                            <svg class="select-i" viewBox="0 0 24 24">
                                                                <path d="M5.29606 8.554C5.48568 8.36444 5.74282 8.25795 6.01095 8.25795C6.27907 8.25795 6.53622 8.36444 6.72584 8.554L11.7311 13.5593L16.7364 8.554C16.9271 8.36981 17.1825 8.26789 17.4476 8.27019C17.7127 8.2725 17.9664 8.37884 18.1538 8.56632C18.3413 8.7538 18.4477 9.00741 18.45 9.27253C18.4523 9.53766 18.3503 9.79308 18.1662 9.98379L12.446 15.7039C12.2564 15.8935 11.9992 16 11.7311 16C11.463 16 11.2058 15.8935 11.0162 15.7039L5.29606 9.98379C5.10649 9.79417 5 9.53702 5 9.2689C5 9.00077 5.10649 8.74362 5.29606 8.554Z"></path>
                                                            </svg>
                                                        </div>
                                                        <label class="select-label">Writing Style</label>
                                                        <div class="select-item">
                                                            <select class="select-in">
                                                                <option value="">Creative</option>
                                                            </select>
                                                            <svg class="select-i" viewBox="0 0 24 24">
                                                                <path d="M5.29606 8.554C5.48568 8.36444 5.74282 8.25795 6.01095 8.25795C6.27907 8.25795 6.53622 8.36444 6.72584 8.554L11.7311 13.5593L16.7364 8.554C16.9271 8.36981 17.1825 8.26789 17.4476 8.27019C17.7127 8.2725 17.9664 8.37884 18.1538 8.56632C18.3413 8.7538 18.4477 9.00741 18.45 9.27253C18.4523 9.53766 18.3503 9.79308 18.1662 9.98379L12.446 15.7039C12.2564 15.8935 11.9992 16 11.7311 16C11.463 16 11.2058 15.8935 11.0162 15.7039L5.29606 9.98379C5.10649 9.79417 5 9.53702 5 9.2689C5 9.00077 5.10649 8.74362 5.29606 8.554Z"></path>
                                                            </svg>
                                                        </div>
                                                        <label class="select-label">Writing Tone</label>
                                                        <div class="select-item">
                                                            <select class="select-in">
                                                                <option value="">Cheerful</option>
                                                            </select>
                                                            <svg class="select-i" viewBox="0 0 24 24">
                                                                <path d="M5.29606 8.554C5.48568 8.36444 5.74282 8.25795 6.01095 8.25795C6.27907 8.25795 6.53622 8.36444 6.72584 8.554L11.7311 13.5593L16.7364 8.554C16.9271 8.36981 17.1825 8.26789 17.4476 8.27019C17.7127 8.2725 17.9664 8.37884 18.1538 8.56632C18.3413 8.7538 18.4477 9.00741 18.45 9.27253C18.4523 9.53766 18.3503 9.79308 18.1662 9.98379L12.446 15.7039C12.2564 15.8935 11.9992 16 11.7311 16C11.463 16 11.2058 15.8935 11.0162 15.7039L5.29606 9.98379C5.10649 9.79417 5 9.53702 5 9.2689C5 9.00077 5.10649 8.74362 5.29606 8.554Z"></path>
                                                            </svg>
                                                        </div>

                                                        <table class="editor-table">
                                                            <tbody>
                                                            <tr class="editor-table-in">
                                                                <td class="editor-table-title">Session:</td>
                                                                <td class="editor-table-desc">
                                                                    <div class="editor-table-desc-in">
                                                                        <span>$0.000</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="editor-table-in">
                                                                <td class="editor-table-title">Last Request:</td>
                                                                <td class="editor-table-desc">
                                                                    <div class="editor-table-desc-in">
                                                                        <span>$0.000</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="thumbnail">
                                                        <div class="thumbnail-in">
                                                            <svg class="thumbnail-pic" width="24" height="22"
                                                                 viewBox="0 0 24 22" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M21.7031 0.5C22.9688 0.5 23.9531 1.53125 23.9531 2.75V19.25C23.9531 20.5156 22.9219 21.5 21.7031 21.5H2.20312C0.984375 21.5 0 20.5156 0 19.25V2.75C0 1.53125 0.984375 0.5 2.20312 0.5H21.7031ZM5.20312 18.125L5.15625 15.875C5.15625 15.6875 4.96875 15.5 4.78125 15.5H2.57812C2.34375 15.5 2.20312 15.6875 2.20312 15.875V18.125C2.20312 18.3594 2.34375 18.5 2.57812 18.5H4.82812C5.01562 18.5 5.20312 18.3594 5.20312 18.125ZM5.20312 12.125H5.15625V9.875C5.15625 9.6875 4.96875 9.5 4.78125 9.5H2.57812C2.34375 9.5 2.20312 9.6875 2.20312 9.875V12.125C2.20312 12.3594 2.34375 12.5 2.57812 12.5H4.82812C5.01562 12.5 5.20312 12.3594 5.20312 12.125ZM5.20312 6.125L5.15625 3.875C5.15625 3.6875 4.96875 3.5 4.78125 3.5H2.57812C2.34375 3.5 2.20312 3.6875 2.20312 3.875V6.125C2.20312 6.35938 2.34375 6.5 2.57812 6.5H4.82812C5.01562 6.5 5.20312 6.35938 5.20312 6.125ZM16.4531 17.75V13.25C16.4531 12.875 16.0781 12.5 15.7031 12.5H8.20312C7.78125 12.5 7.45312 12.875 7.45312 13.25V17.75C7.45312 18.1719 7.78125 18.5 8.20312 18.5H15.7031C16.0781 18.5 16.4531 18.1719 16.4531 17.75ZM16.4531 8.75V4.25C16.4531 3.875 16.0781 3.5 15.7031 3.5H8.20312C7.78125 3.5 7.45312 3.875 7.45312 4.25V8.75C7.45312 9.17188 7.78125 9.5 8.20312 9.5H15.7031C16.0781 9.5 16.4531 9.17188 16.4531 8.75ZM21.7031 18.125H21.75V15.875C21.75 15.6875 21.5625 15.5 21.375 15.5H19.125C18.9375 15.5 18.75 15.6875 18.75 15.875V18.125C18.75 18.3594 18.8906 18.5 19.125 18.5H21.3281C21.5156 18.5 21.7031 18.3594 21.7031 18.125ZM21.7031 12.125V9.875C21.7031 9.6875 21.5156 9.5 21.3281 9.5H19.125C18.8906 9.5 18.75 9.6875 18.75 9.875V12.125C18.75 12.3594 18.8906 12.5 19.125 12.5H21.3281C21.5156 12.5 21.7031 12.3594 21.7031 12.125ZM21.7031 6.125H21.6562V3.875C21.6562 3.6875 21.4688 3.5 21.2812 3.5H19.0781C18.8906 3.5 18.75 3.6875 18.75 3.875V6.125C18.75 6.35938 18.8906 6.5 19.125 6.5H21.3281C21.5156 6.5 21.7031 6.35938 21.7031 6.125Z"
                                                                      fill="#3E3232" fill-opacity="0.25"/>
                                                            </svg>

                                                            <input type="file" class="thumbnail-input">

                                                            <p class="thumbnail-desc">Drop image here, paste or</p>

                                                            <button class="button button-thumbnail h-38 button-w-105">
                                                                <svg width="16" height="17" viewBox="0 0 16 17"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M13.6875 8.22974C13.6875 8.72192 13.2773 9.13208 12.8125 9.13208H8.875V13.0696C8.875 13.5344 8.46484 13.9172 8 13.9172C7.50781 13.9172 7.125 13.5344 7.125 13.0696V9.13208H3.1875C2.69531 9.13208 2.3125 8.72192 2.3125 8.22974C2.3125 7.76489 2.69531 7.38208 3.1875 7.38208H7.125V3.44458C7.125 2.95239 7.50781 2.54224 8 2.54224C8.46484 2.54224 8.875 2.95239 8.875 3.44458V7.38208H12.8125C13.2773 7.35474 13.6875 7.76489 13.6875 8.22974Z"
                                                                          fill="#3E3232" fill-opacity="0.5"/>
                                                                </svg>
                                                                <span class="button-label">Select</span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="content-body-inner" id="comments">
                            <h2>Comments</h2>
                            <p>Content for comments goes here.</p>
                        </div>
                        <div class="content-body-inner" id="logo">
                            <h2>Logo</h2>
                            <p>Content for logo settings goes here.</p>
                        </div>
                        <div class="content-body-inner" id="themes">
                            <h2>Themes</h2>
                            <p>Content for themes settings goes here.</p>
                        </div>
                        <div class="content-body-inner" id="colors">
                            <h2>Colors etc</h2>
                            <p>Content for colors and other appearance settings goes here.</p>
                        </div>
                        <div class="content-body-inner" id="seo">
                            <h2>SEO</h2>
                            <p>Content for SEO settings goes here.</p>
                        </div>
                        <div class="content-body-inner" id="general">
                            <h2>General Settings</h2>
                            <p>Content for general settings goes here.</p>
                        </div>
                        <div class="content-body-inner" id="users">
                            <h2>All Users</h2>
                            <p>Content for all users goes here.</p>
                        </div>
                        <div class="content-body-inner" id="add-user">
                            <h2>Add New User</h2>
                            <p>Form or content for adding a new user goes here.</p>
                        </div>
                        <div class="content-body-inner" id="user-comments">
                            <h2>User Comments</h2>
                            <p>Content for user comments goes here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Cache selectors
        const selectors = {
            navItems: '.nav-item-in',
            dropdownItems: '.nav-dropdown-item-in',
            tabContents: '.content-body-inner',
        };

        let navItems = document.querySelectorAll(selectors.navItems);
        let dropdownItems = document.querySelectorAll(selectors.dropdownItems);
        let tabContents = document.querySelectorAll(selectors.tabContents);

        // Early return if required elements are missing
        if (!navItems.length || !dropdownItems.length || !tabContents.length) {
            console.warn('Required navigation elements not found');
            return;
        }

        // Toggle navigation dropdown
        const toggleNavDropdown = (targetItem) => {
            const parent = targetItem.closest('.nav-item');
            if (!parent) return;

            navItems.forEach(item => {
                const navParent = item.closest('.nav-item');
                if (navParent !== parent) {
                    navParent.classList.remove('opened');
                }
            });
            parent.classList.toggle('opened');
        };

        // Switch tabs
        const switchTab = (item, event) => {
            event.stopPropagation();
            event.preventDefault();

            if (item.classList.contains('active')) return;

            dropdownItems.forEach(otherItem => {
                otherItem.classList.remove('active');
            });
            item.classList.add('active');

            const tabId = item.dataset.tab;
            if (!tabId) return;

            tabContents.forEach(content => {
                content.classList.remove('active');
            });

            const targetTab = document.getElementById(tabId);
            if (targetTab) {
                targetTab.classList.add('active');
                console.log(`Switched to tab: ${tabId}`);
            } else {
                console.warn(`Tab content not found for ID: ${tabId}`);
            }
        };

        // Initialize event listeners
        navItems.forEach(item => {
            item.addEventListener('click', () => toggleNavDropdown(item), {passive: true});
        });

        dropdownItems.forEach(item => {
            item.addEventListener('click', (event) => switchTab(item, event), {passive: false});
        });

        // Initialize first tab
        const initializeFirstTab = () => {
            const firstItem = dropdownItems[0];
            if (!firstItem) return;

            firstItem.classList.add('active');
            const firstTabId = firstItem.dataset.tab;
            const firstTab = document.getElementById(firstTabId);
            if (firstTab) {
                firstTab.classList.add('active');
            }
        };

        initializeFirstTab();
    });</script>