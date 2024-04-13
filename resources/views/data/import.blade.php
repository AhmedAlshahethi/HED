@extends('layout.master')

@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">{{ __('data/import.Home.' . $type) }}</li>
            <li class="breadcrumb-item active"><a
                href="{{ route('students_info') }}">{{ __('data/import.Screen.' . $type) }}</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"
              style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' : 'left' }}">
              {{ __('data/import.Header') }}</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="form-group">
                    <label for="exampleInputFile">{{ __('data/import.File') }}</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" accept=".xlsx"
                          id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile"></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="col-md-6 text-danger mb-4">
      @foreach ($errors->all() as $error)
        {!! $error !!} <br />
      @endforeach
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <button type="submit" class="btn btn-success">{{ __('data/import.Upload') }}</button>
      </div>
    </div>
  </form>
@endsection
