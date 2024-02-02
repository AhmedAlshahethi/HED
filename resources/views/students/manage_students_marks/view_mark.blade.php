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
            <li class="breadcrumb-item">{{__('students/view_student.Home_Mark')}}</li>
            <li class="breadcrumb-item active"><a href="{{route('students_marks')}}">{{__('students/view_student.Screen_Mark')}}</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/edit_student.Marks')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
          <table class="table table-head-fixed text-nowrap" id="dynamicAddRemove">
              <thead>
                  <tr>
                      <th colspan="2">
                        {{__('shared/shared.Student_Name')}} : احمد الشاحذي
                      </th>
                      <th colspan="2">
                        {{__('shared/shared.Student_Id')}} : 21160021
                      </th>
                      <th></th>
                  </tr>
              </thead></table>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="row" style="margin-bottom: 20px; margin-top: 20px">
              <div class="col">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="742">
                      <div class="input-group-append">
                          <span class="input-group-text">{{__('students/edit_student.Total_Score')}}</span>
                      </div>
                  </div>
              </div>
              
              <div class="col">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="92.75">
                    <div class="input-group-append">
                        <span class="input-group-text">{{__('students/edit_student.Precentage')}}</span>
                    </div>
                </div>
            </div>

            <div class="col">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="ممتاز">
                  <div class="input-group-append">
                      <span class="input-group-text">{{__('students/edit_student.General_Grade')}}</span>
                  </div>
              </div>
          </div>

          <div class="col">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="-">
                <div class="input-group-append">
                    <span class="input-group-text">{{__('students/edit_student.Status.Status')}}</span>
                </div>
            </div>
        </div>
          </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>{{__('students/edit_student.Term.Term')}}</th>
                      <th>{{__('students/edit_student.Subject.Subject')}}</th>
                      <th>{{__('students/edit_student.Mark')}}</th>
                      <th>{{__('students/edit_student.General_Grade')}}</th>
                      <th>{{__('students/edit_student.Status.Status')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>الاول</td>
                      <td>طرق منهجية البحث</td>
                      <td>85</td>
                      <td>جيد جدا</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
  </section>
    
@endsection