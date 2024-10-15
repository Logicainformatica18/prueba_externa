<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ExternaBPO</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="icon" type="image/jpg" href="{{ asset('dist/img/favicon.png') }}" />

    <script src="{{ asset('axios.min.js') }}"></script>
    <script src="{{ asset('user.js') }}"></script>
    <script src="{{ asset('function.js') }}"></script>



    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>


    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
     <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{asset('dist/js/pages/dashboard.js')}}"></script> --}}
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>




    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand"style="background-color: #00bf6f">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>


            </ul>

            <div class="row">
                <div class="col col-lg-4">

                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('externalogo.png') }}" alt="" width="60%">
                    </a>

                </div>
                <div class="col col-lg-4">

                </div>

                <div class="col col-lg-4" style="justify-content: center; align-items: center; display: flex;">
                    <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="10%">
                    <a href="{{ route('logout') }}" style="color: white;">Cerrar Sesión</a>
                </div>

            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #042d89;color:white">
            <!-- Brand Logo -->
            <a href="" class="brand-link">

                <span class="brand-text font-weight-light center">
                    <img src="{{ asset('externalogo.png') }}" alt="AdminLTE Logo" class="" width="100%"
                        style="">
                </span>
                <p></p>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <br>
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-1 pb-1 mb-3 d-flex">
                    <div class="image">
                        @if (Auth::user()->photo == '' && Auth::user()->sex == 'M')
                            <img src="{{ asset('male.png') }}" class="img-circle elevation-2" alt="User Image">
                        @elseif (Auth::user()->photo == '' && Auth::user()->sex == 'F')
                            <img src="{{ asset('female.png') }}" class="img-circle elevation-2" alt="User Image">
                        @else
                            <img src="{{ asset('imageusers/' . Auth::user()->photo) }}" class="img-circle elevation-2"
                                alt="User Image">
                        @endif
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->names }}</a><br>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link" style="background-color: #00bf6f;color:black">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Módulos
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @role('Administrador|Administrador')
                                    <li class="nav-item">
                                        <a href="{{ route('usuarios.index') }}" class="nav-link">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <img src="{{ asset('usuario.png') }}" alt="" srcset=""
                                                width="30px">
                                            <p>USUARIOS</p>
                                        </a>
                                    </li>
                                @endrole



                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
                <div class="user-panel pl-6 mt-3 pb-3 mb-3 d-flex">




                </div>

                <div class="user-panel pl-5 mt-3 pb-3 mb-3 d-flex">


                    <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="10%">
                    <a href="{{ route('logout') }}" style="color: white;">Cerrar Sesión</a>


                </div>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">



                <!-- Main content -->
                <div class="content-wrapper">
                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                            @yield('content')

                        </div>
                    </section>
                    <!-- /.content -->
                </div>
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <span
                    style="background-image: linear-gradient(45deg, rgb(255, 0, 149), red); -webkit-background-clip: text; color: transparent;">
                    <a href="https://anthonycode.com"target="_blank">Copyright © 2024 Dev. AnthonyCode</a></span>
                <div class="float-right d-none d-sm-inline-block">
                </div>
            </footer>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </section>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!--  USO DE DATATABLE PARA GENERAR PDF - CSV  -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-colvis-1.6.4/b-html5-1.6.4/b-print-1.6.4/sl-1.3.1/datatables.min.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-colvis-1.6.4/b-html5-1.6.4/b-print-1.6.4/sl-1.3.1/datatables.min.js">
    </script>


    <script>
        function datatable_load() {
            $("#example1").DataTable({
                "language": {
                    "lengthMenu": "Display _MENU_ records per page",
                    "zeroRecords": "No se encontró nada, lo siento",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Busqueda avanzada : ",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "info": true,
                "responsive": false,
                "autoWidth": false,
                "paging": true,
                "searching": true,
                "ordering": false,

                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'pdfHtml5',
                        download: 'open',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    }, {

                        extend: 'csvHtml5',
                        text: 'CSV',
                        exportOptions: {
                            modifier: {
                                search: 'none'
                            }
                        }

                    },
                    {
                        extend: 'print',
                        text: 'Imprimir',
                        autoPrint: true
                    },
                    {
                        extend: 'copyHtml5',
                        text: 'Copiar Datos',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    },
                    {
                        extend: 'collection',
                        text: 'Mostrar Campos',
                        buttons: ['columnsVisibility'],
                        visibility: true
                    }


                ],
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }],
                select: {
                    style: 'multi',
                    selector: 'td:first-child'
                },
                // order: [
                //     [1, 'asc']
                // ]

            });
        }
        datatable_load();
    </script>


</body>

</html>
