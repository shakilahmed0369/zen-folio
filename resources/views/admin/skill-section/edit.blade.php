@extends('admin.layouts.master')

@section('contents')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
        <div class="card">
            <div class="card-body">
               <form action="{{ route('admin.skill-section.update', $skill->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Skill Name <code>*</code></label>
                    <input type="text" class="form-control" name="name" required value="{{ $skill->name }}">
                </div>
                <div class="form-group">
                    <label for="">Percent ( % ) <code>*</code></label>
                    <input type="text" class="form-control" name="percent" required value="{{ $skill->percent }}">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Update</button>
                </div>
               </form>
            </div>
        </div>
        </div>
  </section>
@endsection
