@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3>
          <button type="button" class="btn btn-success">
            <i class="fas fa-print"> {{__('shared/shared.Print')}}</i>
          </button>
        </h3>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('sections/list_sections.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('sections')}}">{{__('sections/list_sections.Screen')}}</a></li>
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
                <a href="{{route('add_section')}}">
                <button type="button" class="btn btn-block btn-primary">{{__('sections/list_sections.Add_Section')}}</button>
                </a>
              </h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item mr-2">
                    <input type="text" id="table_search" name="table_search" class="form-control float-right" placeholder="{{__('shared/shared.Search')}}">
                  </li>
                  <li class="nav-item">
                    <div class="input-group-append" id="clear_button_container">
                      <!-- Clear button will be dynamically added here -->
                    </div>
                  </li>
                </ul>            
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>{{__('sections/list_sections.Sections_table.No')}}</th>
                    <th>{{__('sections/list_sections.Sections_table.Section_Name')}}</th>
                    <th>{{__('sections/list_sections.Description')}}</th>
                  </tr>
                </thead>
                <tbody id="table_body">
                  <tr>
                    <td>1</td>
                    <td>تقنية المعلومات</td>
                    <td>تقنية المعلومات هي مجموعة من الأدوات والأنظمة التكنولوجية التي تستخدم ......
                    </td>
                    <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-eye">
                        </i>
                        {{__('shared/shared.View')}}
                      </a>
                        <a class="btn btn-info btn-sm" href="{{route('edit_section')}}">
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
                    <td>2</td>
                    <td>علوم الحاسوب</td>
                    <td>نظم المعلومات هي مجموعة من الأدوات والأنظمة التكنولوجية التي تستخدم ......
                    </td>
                    <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-eye">
                        </i>
                        {{__('shared/shared.View')}}
                      </a>
                        <a class="btn btn-info btn-sm" href="{{route('edit_section')}}">
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
                    <td>3</td>
                    <td>نظم المعلومات</td>
                    <td>علوم الحاسوب هي مجموعة من الأدوات والأنظمة التكنولوجية التي تستخدم ......
                    </td>
                    <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-eye">
                        </i>
                        {{__('shared/shared.View')}}
                      </a>
                        <a class="btn btn-info btn-sm" href="{{route('edit_section')}}">
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