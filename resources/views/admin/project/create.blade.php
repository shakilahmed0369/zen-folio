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
                        <label class="col-form-label">Thambnail</label>
                        <div class="col-sm-12 col-md-7">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="image_one" id="image-upload" />
                                <input type="hidden" name="old_image_one" value="{{ @$loveToDo->image_one }}">
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                    <label for="">Short Discription<code>*</code></label>
                    <textarea name="short_discription" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Tags <code>*</code></label>
                    <input type="text" class="form-control inputtags" name="tags" required>
                </div>

                <div class="form-group">
                    <label for="">Git Link <code></code></label>
                    <input type="text" class="form-control" name="git_link" required>
                </div>

                <div class="form-group">
                    <label for="">Live Link <code></code></label>
                    <input type="text" class="form-control" name="live_link" required>
                </div>

                <div class="form-group">
                    <label for="">Status <code>*</code></label>
                    <select name="status" id="" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
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
