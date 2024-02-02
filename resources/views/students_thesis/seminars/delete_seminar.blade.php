@extends('layout.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('students_thesis/shared.Home_Seminar.Delete_Seminar')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_seminars')}}">{{__('students_thesis/shared.Screen_Seminar')}}</a></li>
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
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students_thesis/shared.Seminar_Title.Delete_Seminar_Data')}}</h3>
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
                        <th>{{__('students_thesis/seminar.Title')}}</th>
                        <th>{{__('students_thesis/seminar.Supervisor')}}</th>
                        <th>{{__('students_thesis/seminar.Assistant_Supervisor')}}</th>
                        <th>{{__('students_thesis/seminar.Date')}}</th>
                        <th>{{__('students_thesis/seminar.Status')}}</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                         <td>تحسن كفاءة شبكة الجيل السادس</td>
                         <td>احمد محمد علي الشاحذي</td>
                         <td>عبدالكريم جلال النزيلي</td>
                         <td>22-5-2023</td>
                         <td>مقبول</td>
                         <td class="project-actions text-right">
                            <a class="btn btn-danger btn-sm text-white">
                                <i class="fas fa-trash"></i>
                                {{__('shared/shared.Delete')}}
                            </a>
                        </td>
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