@extends('layout.master')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('schedules/add_schedule.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('schedules')}}">{{__('schedules/add_schedule.Screen')}}</a></li>
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
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('schedules/add_schedule.New_Schedule')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-group">
                  <label>{{__('schedules/add_schedule.Schedule_Name')}}</label>
                  <input type="text" class="form-control" placeholder="{{__('schedules/add_schedule.Schedule_Name')}}">
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="content">
          <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('schedules/add_schedule.Lectures')}}</h3>
                <div style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                  <button type="button" id="dynamic-ar" class="btn btn-block btn-primary">{{__('schedules/add_schedule.Add_Lecture')}}</button>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">   
                <div class="row">
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap" id="dynamicAddRemove">
                      <thead>
                        <tr>
                          <th>{{__('schedules/add_schedule.Lectures_Table.Instructor')}}</th>
                          <th>{{__('schedules/add_schedule.Lectures_Table.Day')}}</th>
                          <th>{{__('schedules/add_schedule.Lectures_Table.Time')}}</th>
                          <th>{{__('schedules/add_schedule.Lectures_Table.Subject')}}</th>
                          <th>{{__('schedules/add_schedule.Lectures_Table.Lecture')}}</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <select class="custom-select" name="instructor[0][instructor]">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                              <option>option 5</option>
                            </select>
                          </td>
                          <td>
                            <select class="custom-select" name="day[0][day]">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                              <option>option 5</option>
                            </select>
                          </td>
                          <td>
                            <select class="custom-select" name="time[0][time]">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                              <option>option 5</option>
                            </select>
                          </td>
                          <td>
                            <select class="custom-select" name="subject[0][subject]">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                              <option>option 5</option>
                            </select>
                          </td>
                          <td>
                            <div>
                              <input type="text" name="Lecture[0][Lecture]" class="form-control" style="width: 55%"
                              placeholder="{{__('schedules/add_schedule.Lectures_Table.Lecture')}}">
                            </div>
                          </td>
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
            <div class="col-md-6">
              <div class="form-group">
                    <button type="submit" class="btn btn-success">{{__('shared/shared.Save')}}</button>
              </div>              
          </div>
            <!-- /.card -->
          </div>
          <!-- /.container-fluid -->
        </section>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
</form>
@endsection











