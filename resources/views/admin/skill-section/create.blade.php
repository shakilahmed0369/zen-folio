@extends('admin.layouts.master')

@section('contents')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
        <div class="card">
            <div class="card-body">
               <form action="{{ route('admin.skill-section.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Skill Name <code>*</code></label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="">Percent ( % ) <code>*</code></label>
                    <input type="text" class="form-control" name="percent" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Create</button>
                </div>
               </form>
            </div>
        </div>
        </div>
  </section>
@endsection

@push('scripts')
    <script>
        $(".inputtags").tagsinput('items');
    </script>
@endpush
