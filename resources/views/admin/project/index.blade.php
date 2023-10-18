@extends('admin.layouts.master')

@section('contents')
<section class="section">
    <div class="section-header">
      <h1>Project</h1>
    </div>
    <div class="my-4 text-right">
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create</a>
    </div>
        <div class="card">
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
        </div>
  </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
