@extends('layout.master')



@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3>
            <button type="button" class="btn btn-success">
              <i class="fas fa-print"> {{ __('shared/shared.Print') }}</i>
            </button>
          </h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">{{ __('schedules/view_schedule.Home') }}</li>
            <li class="breadcrumb-item active"><a
                href="{{ route('schedules') }}">{{ __('schedules/view_schedule.Screen') }}</a></li>
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
                <h3 class="card-title"
                  style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
                  {{ __('schedules/view_schedule.New_Schedule') }}</h3>
              </h3>
              <div class="card-tools"
                style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'left' : 'right' }}">
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th colspan="6">
                      {{ __('schedules/view_schedule.Lectures_Table.Table_Name') }} : {{ $schedule->name }}
                    </th>
                  </tr>

                  <tr>
                    <th>{{ __('schedules/view_schedule.Lectures_Table.Day') }}</th>
                    <th>{{ __('schedules/view_schedule.Lectures_Table.Instructor') }}</th>
                    <th>{{ __('schedules/view_schedule.Lectures_Table.Time') }}</th>
                    <th>{{ __('schedules/view_schedule.Lectures_Table.Subject') }}</th>
                    <th>{{ __('schedules/add_schedule.Lectures_Table.Lecture') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($scheduleEntries as $entry)
                    <tr>
                      <td>{{ $entry->day }}</td>
                      <td>{{ __('schedules/view_schedule.Days.' . $entry->day) }}</td>
                      <td>{{ $entry->instructor->name }}</td>
                      <td>{{ $entry->start_time }}</td>
                      <td>{{ $entry->subject->name }}</td>
                      <td>{{ $entry->class_room }}</td>
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
