@extends('admin.layouts.app')

@section('title', "Countries")

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Countries
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
                        <th>Capital</th>
                        <th>Currency</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($countries as $country)
                        <tr>
                            <td><span class="text-muted">{{ $country->id }}</span></td>
                            <td>
                                {{ $country->name }}
                            </td>
                            <td>
                                {{ $country->capital }}
                            </td>
                            <td>
                                {{ $country->currency }}
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
                    {!! $countries->links() !!}
                </ul>
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection
