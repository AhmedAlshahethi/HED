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
          <li class="breadcrumb-item">{{__('schedules/list_schedules.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('schedules')}}">{{__('schedules/list_schedules.Screen')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <a href="{{route('add_schedule')}}">
                <button type="button" class="btn btn-block btn-primary">{{__('schedules/list_schedules.Add_Schedule')}}</button>
                </a>
              </h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item mr-2">
                    <input type="text" id="table_search" name="table_search" class="form-control float-right" placeholder="{{__('shared/shared.Search')}}">
                  </li>
                  <li class="nav-item">
                    <div class="input-group-append" id="clear_button_container">
                      <!-- Clear button will be dynamically added here -->
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>{{__('schedules/list_schedules.Schedules_table.Schedule_Name')}}</th>
                  </tr>
                </thead>
                <tbody id="table_body">
                  
                
                
                @foreach($schedules as $schedule)


                <tr>
                    <td>  {{$schedule->name}}  </td>
                    <td class="project-actions text-right"> 
                        <a class="btn btn-primary btn-sm" href="{{route('view_schedule')}}">
                            <i class="fas fa-eye">
                            </i>
                            {{__('shared/shared.View')}}
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('edit_schedule')}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            {{__('shared/shared.Edit')}}
                        </a>
                        <a class="btn btn-danger btn-sm text-white" href="#">
                            <i class="fas fa-trash">
                            </i>
                            {{__('shared/shared.Delete')}}
                        </a>
                    </td>
                </tr>

                @endforeach
              
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
    
