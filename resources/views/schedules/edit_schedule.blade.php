@extends('layout.master')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('schedules/edit_schedule.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('schedules')}}">{{__('schedules/edit_schedule.Screen')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<form method="post" action="{{route('update_schedule',$schedule)}}">
  @csrf
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('schedules/edit_schedule.New_Schedule')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-group">
                  <label>{{__('schedules/edit_schedule.Schedule_Name')}}</label>
                  <input type="text" name="name" value="{{$schedule->name}}" class="form-control" placeholder="{{__('schedules/edit_schedule.Schedule_Name')}}">
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
                <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('schedules/edit_schedule.Lectures')}}</h3>
                <div style="float: {{LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right'}}">
                


                  <button type="button"   id="dynamic-ar" class="btn btn-block btn-primary">{{__('schedules/edit_schedule.Add_Lecture')}} </button>
              </div> 

             
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap" id="dynamicAddRemove">
                      <thead>
                        <tr>
                          <th>{{__('schedules/edit_schedule.Lectures_Table.Instructor')}}</th>
                          <th>{{__('schedules/edit_schedule.Lectures_Table.Day')}}</th>
                          <th>{{__('schedules/edit_schedule.Lectures_Table.Time')}}</th>
                          <th>{{__('schedules/edit_schedule.Lectures_Table.Subject')}}</th>
                          <th>{{__('schedules/add_schedule.Lectures_Table.Lecture')}}</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($scheduleEntries as $entry)

                        <tr>
                            
                          <td>
                           
                            <select class="custom-select" name="{{$entry->id}}[instructor]">
                            <option value="{{$entry->instructor_id}}">{{$entry->instructor->name}}</option>

                              @foreach($instructors as $instructor)
                              @if($entry->instructor_id == $instructor->id)
                              @continue
                              @else
                              <option value="{{$instructor->id}}">{{$instructor->name}}</option>
                              @endif
                             @endforeach
                            </select>
                          </td>
                          <td>
                            <select class="custom-select" name="{{$entry->id}}[day]">
                            <option value="1">Monday</option>
                           <option value="2">Tuesday</option>
                          <option value="3">Wednesday</option>
                          <option value="4">Thursday</option>
                          <option value="5">Friday</option>
                            </select>
                          </td>
                          <td>
                <select class="custom-select" name="{{$entry->id}}[start_time]">
                    <option value="8:00">8:00 AM</option>
                    <option value="9:00">9:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    </select>
                @error('start_time.' . $i)
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </td>
            <td>
                <select class="custom-select" name="{{$entry->id}}[subject_id]">
                <option value="{{$entry->subject_id}}">{{$entry->subject->name}}</option>
                @foreach($subjects as $subject)
                @if($entry->subject_id == $subject->id)
                @continue
                @else
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                @endif
                    @endforeach
                </select>
                @error('subject_id.' . $i)
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </td>
            <td>
                <div>
                    <input type="text" name="{{$entry->id}}[class_room]" class="form-control" placeholder="{{__('schedules/add_schedule.Lectures_Table.Lecture')}}" value="{{$entry->class_room}}">
                    @error('class_room.' . $i)
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </td>
            <td class="project-actions text-right">
                              <a class="btn btn-danger btn-sm text-white" href="{{route('delete_schedule_entry', $entry->id)}}">
                                  <i class="fas fa-trash" ></i>
                                  {{__('shared/shared.Delete')}}
                              </a>
                          </td>
                        </tr>
                      <
                      {{$i++}}             
                                @endforeach

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
@push('scripts')
<script>
  var i = 0;
  $("#dynamic-ar").click(function () {
    ++i;
    $("#dynamicAddRemove").append(`
        <tr>
            <td>
                <select class="custom-select" name="instructor_id[${i}][instructor_id]">
                    @foreach($instructors as $instructor)
                        <option value="{{$instructor->id}}">{{$instructor->name}}</option>
                    @endforeach
                </select>
                @error('instructor_id.' . $i)
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </td>
            <td>
                <select class="custom-select" name="day[${i}][day]">
                    <option value="1">Monday</option>
                    <option value="2">Tuesday</option>
                    <option value="3">Wednesday</option>
                    <option value="4">Thursday</option>
                    <option value="5">Friday</option>
                </select>
                @error('day.' . $i)
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </td>
            <td>
                <select class="custom-select" name="start_time[${i}][start_time]">
                    <option value="8:00">8:00 AM</option>
                    <option value="9:00">9:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    </select>
                @error('start_time.' . $i)
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </td>
            <td>
                <select class="custom-select" name="subject_id[${i}][subject_id]">
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                    @endforeach
                </select>
                @error('subject_id.' . $i)
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </td>
            <td>
                <div>
                    <input type="text" name="class_room[${i}][class_room]" class="form-control" placeholder="{{__('schedules/add_schedule.Lectures_Table.Lecture')}}">
                    @error('class_room.' . $i)
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </td>
            <td class="project-actions text-right">
                <a class="btn btn-danger btn-sm text-white remove-input-field">
                    <i class="fas fa-trash"></i>
                    {{__('shared/shared.Delete')}}
                </a>
            </td>
        </tr>
    `);
  });

  $(document).on('click', '.remove-input-field', function () {
    $(this).closest('tr').remove();
  });
</script>
@endpush
@endsection











