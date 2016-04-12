<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{!! route('dashboard') !!}"><i class="fa fa-comment fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{!! route('admin.words.index') !!}"><i class="fa fa-stack-exchange fa-fw"></i> Word's</a>
            </li>
            <li>
                <a href="{!! route('admin.home.index') !!}"><i class="fa fa-home fa-fw"></i> Home</a>
            </li>
            <li>
                <a href="{!! route('admin.service.index') !!}"><i class="fa fa-gears fa-fw"></i> Services</a>
            </li>
            <li>
                <a href="{!! route('admin.portofolio.index') !!}"><i class="fa fa-hand-peace-o fa-fw"></i> Portofolio</a>
            </li>
            <li class="treeview">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-history fa-fw"></i> About <b class="fa fa-angle-double-right"></b>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{!! route('admin.about.team.index') !!}"><i class="fa fa-cubes fa-fw"></i> Team</a>
                    </li>
                    <li>
                        <a href="{!! route('admin.skillset.index') !!}"><i class="fa fa-compress fa-fw"></i> Skillset</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{!! route('admin.client.index') !!}"><i class="fa fa-users fa-fw"></i> Clients</a>
            </li>
            <li>
                <a href="{!! route('admin.paket.index') !!}"><i class="fa fa-gift fa-fw"></i> Paket</a>
            </li>
            <li>
                <a href="{!! route('admin.social.index') !!}"><i class="fa fa-plus-square fa-fw"></i> Social</a>
            </li>
            <li>
                <a href="{!! route('admin.contact.index') !!}"><i class="fa fa-phone fa-fw"></i> Contact</a>
            </li>
            <li>
                <a href="{!! route('admin.user.index') !!}"><i class="fa fa-user fa-fw"></i> User</a>
            </li>
            <!-- <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Blog</a>
            </li> -->
        </ul>
    </div>
</div>