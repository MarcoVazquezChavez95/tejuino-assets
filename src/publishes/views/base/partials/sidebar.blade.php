@section('sidebar')
    <div data-scrollbar="true" data-height="100%">
        <ul class="nav">
            <li class="nav-profile">
                <a href="/admin/profile" data-toggle="nav-profile">
                    <div class="cover with-shadow" style="background-image:url(/admin_assets/images/profile_bg.jpg)"></div>
                    <div class="image pull-left">
                        <img src="{{ auth()->user()->image }}" alt="" />
                    </div>
                    <div class="info pull-right">
                        <b class="caret pull-right"></b>
                        {{ auth()->user()->name }}
                        <small>Admin Dev</small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="/admin/profile"><i class="icon-user"></i> Perfil</a></li>
                    <li><a href="/admin/profile"><i class="icon-settings"></i> Preferencias...</a></li>
                    <li><a href="javascript:;"><i class="icon-shield"></i> Seguridad</a></li>
                    <li><a href="javascript:;"><i class="icon-support"></i> Soporte técnico</a></li>
                </ul>
            </li>
        </ul>

        <ul class="nav">
            <li class="{{ $section == 'Dashboard' ? 'active' : '' }}">
                <a href="/admin/">
                    <i class="icon-speedometer"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            @include('admin.custom.modules')

            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>

    </div>
@endsection
