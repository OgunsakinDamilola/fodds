@extends('layouts.app')

@section('page-title') Dashboard @endsection

@section('title') Dashboard @endsection

@section('activeHome') active-sub @endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
            <strong>Well done!</strong>{{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Bootstrap theme</h3>
                </div>
                <div class="panel-body">

                    <!--Dropzonejs using Bootstrap theme-->
                    <!--===================================================-->
                    <p>Kindly upload the following documents here.</p>

                    {!! Form::open([ 'route' => ['dropzone.fileupload'], 'files' => true, 'class' => 'dropzone', 'id' => 'file-upload' ]) !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="panel">
            <div class="panel-heading">
                Uploaded Documents
            </div>
            <div class="panel-body">
                <div class="table-responsive">

                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/nifty.min.js')}}"></script>
    <script src="{{asset('plugins/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('js/demo/form-file-upload.js')}}"></script>
    <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize    : 10,
            acceptedFiles  : ".jpeg,.jpg,.png,.gif,.pdf,.docx,.doc,.txt,.xml",
            uploadMultiple: true,
            parallelUploads: 2,
            previewTemplate: document.querySelector('#preview').innerHTML,
            addRemoveLinks: true,
            dictRemoveFile: 'Remove file',
            dictFileTooBig: 'Image is larger than 16MB',
            timeout: 1000
        };
    </script>

@endsection
