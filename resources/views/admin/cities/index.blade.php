@extends('admin.layouts.app')

@section('title', "Cities")

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Cities
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                            <tr>
                                <th class="w-1">id</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Country Code</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($cities as $city)
                                <tr>
                                    <td><span class="text-muted">{{ $city->id }}</span></td>
                                    <td>
                                        {{ $city->name }}
                                    </td>
                                    <td>
                                        {{ $city->country->name }}
                                    </td>
                                    <td>
                                        {{ $city->country_code }}
                                    </td>
                                </tr>
                            @empty
                                No Data !
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex align-items-center">
                        <ul class="pagination m-0 ms-auto">
                            {!! $cities->links() !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
