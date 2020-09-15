@extends('cms.layout.base')

@section('title')
Dashboard
@endsection

@push('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Contents</h3>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-nowrap selected-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>All</th>
                                <th>Show</th>
                                <th>Hide</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas['content'] as $key => $data)
                            <tr>
                                <td><a href="{{ $data['route'] }}">{{ $key }}</a></td>
                                <td>{{ $data['all'] }}</td>
                                <td>{{ $data['show'] }}</td>
                                <td>{{ $data['hide'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>History Inbox</h3>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-nowrap selected-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Inbox</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas['history_inbox'] as $idx => $data)
                            <tr>
                                <td>{{ (new Carbon\Carbon($data->created_at))->format('Y F') }}</td>
                                <td>{{ $data->count }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>History News</h3>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-nowrap selected-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>All</th>
                                <th>Show</th>
                                <th>Hide</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas['history_news'] as $idx => $data)
                            <tr>
                                <td>{{ (new Carbon\Carbon($data->created_at))->format('Y F') }}</td>
                                <td>{{ $data->all }}</td>
                                <td>{{ empty($data->show) ? 0 : $data->show }}</td>
                                <td>{{ empty($data->hide) ? 0 : $data->hide }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endpush