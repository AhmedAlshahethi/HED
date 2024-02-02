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
        <li class="breadcrumb-item">{{__('students_thesis/shared.Home_Discussion.View_Discussion')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_discussions')}}">{{__('students_thesis/shared.Screen_Discussion')}}</a></li>
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
                        <h3 class="card-title" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left'}}">{{__('students_thesis/shared.Discussion_Title.View_Discussion_Data')}}</h3>
                        <div class="card-tools" style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                        </div>
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
                                <tr>
                                    <th colspan="2">
                                    {{__('students_thesis/discussion.Thesis_Title')}} : تحسين كفائة شبكة الجيل السادس في اليمن
                                    </th>
                                </tr>
                            </thead></table>
                      </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap vertical-table">
                                        <tbody>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.Score')}}</th>
                                                <td>95</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.Approval_of_the_ruling_result-Section')}}</th>
                                                <td>1-7-2023</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.Approval_of_the_ruling_result-College')}}</th>
                                                <td>1-7-2023</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.Discussion_Date')}}</th>
                                                <td>10-9-2023</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.External_Discussant')}}</th>
                                                <td>احمد محمد علي الشاحذي</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.Discussion_Result')}}</th>
                                                <td>ممتاز</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.Notes')}}</th>
                                                <td>-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap vertical-table">
                                        <tbody>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.General_Rating')}}</th>
                                                <td>ممتاز</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.Section_Approvement_Number')}}</th>
                                                <td>220</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.College_Approvement_Number')}}</th>
                                                <td>403</td>
                                            </tr>
                                            <tr>
                                                <th>{{__("students_thesis/discussion.Referee's_Decision_Number")}}</th>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.Internal_Discussant')}}</th>
                                                <td>اكرم علي المعرسي</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('students_thesis/discussion.Thesis_File')}}</th>
                                                <td>20س</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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