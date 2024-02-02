@extends('layout.master')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <button type="button" class="btn btn-success">
                <i class="fas fa-print"> {{__('shared/shared.Print')}}</i>
              </button>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('students_thesis/shared.Home_Thesis.View_Thesis')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_papers')}}">{{__('students_thesis/shared.Screen_Thesis')}}</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="row">
    <div class="col-md-12">
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students_thesis/shared.Thesis_Title.View_Thesis_Data')}}</h3>
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
                                <table class="table table-hover text-nowrap vertical-table">
                                    <tbody>
                                        <tr>
                                            <th>عنوان الرسالة</th>
                                            <td>تحسين كفائة شبكة الجيل السادس في اليمن</td>
                                        </tr>
                                        <tr>
                                            <th>الدرجة</th>
                                            <td>95</td>
                                        </tr>
                                        <tr>
                                            <th>تاريخ اعتماد الرسالة - مجلس القسم</th>
                                            <td>1-7-2023</td>
                                        </tr>
                                        <tr>
                                            <th>رقم الجلسة - مجلس القسم</th>
                                            <td>202</td>
                                        </tr>
                                        <tr>
                                            <th>تاريخ اعتماد الرسالة - مجلس الكلية</th>
                                            <td>10-9-2023</td>
                                        </tr>
                                        <tr>
                                            <th>رقم الجلسة - مجلس الكلية</th>
                                            <td>410</td>
                                        </tr>
                                        <tr>
                                            <th>الملف</th>
                                            <td>...........</td>
                                        </tr>
                                        <tr>
                                            <th>ملاحظات</th>
                                            <td>-</td>
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
    </div>
  </div>

@endsection