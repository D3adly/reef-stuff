<div class="body-nav body-nav-horizontal body-nav-fixed">
    <div class="container">
        <ul>
            <li>
                <a href="{{URL::route('admin.home')}}">
                    <i class="icon-dashboard icon-large"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{{URL::route('admin.profile.index')}}">
                    <i class="icon-user icon-large"></i> Profile
                </a>
            </li>
            <li>
                <a href="{{URL::route('admin.readings.index')}}">
                    <i class="icon-bar-chart icon-large"></i> Graphs
                </a>
            </li>
            <li>
                <a href="{{URL::route('admin.articles.index')}}">
                    <i class="icon-edit icon-large"></i> Articles
                </a>
            </li>
            <li>
                <a href="{{URL::route('admin.reef-o-pedia.index')}}">
                    <i class="icon-book icon-large"></i> Reef-o-pedia
                </a>
            </li>
        </ul>
    </div>
</div>