@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('users/list_users.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('users')}}">{{__('users/list_users.Screen')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <a href="{{route('add_user')}}">
                <button type="button" class="btn btn-block btn-primary">{{__('users/list_users.Add_User')}}</button>
                </a>
              </h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" id="table_search" name="table_search" class="form-control float-right" placeholder="{{__('shared/shared.Search')}}">
                  <div class="input-group-append" id="clear_button_container">
                      <!-- Clear button will be dynamically added here -->
                  </div>
              </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>{{__('users/list_users.Users_table.Name')}}</th>
                    <th>{{__('users/list_users.Users_table.User_Name')}}</th>
                    <th>{{__('users/list_users.Users_table.Role')}}</th>
                    <th>{{__('users/list_users.Users_table.User_status')}}</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="table_body">
                  <tr>
                    <td>احمد الشاحذي</td>
                    <td>alshahethi</td>
                    <td>super admin</td>
                    <td>
                    <div class="status status-active">
                       نشط 
                    </div>
                    </td>
                    <td class="project-actions text-right">
                        {{-- <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            {{__('users/list_users.Users_table.view')}}
                        </a> --}}
                        <a class="btn btn-info btn-sm" href="{{route('edit_user')}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            {{__('shared/shared.Edit')}}
                        </a>
                        <a class="btn btn-danger btn-sm text-white" href="#">
                            <i class="fas fa-trash">
                            </i>
                            {{__('shared/shared.Delete')}}
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <td>اكرم المعرسي</td>
                    <td>almarsi22</td>
                    <td>admin</td>
                    <td>
                    <div class="status status-inactive">
                       غير نشط 
                    </div>
                    </td>
                    <td class="project-actions text-right">
                        {{-- <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            {{__('users/list_users.Users_table.view')}}
                        </a> --}}
                        <a class="btn btn-info btn-sm" href="{{route('edit_user')}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            {{__('shared/shared.Edit')}}
                        </a>
                        <a class="btn btn-danger btn-sm text-white" href="#">
                            <i class="fas fa-trash">
                            </i>
                            {{__('shared/shared.Delete')}}
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <td>خالد الشيباني</td>
                    <td>alshibani52</td>
                    <td>super admin</td>
                    <td>
                    <div class="status status-active">
                       نشط 
                    </div>
                    </td>
                    <td class="project-actions text-right">
                        {{-- <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            {{__('users/list_users.Users_table.view')}}
                        </a> --}}
                        <a class="btn btn-info btn-sm" href="{{route('edit_user')}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            {{__('shared/shared.Edit')}}
                        </a>
                        <a class="btn btn-danger btn-sm text-white" href="#">
                            <i class="fas fa-trash">
                            </i>
                            {{__('shared/shared.Delete')}}
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <td>عبدالكريم النزيلي</td>
                    <td>kream55</td>
                    <td>admin</td>
                    <td>
                      <div class="status status-inactive">
                         غير نشط 
                      </div>
                      </td>
                    <td class="project-actions text-right">
                        {{-- <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            {{__('users/list_users.Users_table.view')}}
                        </a> --}}
                        <a class="btn btn-info btn-sm" href="{{route('edit_user')}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            {{__('shared/shared.Edit')}}
                        </a>
                        <a class="btn btn-danger btn-sm text-white" href="#">
                            <i class="fas fa-trash">
                            </i>
                            {{__('shared/shared.Delete')}}
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <td>محمد الدقاف</td>
                    <td>mohammed5652</td>
                    <td>admin</td>
                    <td>
                    <div class="status status-active">
                       نشط 
                    </div>
                    </td>
                    <td class="project-actions text-right">
                        {{-- <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            {{__('users/list_users.Users_table.view')}}
                        </a> --}}
                        <a class="btn btn-info btn-sm" href="{{route('edit_user')}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            {{__('shared/shared.Edit')}}
                        </a>
                        <a class="btn btn-danger btn-sm text-white" href="#">
                            <i class="fas fa-trash">
                            </i>
                            {{__('shared/shared.Delete')}}
                        </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
    
