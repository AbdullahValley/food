<div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/food-admin') }}">Dashboard</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/food-admin/users/create') }}">Add User</a></li>
                    <li><a href="{{ url('/food-admin/users') }}">All User</a></li>
                    <li><a href="{{ url('/food-admin/recycle') }}">Recycle User</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-cogs"></i> Role-Permission <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/food-admin/roles') }}">Roles</a></li>
                    <li><a href="{{ url('/food-admin/permissions') }}">Permissions</a></li>
                    <li><a href="{{ url('/food-admin/role-permission') }}">Add Role & Permission</a></li>
                </ul>
            </li>
        </ul>
</div>

    <div class="menu_section">
        <h3>Restaurant</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-crosshairs"></i> Restaurant Types <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/food-admin/restaurant-types/create') }}">Add Type</a></li>
                    <li><a href="{{ url('food-admin/restaurant-types') }}">All Types</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-certificate"></i> Restaurant Categories <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/food-admin/restaurant-categories/create') }}">Add Category</a></li>
                    <li><a href="{{ url('/food-admin/restaurant-categories') }}">All Categories</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-tablet"></i> Restaurant Reviews <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add Review</a></li>
                    <li><a href="#">All Reviews</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-comment"></i> Restaurant Comments <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Pending Comments</a></li>
                    <li><a href="#">All Comments</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-star"></i> Restaurant Facilities <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add Facility</a></li>
                    <li><a href="#">All Facilities</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-beer"></i> Restaurants <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add Restaurant</a></li>
                    <li><a href="#">All Restaurants</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-list-alt"></i> Restaurant News <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add News</a></li>
                    <li><a href="#">All News</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-th-list"></i> Restaurant Compares <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Compare Status</a></li>
                    <li><a href="#">Top Compares</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-gratipay"></i> Restaurant Tips <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add Tips</a></li>
                    <li><a href="#">All Tips</a></li>
                </ul>
            </li>
        </ul>
    </div>


    <div class="menu_section">
        <h3>Food</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-coffee"></i> Food Courts <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add Court</a></li>
                    <li><a href="#">All Courts</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-object-group"></i> Food Groups <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add Group</a></li>
                    <li><a href="#">All Groups</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-registered"></i> Food Reviews <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add Review</a></li>
                    <li><a href="#">All Reviews</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-comments"></i> Food Comments <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Pending Comments</a></li>
                    <li><a href="#">All Comments</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-apple"></i> Foods <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add Food</a></li>
                    <li><a href="#">All Foods</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-file"></i> Food News <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add News</a></li>
                    <li><a href="#">All News</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-recycle"></i> Food Recipes <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add Recipe</a></li>
                    <li><a href="#">All Recipes</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-compress"></i> Food Compares <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Compare Status</a></li>
                    <li><a href="#">Top Compares</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="menu_section">
        <h3>Location</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-compass"></i> City <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add City</a></li>
                    <li><a href="#">All Cities</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-location-arrow"></i> Location <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add Location</a></li>
                    <li><a href="#">All Locations</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-map-marker"></i> Sub Location <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">Add Sub Location</a></li>
                    <li><a href="#">All Sub Locations</a></li>
                </ul>
            </li>
        </ul>
    </div>




<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->