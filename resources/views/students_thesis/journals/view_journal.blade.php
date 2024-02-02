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
          <li class="breadcrumb-item">{{__('students_thesis/shared.Home_Journal.View_Journal')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_journals')}}">{{__('students_thesis/shared.Screen_Journal')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<form>
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('students_thesis/shared.Journal_Title.View_Journal_Data')}}</h3>
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
                                {{__('students_thesis/shared.Students_table.Thesis_Title')}} : تحسين كفائة شبكة الجيل السادس في اليمن
                              </th>
                          </tr>
                      </thead></table>
                </div> 
                <div class="card-body">
                    <div class="row">
                        <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                            <table class="table table-head-fixed text-nowrap" id="dynamicAddRemove">
                                <thead>
                                    <tr>
                                        <th>{{__('students_thesis/journal.Journal_Name')}}</th>
                                        <th>{{__('students_thesis/journal.Journal_Link')}}</th>
                                        <th>{{__('students_thesis/journal.Notes')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="dynamicAddRemove_5">
                                    <tr>
                                        <td>
                                          <div>
                                            <input type="text" name="journal_name[0][journal_name]" class="form-control" placeholder="{{__('students_thesis/journal.Journal_Name')}}">
                                          </div>
                                        </td>
                                        <td>
                                          <div>
                                            <input type="text" name="journal_link[0][journal_link]" class="form-control" placeholder="{{__('students_thesis/journal.Journal_Link')}}">
                                          </div>
                                        </td>
                                        <td>
                                            <div>
                                              <input type="text" name="notes[0][notes]" class="form-control" placeholder="{{__('students_thesis/journal.Notes')}}">
                                            </div>
                                          </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
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
</form>
@endsection


   
   