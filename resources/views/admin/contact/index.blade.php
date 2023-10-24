@extends('admin.layouts.master')

@section('contents')
<section class="section">
    <div class="section-header">
      <h1>Contact</h1>
    </div>
        <div class="card">
            <div class="card-body">
               <form action="{{ route('admin.contact.update', 1) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Email<code>*</code></label>
                    <input type="text" class="form-control" name="email" required value="{{ $contact->email }}">
                </div>
                <div class="form-group">
                    <label for="">Social<code>*</code></label>
                    <input type="text" class="form-control" name="social" required value="{{ $contact->social }}">
                </div>

                <div class="form-group">
                    <label for="">Address<code>*</code></label>
                    <input type="text" class="form-control" name="address" required value="{{ $contact->address }}">
                </div>

                <div class="form-group">
                    <label for="">About<code>*</code></label>
                    <textarea name="about" class="form-control">{{ $contact->about }}</textarea>
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
