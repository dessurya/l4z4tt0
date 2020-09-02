@extends('cms.layout.base')

@section('title')
{{ $config['page']['title'] }}
@endsection

@push('link')
@endpush

@push('script')
@include('cms.componen.dtables_script', ['config' => $config['dtables']])
@endpush

@push('script.documentreadyfunction')
@include('cms.componen.dtables_script_documentreadyfunction')
@endpush

@push('script.responsePostData')
@include('cms.componen.dtables_script_responsePostData')
@endpush

@push('content')
@include('cms.componen.tabs', ['config' => $config['page']['tabs']])
@endpush