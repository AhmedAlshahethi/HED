@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('students/edit_student.Home_Document')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_documents')}}">{{__('students/edit_student.Screen_Document')}}</a></li>
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
                        <div class="card-body table-responsive p-0" style="max-height: 600px; overflow-y: auto;">
                            <table class="table table-head-fixed text-nowrap" id="dynamicAddRemove">
                                <thead>
                                    <tr>
                                        <th>{{__('students/add_student.Document_Title')}}</th>
                                        <th>{{__('students/add_student.Document_Number')}}</th>
                                        <th>{{__('students/add_student.Received_Date')}}</th>
                                        <th>{{__('students/add_student.Document_type.Document_type')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="dynamicAddRemove_3">
                                    <tr>
                                        <td>
                                          <div>
                                            <input type="text" class="form-control" placeholder="{{__('students/add_student.Document_Title')}}">
                                          </div>
                                        </td>
                                        <td>
                                          <div>
                                            <input type="text" class="form-control" placeholder="{{__('students/add_student.Document_Number')}}">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                          </div>
                                        </td>
                                        <td>
                                          <select class="custom-select">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                          </select>
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


   