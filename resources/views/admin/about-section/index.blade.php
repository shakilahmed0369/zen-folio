@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.about-section.update', 1) }}" method="post" enctype='multipart/form-data'>
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="col-form-label">Thumbnail</label>
                        <div class="col-sm-12 col-md-7">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="image" id="image-upload" />
                                <input type="hidden" name="old_image" value="{{ @$about->image }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">About Your Self<code>*</code></label>
                        <textarea name="about" class="form-control summernote">{!! @$about->about !!}</textarea>
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
        $(document).ready(function(){
            $('.image-preview').css({
                'background-image': 'url({{ asset(@$about->image) }})',
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
