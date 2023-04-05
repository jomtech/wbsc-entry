@extends('layouts.app')

@section('content')
    <div class="container">
        @include('flash::message')
        <div class="row">
            @isset($count)
                <h2>スカウトコース申込状況</h2>
                <table class="uk-table uk-table-divider uk-table-striped">
                    <tr>
                        <th>期数</th>
                        <th>人数</th>
                        <th>一覧DL</th>
                        <th>申込書DL</th>
                        <th>課題DL</th>
                    </tr>
                    @foreach ($count as $val)
                        <tr>
                            <td><a href="{{ url('admin/admin_entryInfos?q=' . $val->sc_number) }}">SC{{ $val->sc_number }}</a>
                            </td>
                            <td>{{ $val->count_sc_number }}名</td>
                            <td><a href="#" class="uk-button uk-button-primary"><span uk-icon="download"></span>Excel</a>
                            </td>
                            <td><a href="{{ url('/admin/multi_pdf?q=') . $val->sc_number . '&assignment=false' }}"
                                    class="uk-button uk-button-primary"
                                    onclick="return confirm('申込書を一括ダウンロードします。時間がかかるので連打しないでください')"><span
                                        uk-icon="download"></span>一括DL</a></td>
                            <td><a href="{{ url('/admin/multi_pdf?q=') . $val->sc_number . '&assignment=true' }}"
                                    class="uk-button uk-button-primary"><span uk-icon="download"></span>一括DL</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                <h2>課程別研修申込状況</h2>
                <table class="uk-table uk-table-divider uk-table-striped">
                    <tr>
                        <th>回数</th>
                        <th>人数</th>
                        <th>一覧DL</th>
                        <th>申込書DL</th>
                        <th>課題DL</th>
                    </tr>
                    @foreach ($div_count as $val)
                        <tr>
                            <td><a
                                    href="{{ url('admin/admin_entryInfos?div=' . $val->division_number) }}">{{ $val->division_number }}</a>
                            </td>
                            <td>{{ $val->count_division_number }}</td>
                            <td><a href="#" class="uk-button uk-button-primary"><span uk-icon="download"></span>Excel</a>
                            </td>
                            <td><a href="#" class="uk-button uk-button-primary"><span uk-icon="download"></span>一括DL</a>
                            </td>
                            <td><a href="#" class="uk-button uk-button-primary"><span uk-icon="download"></span>一括DL</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endisset
        </div>
    </div>
@endsection
