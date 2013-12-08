<div class="list-group">
    <a href="{{ URL::Route('admin-dashboard') }}" 
        class="list-group-item @if( $title == 'Dashboard') active @endif">
    	<i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
    <a href="{{ URL::Route('admin-conversations') }}"
        class="list-group-item @if( $title == 'Conversations') active @endif">
    	<i class="fa fa-comments-o fa-fw"></i> Conversations</a>
    <a href="{{ URL::Route('admin-universities') }}" 
        class="list-group-item @if( $title == 'Manage Universities') active
        @endif">
    	<i class="fa fa-gears fa-fw"></i> Manage Universities</a>
    <a href="{{ URL::Route('admin-alumni') }}" 
        class="list-group-item @if( $title == 'Manage Alumni') active @endif">
    	<i class="fa fa-gears fa-fw"></i> Manage Alumni</a>
    <a href="{{ URL::Route('admin-administrators') }}" 
        class="list-group-item @if( $title == 'Manage Administrators') active 
        @endif">
    	<i class="fa fa-group fa-fw"></i> Manage Administrators</a>
    <a href="{{ URL::Route('admin-statistics') }}" 
        class="list-group-item @if( $title == 'Statistics') active @endif">
    	<i class="fa fa-signal fa-fw"></i> Statistics</a>
    <a href="{{ URL::Route('admin-broadcasts') }}" 
        class="list-group-item @if( $title == 'Broadcasts') active @endif">
    	<i class="fa fa-bell-o fa-fw"></i> Broadcasts</a>
</div>