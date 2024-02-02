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
          <li class="breadcrumb-item">{{__('documents/list_documents.Home')}}</li>
          <li class="breadcrumb-item active"><a href="{{route('documents_type')}}">{{__('documents/list_documents.Screen')}}</a></li>
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
                <a href="{{route('add_document_type')}}">
                <button type="button" class="btn btn-block btn-primary">{{__('documents/list_documents.Add_Document')}}</button>
                </a>
              </h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" id="table_search" name="table_search" class="form-control float-right" placeholder="{{__('shared/shared.Search')}}">
                  <div class="input-group-append" id="clear_button_container">
                      <!-- Clear button will be dynamically added here -->
                  </div>
              </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>{{__('documents/list_documents.Documents_table.Document_Type')}}</th>
                  </tr>
                </thead>
                <tbody id="table_body">
                  <tr>
                    <td>شهادة تخرج ثانوية</td>
                    <td class="project-actions text-right">
                        {{-- <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a> --}}
                        <a class="btn btn-info btn-sm" href="{{route('edit_document_type')}}">
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
                  <tr>
                    <td>شهادة تخرج جامعية</td>
                    <td class="project-actions text-right">
                        {{-- <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a> --}}
                        <a class="btn btn-info btn-sm" href="{{route('edit_document_type')}}">
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
                  <tr>
                    <td>صور شخصية</td>
                    <td class="project-actions text-right">
                        {{-- <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a> --}}
                        <a class="btn btn-info btn-sm" href="{{route('edit_document_type')}}">
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
                  <tr>
                    <td>هوية شخصية</td>
                    <td class="project-actions text-right">
                        {{-- <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a> --}}
                        <a class="btn btn-info btn-sm" href="{{route('edit_document_type')}}">
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
    
