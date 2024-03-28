@extends('layout.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{__('documents/edit_document.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('documents_type')}}">{{__('documents/edit_document.Screen')}}</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<form method="post" action="{{route('update_document_type',$documentType)}}">
  @csrf
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title" style="float: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'right' :  'left'}}">{{__('documents/edit_document.New_Document')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <div class="form-group">
                      <label>{{__('documents/edit_document.Document_Type')}}</label>
                      <input type="text" name="name" class="form-control" placeholder="{{__('documents/edit_document.Document_Type')}}" value="{{$documentType->name}}">
                    </div>
              </div>
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
</form>
@endsection



















