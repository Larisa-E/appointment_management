
<div class="sidebar">
    <div class="sidebar-header">
        <h3>Navigation</h3>
    </div>
    <ul class="list-unstyled components">
        <li>
            <a href="{{ url('/dashboard') }}">Dashboard</a>
        </li>
        <li>
            <a href="{{ url('/profile') }}">Profile</a>
        </li>
        <li>
            <a href="{{ url('/settings') }}">Settings</a>
        </li>
        <li>
            <a href="{{ url('/messages') }}">Messages</a>
        </li>
        <li>
            <a href="{{ url('/notifications') }}">Notifications</a>
        </li>
        
    </ul>
    <div class="sidebar-footer">
        <a href="{{ url('/logout') }}">Logout</a>
    </div>
</div>


<style>
    .sidebar {
        inline-size: 250px;
        background-color: #f8f9fa;
        padding: 15px;
        position: fixed;
        block-size: 100%;
    }
    .sidebar-header {
        padding-block-end: 20px;
    }
    .list-unstyled {
        padding: 0;
    }
    .list-unstyled li {
        padding: 10px 0;
    }
    .list-unstyled li a {
        text-decoration: none;
        color: #333;
        display: block;
    }
    .sidebar-footer {
        margin-block-start: 20px;
        text-align: center;
    }
</style>