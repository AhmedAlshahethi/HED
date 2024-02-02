@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('students/edit_student.Home_Mark')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('students_marks')}}">{{__('students/edit_student.Screen_Mark')}}</a></li>
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
                    <div class="card-body table-responsive p-0" sstyle="max-height: 600px; overflow-y: auto;">
                      <table class="table table-hover text-nowrap" id="dynamicAddRemove">
                          <thead>
                              <tr>  
                                  <th>{{__('students/edit_student.Term.Term')}}</th>
                                  <th>{{__('students/edit_student.Subject.Subject')}}</th>
                                  <th>{{__('students/edit_student.Status.Status')}}</th>
                                  <th>{{__('students/edit_student.Mark')}}</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>
                                    <select class="custom-select">
                                      <option>{{__('students/edit_student.Term.option 1')}}</option>
                                      <option>{{__('students/edit_student.Term.option 2')}}</option>
                                    </select>
                                  </td>
                                  <td>
                                    <select class="custom-select">
                                      <option>{{__('students/edit_student.Subject.option 1')}}</option>
                                      <option>{{__('students/edit_student.Subject.option 2')}}</option>
                                    </select>
                                  </td>
                                  <td>
                                  <select class="custom-select">
                                    <option>{{__('students/edit_student.Status.Finshed')}}</option>
                                    <option>{{__('students/edit_student.Status.Still')}}</option>
                                  </select>
                                  </td>
                                  <td>
                                    <div class="form-group" style="width: 45%">
                                        <input type="text" name="mark[0][mark]" class="form-control" placeholder="{{__('students/edit_student.Mark')}}">
                                      </div>
                                  </td>
                              </tr> 
                              <tr>
                                <td>
                                  <select class="custom-select">
                                    <option>{{__('students/edit_student.Term.option 1')}}</option>
                                    <option>{{__('students/edit_student.Term.option 2')}}</option>
                                  </select>
                                </td>
                                <td>
                                  <select class="custom-select">
                                    <option>{{__('students/edit_student.Subject.option 1')}}</option>
                                    <option>{{__('students/edit_student.Subject.option 2')}}</option>
                                  </select>
                                </td>
                                <td>
                                <select class="custom-select">
                                  <option>{{__('students/edit_student.Status.Finshed')}}</option>
                                  <option>{{__('students/edit_student.Status.Still')}}</option>
                                </select>
                                </td>
                                <td>
                                  <div class="form-group" style="width: 45%">
                                      <input type="text" name="mark[0][mark]" class="form-control" placeholder="{{__('students/edit_student.Mark')}}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                              <td>
                                <select class="custom-select">
                                  <option>{{__('students/edit_student.Term.option 1')}}</option>
                                  <option>{{__('students/edit_student.Term.option 2')}}</option>
                                </select>
                              </td>
                              <td>
                                <select class="custom-select">
                                  <option>{{__('students/edit_student.Subject.option 1')}}</option>
                                  <option>{{__('students/edit_student.Subject.option 2')}}</option>
                                </select>
                              </td>
                              <td>
                              <select class="custom-select">
                                <option>{{__('students/edit_student.Status.Finshed')}}</option>
                                <option>{{__('students/edit_student.Status.Still')}}</option>
                              </select>
                              </td>
                              <td>
                                <div class="form-group" style="width: 45%">
                                    <input type="text" name="mark[0][mark]" class="form-control" placeholder="{{__('students/edit_student.Mark')}}">
                                  </div>
                              </td>
                          </tr>
                          <tr>
                            <td>
                              <select class="custom-select">
                                <option>{{__('students/edit_student.Term.option 1')}}</option>
                                <option>{{__('students/edit_student.Term.option 2')}}</option>
                              </select>
                            </td>
                            <td>
                              <select class="custom-select">
                                <option>{{__('students/edit_student.Subject.option 1')}}</option>
                                <option>{{__('students/edit_student.Subject.option 2')}}</option>
                              </select>
                            </td>
                            <td>
                            <select class="custom-select">
                              <option>{{__('students/edit_student.Status.Finshed')}}</option>
                              <option>{{__('students/edit_student.Status.Still')}}</option>
                            </select>
                            </td>
                            <td>
                              <div class="form-group" style="width: 45%">
                                  <input type="text" name="mark[0][mark]" class="form-control" placeholder="{{__('students/edit_student.Mark')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                          <td>
                            <select class="custom-select">
                              <option>{{__('students/edit_student.Term.option 1')}}</option>
                              <option>{{__('students/edit_student.Term.option 2')}}</option>
                            </select>
                          </td>
                          <td>
                            <select class="custom-select">
                              <option>{{__('students/edit_student.Subject.option 1')}}</option>
                              <option>{{__('students/edit_student.Subject.option 2')}}</option>
                            </select>
                          </td>
                          <td>
                          <select class="custom-select">
                            <option>{{__('students/edit_student.Status.Finshed')}}</option>
                            <option>{{__('students/edit_student.Status.Still')}}</option>
                          </select>
                          </td>
                          <td>
                            <div class="form-group" style="width: 45%">
                                <input type="text" name="mark[0][mark]" class="form-control" placeholder="{{__('students/edit_student.Mark')}}">
                              </div>
                          </td>
                      </tr>
                      <tr>
                        <td>
                          <select class="custom-select">
                            <option>{{__('students/edit_student.Term.option 1')}}</option>
                            <option>{{__('students/edit_student.Term.option 2')}}</option>
                          </select>
                        </td>
                        <td>
                          <select class="custom-select">
                            <option>{{__('students/edit_student.Subject.option 1')}}</option>
                            <option>{{__('students/edit_student.Subject.option 2')}}</option>
                          </select>
                        </td>
                        <td>
                        <select class="custom-select">
                          <option>{{__('students/edit_student.Status.Finshed')}}</option>
                          <option>{{__('students/edit_student.Status.Still')}}</option>
                        </select>
                        </td>
                        <td>
                          <div class="form-group" style="width: 45%">
                              <input type="text" name="mark[0][mark]" class="form-control" placeholder="{{__('students/edit_student.Mark')}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <select class="custom-select">
                          <option>{{__('students/edit_student.Term.option 1')}}</option>
                          <option>{{__('students/edit_student.Term.option 2')}}</option>
                        </select>
                      </td>
                      <td>
                        <select class="custom-select">
                          <option>{{__('students/edit_student.Subject.option 1')}}</option>
                          <option>{{__('students/edit_student.Subject.option 2')}}</option>
                        </select>
                      </td>
                      <td>
                      <select class="custom-select">
                        <option>{{__('students/edit_student.Status.Finshed')}}</option>
                        <option>{{__('students/edit_student.Status.Still')}}</option>
                      </select>
                      </td>
                      <td>
                        <div class="form-group" style="width: 45%">
                            <input type="text" name="mark[0][mark]" class="form-control" placeholder="{{__('students/edit_student.Mark')}}">
                          </div>
                      </td>
                  </tr>
                  <tr>
                    <td>
                      <select class="custom-select">
                        <option>{{__('students/edit_student.Term.option 1')}}</option>
                        <option>{{__('students/edit_student.Term.option 2')}}</option>
                      </select>
                    </td>
                    <td>
                      <select class="custom-select">
                        <option>{{__('students/edit_student.Subject.option 1')}}</option>
                        <option>{{__('students/edit_student.Subject.option 2')}}</option>
                      </select>
                    </td>
                    <td>
                    <select class="custom-select">
                      <option>{{__('students/edit_student.Status.Finshed')}}</option>
                      <option>{{__('students/edit_student.Status.Still')}}</option>
                    </select>
                    </td>
                    <td>
                      <div class="form-group" style="width: 45%">
                          <input type="text" name="mark[0][mark]" class="form-control" placeholder="{{__('students/edit_student.Mark')}}">
                        </div>
                    </td>
                </tr> 
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
