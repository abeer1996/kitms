<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
            <img class="app-sidebar__user-avatar" src="{{asset('/')}}Backend/assets/img/logo.png"
            hight="50px" width="50px" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{auth()->user()->name}}</p>
            <p class="app-sidebar__user-designation">IT Department</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{route('dashboard')}}">
                <i class="app-menu__icon fa fa-th-large"></i>
                <span class="app-menu__label">Dashboard</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Registration Info</span>
                <i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                <li>
                        <a class="treeview-item" href=""><i class="icon fa fa-circle-o">
                        </i> User Info</a></li>

                <li>    <a class="treeview-item" href="{{route('role.register')}}"><i class="icon fa fa-circle-o">
                </i>    Create Role</a></li>
                <li>    <a class="treeview-item" href="{{route('student.list')}}"><i class="icon fa fa-circle-o">
                </i>    Student Registration</a></li>
                <li>    <a class="treeview-item" href="{{route('teacher.list')}}"><i class="icon fa fa-circle-o">
                </i>    Employee Registration</a></li>
                
            </ul>
        </li>

        <li><a class="app-menu__item" href=""><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Payment Information</span></a></li>

        <li class="treeview"> <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Course Management</span>
                <i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                <li>
                        <a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o">
                        </i>Add Course</a></li>

                <li>    <a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o">
                </i>    Add Batch</a></li>
            </ul>
        </li>

        <li class="treeview"> <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Course Resource</span>
                <i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                <li>
                        <a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o">
                        </i>Add Resource</a></li>

                <li>    <a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o">
                </i>    View Resource</a></li>
            </ul>
        </li>

        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Course Certificate</span></a></li>

        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Attandence</span></a></li>

        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-th-list"></i><span
                    class="app-menu__label">Business Setup</span></a></li>

        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Report</span></a></li>

        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Notice</span></a></li>
            </ul>
        </li>
    </ul>
</aside>