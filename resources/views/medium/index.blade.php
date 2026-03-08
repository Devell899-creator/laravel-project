<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Manage Medium</h4>
    </div>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Create Medium</div>
                </div>
                <form action="/medium/store" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" placeholder="Enter Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title">List Medium</div>
                    <div>
                        <a href="#" class="text-primary">All</a> | <a href="#" class="text-muted">Trashed</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mediums as $key => $medium)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $medium->name }}</td>
                                    <td class="text-center">
                                        <div class="form-button-action">
                                            <a href="/medium/edit/{{$medium->id}}" class="btn btn-link btn-primary btn-lg" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-edit" style="color: #a370f7;"></i>
                                            </a>
                                            <a href="/medium/delete/{{$medium->id}}" class="btn btn-link btn-danger" data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="backend/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <script src="backend/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ["backend/assets/css/fonts.min.css"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <link rel="stylesheet" href="backend/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="backend/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="backend/assets/css/kaiadmin.min.css" />
    <link rel="stylesheet" href="backend/assets/css/demo.css" />
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
                        <img src="backend/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar"><i class="gg-menu-right"></i></button>
                        <button class="btn btn-toggle sidenav-toggler"><i class="gg-menu-left"></i></button>
                    </div>
                    <button class="topbar-toggler more"><i class="gg-more-vertical-alt"></i></button>
                </div>
            </div>
            
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#dashboard" class="collapsed">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="dashboard">
                                <ul class="nav nav-collapse">
                                    <li><a href="index.html"><span class="sub-item">Dashboard 1</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-section">
                            <span class="sidebar-mini-icon"><i class="fa fa-ellipsis-h"></i></span>
                            <h4 class="text-section">Management</h4>
                        </li>

                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#academicMgmt">
                                <i class="fas fa-university"></i>
                                <p>Academic Management</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="academicMgmt">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a data-bs-toggle="collapse" href="#academicsSub">
                                            <span class="sub-item">Academics</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="academicsSub">
                                            <ul class="nav nav-collapse subnav">
                                                <li><a href="/medium"><span class="sub-item">Medium</span></a></li>
                                                <li><a href="section.html"><span class="sub-item">Section</span></a></li>
                                                <li><a href="subject.html"><span class="sub-item">Subject</span></a></li>
                                                <li><a href="semester.html"><span class="sub-item">Semester</span></a></li>
                                                <li><a href="stream.html"><span class="sub-item">Stream</span></a></li>
                                                <li><a href="shift.html"><span class="sub-item">Shift</span></a></li>
                                                <li><a href="class.html"><span class="sub-item">Class</span></a></li>
                                                <li><a href="class.html"><span class="sub-item">Class Subject</span></a></li>
                                                <li><a href="class.html"><span class="sub-item">Class Group</span></a></li>
                                                <li><a href="class.html"><span class="sub-item">Class Section&Teachers</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#forms">
                                <i class="fas fa-pen-square"></i>
                                <p>Forms</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">
                                    <li><a href="forms.html"><span class="sub-item">Basic Form</span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-panel">
            </div>
    </div>

    <script src="backend/assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="backend/assets/js/core/popper.min.js"></script>
    <script src="backend/assets/js/core/bootstrap.min.js"></script>
    <script src="backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="backend/assets/js/kaiadmin.min.js"></script>
</body>
</html>