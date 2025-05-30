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

                                    <div class="bulk-filters">
                                        <select class="select-control">
                                            <option value="">Bulk Actions</option>
                                            <option value="delete">Delete</option>
                                            <option value="edit">Edit</option>
                                        </select>
                                        <button class="btn btn-primary">Apply</button>
                                        <select class="select-control ml-22">
                                            <option value="">All Categories</option>
                                            <option>News</option>
                                            <option>Tutorials</option>
                                            <option>Reviews</option>
                                        </select>
                                        <select class="select-control">
                                            <option value="">All Authors</option>
                                            <option>Admin</option>
                                            <option>Editor</option>
                                        </select>
                                        <button class="btn btn-primary">Filter</button>
                                    </div>
                                </div>

                                <div class="posts-toolbar-right">
                                    <div><input type="text" class="search-box" placeholder="Search posts..." /><button class="btn btn-primary ml-12">Search</button></div>

                                    <div class="pagination-container">
                                        <span class="pagination-info">Showing 11–20 of 100 results</span>
                                        <ul class="pagination">
                                            <li class="pagination-in"><a class="pagination-item" href="#">«</a></li>
                                            <li class="pagination-in"><a class="pagination-item" href="#">1</a></li>
                                            <li class="pagination-in"><a class="pagination-item" href="#" class="active">2</a></li>
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                            </tr><tr class="table-body-tr">
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
                                    <li class="pagination-in"><a class="pagination-item" href="#" class="active">2</a></li>
                                    <li class="pagination-in"><a class="pagination-item" href="#">3</a></li>
                                    <li class="pagination-in"><a class="pagination-item" href="#">4</a></li>
                                    <li class="pagination-in"><a class="pagination-item" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-body-inner" id="add-post">
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
            searchInput: '.search',
            tableRows: '.table-body-tr',
            tableBody: '.table-body',
        };

        let navItems = document.querySelectorAll(selectors.navItems);
        let dropdownItems = document.querySelectorAll(selectors.dropdownItems);
        let tabContents = document.querySelectorAll(selectors.tabContents);
        let selectAllCheckbox = document.querySelector('.table-head-items input[type="checkbox"]');
        let searchInput = document.querySelector(selectors.searchInput);
        let tableBody = document.querySelector(selectors.tableBody);
        let tableRows = document.querySelectorAll(selectors.tableRows);

        const rowsPerPage = 10;
        let currentPage = 1;
        const maxVisiblePages = 3;

        // Debounce function to optimize search and pagination performance
        const debounce = (func, wait) => {
            let timeout;
            return (...args) => {
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(null, args), wait);
            };
        };

        // Update table rows collection
        const updateTableRowsCollection = () => {
            tableRows = document.querySelectorAll(selectors.tableRows);
            console.log(`Updated table rows: ${tableRows.length} rows found`); // Debug log
        };

        // Update visible table rows based on current page
        const updateTableRows = () => {
            updateTableRowsCollection();
            const start = (currentPage - 1) * rowsPerPage;
            const end = start + rowsPerPage;

            tableRows.forEach((row, index) => {
                const isVisible = row.dataset.searchVisible !== 'false'; // Respect search filter
                row.classList.toggle('d-none', !(isVisible && index >= start && index < end));
            });

            console.log(`Showing rows ${start} to ${end} of ${tableRows.length} total rows`); // Debug log
        };

        // Update pagination controls

        // Search functionality
        const performSearch = (searchTerm) => {
            updateTableRowsCollection();
            const term = searchTerm.toLowerCase().trim();

            tableRows.forEach(row => {
                const rowText = Array.from(row.cells)
                    .map(cell => cell.textContent.toLowerCase())
                    .join(' ');
                const isVisible = term === '' || rowText.includes(term);
                row.dataset.searchVisible = isVisible; // Store visibility state
                // Don't set display here; let updateTableRows handle it
            });

            // Reset to first page and update pagination
            updateTableRows();

            // Update select all checkbox state
            if (selectAllCheckbox) {
                selectAllCheckbox.checked = false;
                selectAllCheckbox.indeterminate = false;
            }

            // Update clear button visibility
            if (searchInput) {
                const clearButton = document.querySelector('.search-clear');
                if (clearButton) {

                    clearButton.classList.toggle('d-none', !searchTerm);
                }
            }
        };

        // Initialize search event listener and clear button
        if (searchInput) {
            const clearButton = document.createElement('button');
            clearButton.textContent = '✕';
            clearButton.className = 'search-clear';
            clearButton.classList.add('d-none')
            clearButton.setAttribute('aria-label', 'Clear search');
            searchInput.parentElement.appendChild(clearButton);

            searchInput.addEventListener('input', debounce((e) => {
                performSearch(e.target.value);
            }, 300));

            clearButton.addEventListener('click', () => {
                searchInput.value = '';
                performSearch('');
                searchInput.focus();
            });
        } else {
            console.warn('Search input element not found');
        }

        // Rebind checkbox and trash button events
        const rebindRowEvents = () => {
            const rowCheckboxes = document.querySelectorAll('.table-body-items input[type="checkbox"]');
            const trashButtons = document.querySelectorAll('.table-actions span:last-child');

            // Rebind checkbox change events
            rowCheckboxes.forEach(checkbox => {
                checkbox.removeEventListener('change', updateSelectAllStatus); // Prevent duplicate listeners
                checkbox.addEventListener('change', updateSelectAllStatus);
            });

            // Rebind trash button events
            trashButtons.forEach(button => {
                button.removeEventListener('click', handleTrashClick); // Prevent duplicate listeners
                button.addEventListener('click', handleTrashClick);
            });
        };

        // Checkbox change handler
        const updateSelectAllStatus = () => {
            const visibleCheckboxes = Array.from(document.querySelectorAll('.table-body-tr')).filter(row => {
                return row.dataset.searchVisible !== 'false';
            }).map(row => row.querySelector('input[type="checkbox"]')).filter(cb => cb); // убираем null

            const allChecked = visibleCheckboxes.every(cb => cb.checked);
            const someChecked = visibleCheckboxes.some(cb => cb.checked);

            if (selectAllCheckbox) {
                selectAllCheckbox.checked = allChecked;
                selectAllCheckbox.indeterminate = someChecked && !allChecked;
            }
        };


        // Trash button handler
        const handleTrashClick = (e) => {
            e.preventDefault();
            const checkedRows = document.querySelectorAll('.table-body-tr input[type="checkbox"]:checked');
            checkedRows.forEach(checkbox => {
                checkbox.closest('.table-body-tr').remove();
            });
            if (selectAllCheckbox) {
                selectAllCheckbox.checked = false;
                selectAllCheckbox.indeterminate = false;
            }
            updateTableRows();
            rebindRowEvents();
        };

        // Select all checkbox handler
        if (selectAllCheckbox) {
            selectAllCheckbox.addEventListener('change', (e) => {
                const rowCheckboxes = document.querySelectorAll('.table-body-items input[type="checkbox"]');
                rowCheckboxes.forEach(checkbox => {
                    const row = checkbox.closest('.table-body-tr');
                    if (row.style.display !== 'none') {
                        checkbox.checked = e.target.checked;
                    }
                });
            });
        }

        // Early return if required elements are missing
        if (!navItems.length || !dropdownItems.length || !tabContents.length) {
            console.warn('Required navigation elements not found');
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
                // Reset search and pagination when switching tabs
                if (searchInput) {
                    searchInput.value = '';
                    performSearch('');
                }
                currentPage = 1;
                updateTableRows();
                searchInput.focus();
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

        updateTableRowsCollection();
        tableRows.forEach(row => row.dataset.searchVisible = 'true'); // Initialize search visibility
        updateTableRows();
        rebindRowEvents();
        initializeFirstTab();
    });
</script>