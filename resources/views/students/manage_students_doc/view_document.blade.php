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
            <li class="breadcrumb-item">{{__('students/view_student.Home_Document')}}</li>
            <li class="breadcrumb-item active"><a href="{{route('students_documents')}}">{{__('students/view_student.Screen_Document')}}</a></li>
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
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students/add_student.Documents')}}</h3>
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
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th>{{__('students/add_student.Document_Title')}}</th>
                        <th>{{__('students/add_student.Document_Number')}}</th>
                        <th>{{__('students/add_student.Received_Date')}}</th>
                        <th>{{__('students/add_student.Document_type.Document_type')}}</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                         <td>شهادة تخرج الثانوية</td>
                         <td>812182850</td>
                         <td>22-5-2019</td>
                         <td>ثانوية</td>
                    </tr>
                    <tr>
                        <td>شهادة تخرج الثانوية</td>
                        <td>812182850</td>
                        <td>22-5-2019</td>
                        <td>ثانوية</td>
                    </tr>
                    <tr>
                        <td>شهادة تخرج الثانوية</td>
                        <td>812182850</td>
                        <td>22-5-2019</td>
                        <td>ثانوية</td>
                    </tr>
                    <tr>
                        <td>شهادة تخرج الثانوية</td>
                        <td>812182850</td>
                        <td>22-5-2019</td>
                        <td>ثانوية</td>
                    </tr>
                    <tr>
                        <td>شهادة تخرج الثانوية</td>
                        <td>812182850</td>
                        <td>22-5-2019</td>
                        <td>ثانوية</td>
                    </tr>
                    <tr>
                        <td>شهادة تخرج الثانوية</td>
                        <td>812182850</td>
                        <td>22-5-2019</td>
                        <td>ثانوية</td>
                    </tr>
                    <tr>
                        <td>شهادة تخرج الثانوية</td>
                        <td>812182850</td>
                        <td>22-5-2019</td>
                        <td>ثانوية</td>
                    </tr>
                    <tr>
                        <td>شهادة تخرج الثانوية</td>
                        <td>812182850</td>
                        <td>22-5-2019</td>
                        <td>ثانوية</td>
                    </tr>
                    <tr>
                        <td>شهادة تخرج الثانوية</td>
                        <td>812182850</td>
                        <td>22-5-2019</td>
                        <td>ثانوية</td>
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