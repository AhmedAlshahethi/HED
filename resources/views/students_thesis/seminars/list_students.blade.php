@extends('layout.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">{{ __('students_thesis/shared.Home') }}</li>
                        <li class="breadcrumb-item active"><a
                                href="{{ route('students_seminars') }}">{{ __('students_thesis/shared.Screen_Seminar') }}</a>
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h3 class="card-title mr-2">
                <a href="#">
                    <button type="button" class="btn btn-block btn-primary">{{__('students_thesis/shared.Import.Import_Seminar')}}</button>
                </a>
              </h3>
              <h3 class="card-title mr-2">
                <a href="#">
                    <button type="button" class="btn btn-block bg-success">{{__('students_thesis/shared.Export.Export_Seminar')}}</button>
                </a>
              </h3> --}}
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto p-2">
                                    <li class="nav-item mr-2">
                                        <input type="text" id="table_search" name="table_search"
                                            class="form-control float-right" placeholder="{{ __('shared/shared.Search') }}">
                                    </li>
                                    <li class="nav-item">
                                        <div class="input-group-append" id="clear_button_container">
                                            <!-- Clear button will be dynamically added here -->
                                        </div>
                                    </li>
                                    <li class="nav-item mr-2">
                                        <select class="custom-select" id="selectOption">
                                            <option selected disabled>{{ __('shared/shared.Section') }}</option>
                                            <option value="option1">{{ __('shared/shared.All') }}</option>
                                            <option value="option1">{{ __('shared/shared.IT') }}</option>
                                            <option value="option2">{{ __('shared/shared.IS') }}</option>
                                            <option value="option2">{{ __('shared/shared.Cs') }}</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </li>
                                    <li class="nav-item mr-2">
                                        <select class="custom-select" id="selectOption">
                                            <option selected disabled>{{ __('shared/shared.Level') }}</option>
                                            <option value="option1">{{ __('shared/shared.All') }}</option>
                                            <option value="option1">{{ __('shared/shared.Master') }}</option>
                                            <option value="option2">{{ __('shared/shared.phD') }}</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>{{ __('shared/shared.Student_Name') }}</th>
                                        <th>{{ __('shared/shared.Student_Id') }}</th>
                                        <th>{{ __('shared/shared.Level') }}</th>
                                        <th>{{ __('shared/shared.Section') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="table_body">
                                    @foreach ($all_students as $student)
                                        <tr>
                                            <td>{{ $student->name }}</td>
                                            <td>21160021</td>
                                            <td>{{ $student->registration_type }}</td>
                                            <td>{{ $student->departments->name }}</td>
                                            <td class="project-actions text-right">
                                                @php
                                                    $studentId = $student->id;
                                                    $hasSeminar = App\Models\Seminar::where(
                                                        'student',
                                                        $studentId,
                                                    )->exists();
                                                @endphp
                                                @if (!$hasSeminar)
                                                    <a class="btn btn-success btn-sm"
                                                        href="{{ route('add_seminar', $student->id) }}">
                                                        <i class="fas fa-folder">
                                                        </i>
                                                        {{ __('shared/shared.Add') }}
                                                    </a>
                                                @else
                                                    <a class="btn btn-success btn-sm"
                                                        href="{{ route('approve', $student->id) }}">
                                                        <i class="fas fa-folder">
                                                        </i>
                                                        {{ __('shared/shared.Approval') }}
                                                    </a>
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('view_seminar', $student->id) }}">
                                                        <i class="fas fa-eye">
                                                        </i>
                                                        {{ __('shared/shared.View') }}
                                                    </a>

                                                    <a class="btn btn-info btn-sm"
                                                        href="{{ route('edit_seminar', $student->id) }}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        {{ __('shared/shared.Edit') }}
                                                    </a>
                                                    <a class="btn btn-danger btn-sm text-white"
                                                        href="{{ route('delete_seminar', $student->id) }}">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        {{ __('shared/shared.Delete') }}
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

    </section>
@endsection
