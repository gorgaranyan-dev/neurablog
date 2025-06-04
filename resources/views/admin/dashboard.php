<?php

use App\Core\View;

View::layout( 'layouts.dashboard' );
View::section( 'title', 'Dashboard' );
?>

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
                                    <li><a href="#">«</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="active">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">»</a></li>
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
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">»</a></li>
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