@extends('admin.layouts.master')

@section('contents')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
        <div class="card">
            <div class="card-body">
               <form action="{{ route('admin.hero-section.update', 1) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Title <code>*</code></label>
                    <input type="text" class="form-control" name="title" value="{{ @$hero->title }}" required>
                </div>
                <div class="form-group">
                    <label for="">Name <code>*</code></label>
                    <input type="text" class="form-control" name="name" value="{{ @$hero->name }}" required>
                </div>
                <div class="form-group">
                    <label for="">Stack <code>*</code></label>
                    <input type="text" class="form-control" name="stack" value="{{ @$hero->stack }}" required>
                </div>
                <div class="form-group">
                    <label>Tags</label>
                    <input type="text" class="form-control inputtags" name="tags" value="{{ @$hero->tags }}" required>
                  </div>
                <div class="form-group">
                    <button class="btn btn-primary">Save</button>
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
