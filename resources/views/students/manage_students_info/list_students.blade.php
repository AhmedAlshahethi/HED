@extends('layout.master')
<?php
$pluralPageName = ['students_info' => 'students', 'students_documents' => 'documents'][Route::currentRouteName()];
$singlePageName = ['students_info' => 'student', 'students_documents' => 'document'][Route::currentRouteName()];
?>
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">{{ __('students/list_students.Home') }}</li>
            <li class="breadcrumb-item active"><a
                href="{{ route('students_info') }}">{{ __('students/list_students.Screen_' . $pluralPageName) }}</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              @if (Route::currentRouteName() == 'students_info')
                <h3 class="card-title mr-2">
                  <a href="{{ route('add_student') }}">
                    <button type="button"
                      class="btn btn-block btn-primary">{{ __('students/list_students.add_student') }}</button>
                  </a>
                </h3>
              @endif
              <h3 class="card-title mr-2">
                <a href="{{ route('import_data', [
                    'type' => $pluralPageName,
                ]) }}">
                  <button type="button"
                    class="btn btn-block btn-success">{{ __('students/list_students.import_' . $pluralPageName) }}</button>
                </a>
              </h3>
              <h3 class="card-title mr-2">
                <a
                  href="{{ route('export_data', [
                      'type' => $pluralPageName,
                      ...request()->query(),
                  ]) }}">
                  <button type="button"
                    class="btn btn-block btn-info">{{ __('students/list_students.export_' . $pluralPageName) }}</button>
                </a>
              </h3>
              <form class="card-tools" method="GET" action="">
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item mr-2">
                    <input type="text" name="search" class="form-control float-right"
                      value="{{ !empty(app('request')->input('search')) ? app('request')->input('search') : '' }}"
                      placeholder="{{ __('shared/shared.Search') }}">
                  </li>
                  <li class="nav-item mr-2">
                    <select class="custom-select" id="selectOption" name="department">
                      <option selected disabled>{{ __('shared/shared.Section') }}</option>
                      <option value="">{{ __('shared/shared.All') }}</option>
                      @foreach ($departments as $department)
                        <option value="{{ $department->id }}"
                          {{ app('request')->input('department') == $department->id ? 'selected' : '' }}>
                          {{ $department->name }}</option>
                      @endforeach
                    </select>
                  </li>
                  <li class="nav-item mr-2">
                    <select class="custom-select" id="selectOption" name="level">
                      <option selected disabled>{{ __('shared/shared.Level') }}</option>
                      <option value="">{{ __('shared/shared.All') }}</option>
                      @foreach ($academicLevels as $level)
                        <option value="{{ $level }}"
                          {{ app('request')->input('level') == $level ? 'selected' : '' }}>
                          {{ $level }}</option>
                      @endforeach
                    </select>
                  </li>
                  <li class="nav-item">
                    <button type="submit" class="btn btn-block btn-success">search</button>
                  </li>
                </ul>
              </form>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>{{ __('shared/shared.Student_Name') }}</th>
                    <th>{{ __('shared/shared.Academic_Number') }}</th>
                    <th>{{ __('shared/shared.Level') }}</th>
                    <th>{{ __('shared/shared.Section') }}</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="table_body">
                  @foreach ($all_students as $student)
                    <tr>
                      <td>{{ $student->name }}</td>
                      <td>{{ $student->academic_number }}</td>
                      <td>{{ $student->registration_type }}</td>
                      <td>{{ $student->departments->name }}</td>
                      <td class="project-actions text-right">
                        <a class="btn btn-warning btn-sm" href="{{ route('edit_' . $singlePageName, $student->id) }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                          {{ __('shared/shared.Edit') }}
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="pagination-container">
                <div class="pagination-info">
                  Showing {{ $current_page * $per_page - $per_page + 1 }} to
                  {{ $current_page * $per_page - $per_page + count($all_students) }} of
                  {{ $total }} items
                </div>
                <div class="pagination-buttons">
                  @if ($current_page > 1)
                    <a href="{{ route(Route::currentRouteName(), [...request()->query(), 'page' => 1]) }}">
                      <button class="pagination-button btn btn-light">
                        1
                      </button>
                    </a>
                  @endif
                  @if ($current_page > 2)
                    <a
                      href="{{ route(Route::currentRouteName(), [...request()->query(), 'page' => $current_page - 1]) }}">
                      <button class="pagination-button btn btn-light">
                        {{ $current_page - 1 }}
                      </button>
                    </a>
                  @endif
                  @if ($last_page > 1)
                    <a href="{{ route(Route::currentRouteName(), [...request()->query(), 'page' => $current_page]) }}">
                      <button class="pagination-button btn btn-primary">
                        {{ $current_page }}
                      </button>
                    </a>
                  @endif
                  @if ($current_page < $last_page - 1)
                    <a
                      href="{{ route(Route::currentRouteName(), [...request()->query(), 'page' => $current_page + 1]) }}">
                      <button class="pagination-button btn btn-light">
                        {{ $current_page + 1 }}
                      </button>
                    </a>
                  @endif
                  @if ($current_page < $last_page)
                    <a href="{{ route(Route::currentRouteName(), [...request()->query(), 'page' => $last_page]) }}">
                      <button class="pagination-button btn btn-light">
                        {{ $last_page }}
                      </button>
                    </a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
@endsection
