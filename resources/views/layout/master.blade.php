<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HED | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- flag-icon-css -->
  <link rel="stylesheet" href="{{asset('plugins/flag-icon-css/css/flag-icon.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/global.css')}}">

    
    @if (LaravelLocalization::getCurrentLocale() == 'ar')
     <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/rtl/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
    <!-- Custom style for RTL -->
    <link rel="stylesheet" href="{{asset('dist/css/rtl/custom.css')}}">
      @else
      <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    @endif
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            @php
                $currentLocale = LaravelLocalization::getCurrentLocale();
                $flagIcon = ($currentLocale == 'en') ? 'us' : 'ye';
            @endphp
            <i class="flag-icon flag-icon-{{ $flagIcon }}"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                   class="dropdown-item{{ ($localeCode == $currentLocale) ? ' active' : '' }}">
                    <i class="flag-icon flag-icon-{{ ($localeCode == 'en') ? 'us' : 'ye' }} mr-2"></i> {{ $properties['native'] }}
                </a>
            @endforeach
        </div>
      </li>     
    </ul>
  </nav>
  <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{asset('dist/img/FCIT.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HED</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('dist/img/profile.png')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{__('layout/master.Admins')}}</a>
          </div>
        </div>
  
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>
                      {{__('layout/master.Students.Students')}}
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('students_info')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{__('layout/master.Students.Manage_Students_Data')}}</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('students_documents')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{__('layout/master.Students.Manage_Documents')}}</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('students_fees')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{__('layout/master.Students.Manage_Fees')}}</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('students_marks')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{__('layout/master.Students.Manage_Marks')}}</p>
                      </a>
                    </li>
                  </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  {{__('layout/master.Student_Thesis.Student_Thesis')}}
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('students_seminars')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{__('layout/master.Student_Thesis.Seminars')}}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('students_papers')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{__('layout/master.Student_Thesis.Thesis')}}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('students_discussions')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{__('layout/master.Student_Thesis.Discussions')}}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('students_journals')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{__('layout/master.Student_Thesis.Journals')}}</p>
                  </a>
                </li>
              </ul>
            </li>     
            <li class="nav-item">
              <a href="{{route('sections')}}" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  {{__('layout/master.Sections')}}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('subjects')}}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  {{__('layout/master.Subjects')}}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('instructors')}}" class="nav-link">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>
                  {{__('layout/master.Instructors')}}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('documents_type')}}" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                  {{__('layout/master.Documents_Type')}}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('schedules')}}" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  {{__('layout/master.Tables')}}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('archive_thesis')}}" class="nav-link">
                <i class="nav-icon fas fa-file-archive"></i>
                <p>
                  {{__('layout/master.Archive_Thesis')}}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('users')}}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  {{__('layout/master.Users')}}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('users')}}" class="nav-link">
                <i class="nav-icon fas fa-sign-in-alt"></i>
                <p>
                  {{__('layout/master.Logout')}} 
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- AdminLTE App -->
{{-- <script src="{{asset('dist/js/adminlte.js')}}"></script> --}}
<!-- table search -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function() {
        // Real-time filtering on input change
        $('#table_search').on('input', function() {
            var searchTerm = $(this).val().toLowerCase();

            // Iterate through each row in the table
            $('#table_body tr').each(function() {
                var rowData = $(this).text().toLowerCase();

                // Show or hide the row based on the search term
                $(this).toggle(rowData.indexOf(searchTerm) > -1);
            });

            // Show/hide the clear icon based on whether there is entered data
            toggleClearIcon();
        });

        // Clear button functionality
        $('#clear_button_container').on('click', '#clear_button', function() {
            // Clear the search input and show all rows in the table
            $('#table_search').val('');
            $('#table_body tr').show();

            // Hide the clear icon after clearing the input
            toggleClearIcon();
        });

        // Function to toggle the clear icon based on the input value
        function toggleClearIcon() {
            var inputValue = $('#table_search').val();

            if (inputValue) {
                // Add the clear icon
                $('#clear_button_container').html('<button type="button" id="clear_button" class="btn btn-default"><i class="fas fa-times"></i></button>');
            } else {
                // Remove the clear icon
                $('#clear_button_container').html('');
            }
        }
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Add Lectures -->



<!-- Add Student Fees -->

<script>
  var i = 0;
  $("#dynamic-ar_2").click(function () {
      ++i;
      $("#dynamicAddRemove_2").append(`<tr>
                                            <td>
                                              <div>
                                                <input type="text" name="B[`+ i +`][B]" class="form-control" placeholder="{{__('students/add_student.Payment_Fees')}}">
                                              </div>
                                            </td>
                                            <td>
                                              <div>
                                                <input type="text" name="C[`+ i +`][C]" class="form-control" placeholder="{{__('students/add_student.Bond_No')}}">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" name="D[`+ i +`][D]" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask
                                                placeholder="{{__('students/add_student.Date_of_payment')}}">
                                              </div>
                                            </td>
                                            <td>
                                          <div>
                                            <input type="text" name="E[`+ i +`][E]" class="form-control" placeholder="{{__('students/add_student.Notes_Fees')}}">
                                          </div>
                                        </td>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-danger btn-sm text-white remove-input-field_2">
                                                    <i class="fas fa-trash"></i>
                                                    {{__('schedules/add_schedule.Lectures_Table.Delete')}}
                                                </a>
                                            </td>
                                        </tr>`
          );
  });
  $(document).on('click', '.remove-input-field_2', function () {
      $(this).parents('tr').remove();
  });
</script>

<!-- Add Student Documents -->

<script>
  var i = 0;
  $("#dynamic-ar_3").click(function () {
      ++i;
      $("#dynamicAddRemove_3").append(`<tr>
                                  <td>
                                    <div>
                                      <input type="text" name="Doc_title[`+ i +`][title]" class="form-control" placeholder="{{__('students/add_student.Document_Title')}}">
                                    </div>
                                  </td>
                                  <td>
                                    <div>
                                      <input type="text" name="number[`+ i +`][number]" class="form-control" placeholder="{{__('students/add_student.Document_Number')}}">
                                    </div>
                                  </td>
                                  <td>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                      <input type="text" name="date[`+ i +`][date]" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                  </td>
                                  <td>
                                    <select class="custom-select" name="document_type_id[`+ i +`][document_type_id]">
                                      <option>option 1</option>
                                      <option>option 2</option>
                                      <option>option 3</option>
                                      <option>option 4</option>
                                      <option>option 5</option>
                                    </select>
                                  </td>
                                  <td class="project-actions text-right">
                                      <a class="btn btn-danger btn-sm text-white remove-input-field_3">
                                          <i class="fas fa-trash"></i>
                                          {{__('schedules/add_schedule.Lectures_Table.Delete')}}
                                      </a>
                                  </td>
                              </tr>`
          );
  });
  $(document).on('click', '.remove-input-field_3', function () {
      $(this).parents('tr').remove();
  });
</script>

<!-- Add Student Marks -->

<script>
  var i = 0;
  $("#dynamic-ar_4").click(function () {
      ++i;
      $("#dynamicAddRemove_4").append(`<tr>
                                  <td>
                                    <select class="custom-select" name="term[`+ i +`][term]">
                                      <option>{{__('students/edit_student.Term.option 1')}}</option>
                                      <option>{{__('students/edit_student.Term.option 2')}}</option>
                                    </select>
                                  </td>
                                  <td>
                                    <select class="custom-select" name="subject[`+ i +`][subject]">
                                      <option>{{__('students/edit_student.Subject.option 1')}}</option>
                                      <option>{{__('students/edit_student.Subject.option 2')}}</option>
                                    </select>
                                  </td>
                                  <td>
                                  <select class="custom-select" name="status[`+ i +`][status]">
                                    <option>مكمل</option>
                                    <option>مبقي</option>
                                  </select>
                                  </td>
                                  <td>
                                    <div class="form-group" style="width: 45%">
                                        <input type="text" name="mark[`+ i +`][mark]" class="form-control" placeholder="{{__('students/edit_student.Mark')}}">
                                      </div>
                                  </td>
                                  <td class="project-actions text-right">
                                      <a class="btn btn-danger btn-sm text-white remove-input-field_4">
                                          <i class="fas fa-trash"></i>
                                          {{__('schedules/add_schedule.Lectures_Table.Delete')}}
                                      </a>
                                  </td>
                              </tr>`);
  });
  $(document).on('click', '.remove-input-field_4', function () {
      $(this).parents('tr').remove();
  });
</script>

<!-- Add Student Journals -->

<script>
  var i = 0;
  $("#dynamic-ar_5").click(function () {
      ++i;
      $("#dynamicAddRemove_5").append(`<tr>
                                        <td>
                                          <div>
                                            <input type="text" name="journal_name[`+ i +`][journal_name]" class="form-control" placeholder="{{__('students_thesis/journal.Journal_Name')}}">
                                          </div>
                                        </td>
                                        <td>
                                          <div>
                                            <input type="text" name="journal_link[`+ i +`][journal_link]" class="form-control" placeholder="{{__('students_thesis/journal.Journal_Link')}}">
                                          </div>
                                        </td>
                                        <td>
                                            <div>
                                              <input type="text" name="notes[`+ i +`][notes]" class="form-control" placeholder="{{__('students_thesis/journal.Notes')}}">
                                            </div>
                                          </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-danger btn-sm text-white remove-input-field_5">
                                                <i class="fas fa-trash"></i>
                                                {{__('schedules/add_schedule.Lectures_Table.Delete')}}
                                            </a>
                                        </td>
                                    </tr>`);
  });
  $(document).on('click', '.remove-input-field_5', function () {
      $(this).parents('tr').remove();
  });
</script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    $('[data-mask]').inputmask();
    
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
</script>
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "searching": true,
      "buttons": ["excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "buttons": ["excel", "pdf", "print", "colvis"],
    });
  });
</script>
@stack('scripts')


</body>
</html>


