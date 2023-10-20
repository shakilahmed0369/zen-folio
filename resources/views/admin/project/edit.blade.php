@extends('admin.layouts.master')

@section('contents')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
        <div class="card">
            <div class="card-body">
               <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label class="col-form-label">Thambnail</label>
                        <div class="col-sm-12 col-md-7">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="thumbnail" id="image-upload" />
                                <input type="hidden" name="old_thumbnail" value="{{ $project->thumbnail }}">
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                    <label for="">Name <code>*</code></label>
                    <input type="text" class="form-control" name="name" required value="{{ $project->name }}">
                </div>

                <div class="form-group">
                    <label for="">Short Description<code>*</code></label>
                    <textarea name="short_description" class="form-control">{!! $project->short_description !!}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Tags <code>*</code></label>
                    <input type="text" class="form-control inputtags" name="tags" required value="{{ $project->tags }}">
                </div>

                <div class="form-group">
                    <label for="">Git Link <code></code></label>
                    <input type="text" class="form-control" name="git_link" value="{{ $project->git_link }}">
                </div>

                <div class="form-group">
                    <label for="">Live Link <code></code></label>
                    <input type="text" class="form-control" name="live_link" value="{{ $project->live_link }}">
                </div>

                <div class="form-group">
                    <label for="">Status <code>*</code></label>
                    <select name="status" id="" class="form-control">
                        <option @selected($project->status === 1) value="1">Active</option>
                        <option @selected($project->status === 0) value="0">Inactive</option>
                    </select>
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

@push('scripts')
    <script>
        $(".inputtags").tagsinput('items');
        $(document).ready(function(){
            $('.image-preview').css({
                'background-image': 'url({{ asset(@$project->thumbnail) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })


        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
    </script>
@endpush
