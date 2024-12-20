@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('students/add_student.Home_Mark')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_marks')}}">{{__('students/add_student.Screen_Mark')}}</a></li>
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
                        <div class="float-left" style="margin-bottom: 20px;">
                            <button type="button" id="dynamic-ar_4" class="btn btn-block btn-primary">{{__('students/edit_student.Add_marks')}}</button>
                          </div> 
                          <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                            <table class="table table-head-fixed text-nowrap" id="dynamicAddRemove">
                                <thead>
                                    <tr>
                                        <th>{{__('students/edit_student.Term.Term')}}</th>
                                        <th>{{__('students/edit_student.Subject.Subject')}}</th>
                                        <th>{{__('students/edit_student.Status.Status')}}</th>
                                        <th>{{__('students/edit_student.Mark')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="dynamicAddRemove_4">
                                    <tr>
                                        <td>
                                          <select class="custom-select" name="term[0][term]">
                                            <option>{{__('students/edit_student.Term.option 1')}}</option>
                                            <option>{{__('students/edit_student.Term.option 2')}}</option>
                                          </select>
                                        </td>
                                        <td>
                                          <select class="custom-select" name="subject[0][subject]">
                                            <option>{{__('students/edit_student.Subject.option 1')}}</option>
                                            <option>{{__('students/edit_student.Subject.option 2')}}</option>
                                          </select>
                                        </td>
                                        <td>
                                        <select class="custom-select" name="status[0][status]">
                                          <option>{{__('students/edit_student.Status.Finshed')}}</option>
                                          <option>{{__('students/edit_student.Status.Still')}}</option>
                                        </select>
                                        </td>
                                        <td>
                                          <div class="form-group" style="width: 45%">
                                              <input type="text" name="mark[0][mark]" class="form-control" placeholder="{{__('students/edit_student.Mark')}}">
                                            </div>
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-danger btn-sm text-white">
                                                <i class="fas fa-trash"></i>
                                                {{__('shared/shared.Delete')}}
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                          <button type="submit" class="btn btn-success">{{__('shared/shared.Save')}}</button>
                    </div>              
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
</form>
@endsection


   