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
          <li class="breadcrumb-item">{{__('instructors/list_instructors.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('instructors')}}">{{__('instructors/list_instructors.Screen')}}</a></li>
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
                <a href="{{route('add_instructor')}}">
                <button type="button" class="btn btn-block btn-primary">{{__('instructors/list_instructors.Add_Instructor')}}</button>
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
                  <li class="nav-item mr-2">
                    <select class="custom-select" id="selectOption">
                      <option selected disabled>{{__('shared/shared.Section')}}</option>
                      <option value="option1">{{__('shared/shared.All')}}</option>
                      <option value="option1">{{__('shared/shared.IT')}}</option>
                      <option value="option2">{{__('shared/shared.IS')}}</option>
                      <option value="option2">{{__('shared/shared.Cs')}}</option>
                      <!-- Add more options as needed -->
                    </select>
                  </li>
                  <li class="nav-item mr-2">
                    <select class="custom-select" id="selectOption">
                      <option selected disabled>{{__('shared/shared.Level')}}</option>
                      <option value="option1">{{__('shared/shared.All')}}</option>
                      <option value="option1">{{__('shared/shared.Master')}}</option>
                      <option value="option2">{{__('shared/shared.phD')}}</option>
                      <!-- Add more options as needed -->
                    </select>
                  </li>
                </ul>            
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>{{__('instructors/list_instructors.Instructors_table.Instructor_Name')}}</th>
                    <th>{{__('shared/shared.Level')}}</th>
                  <th>{{__('shared/shared.Section')}}</th>
                  </tr>
                </thead>
                <tbody id="table_body">
                  <tr>
                    <td>ناجي الشيباني</td>
                    <td>دكتوراه</td>
                    <td>تقنية المعلومات</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{route('profile_instructor')}}">
                            <i class="fas fa-eye">
                            </i>
                            {{__('shared/shared.View')}}
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('edit_instructor')}}">
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
                    <td>مالك الجبري</td>
                    <td>دكتوراه</td>
                    <td>نظم المعلومات</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{route('profile_instructor')}}">
                            <i class="fas fa-eye">
                            </i>
                            {{__('shared/shared.View')}}
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('edit_instructor')}}">
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
                    <td>مختار غيلان</td>
                    <td>دكتوراه</td>
                    <td>نظم المعلومات</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{route('profile_instructor')}}">
                            <i class="fas fa-eye">
                            </i>
                            {{__('shared/shared.View')}}
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('edit_instructor')}}">
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