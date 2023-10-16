@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Love To Do</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.love-to-do.update', 1) }}" method="post" enctype='multipart/form-data'>
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label">Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="image_one" id="image-upload" />
                                        <input type="hidden" name="old_image_one" value="{{ @$loveToDo->image_one }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Title<code>  (leave empty for hide)</code></label>
                                <input type="text" class="form-control" name="title_one" value="{{ @$loveToDo->title_one }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label">Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview-2" class="image-preview preview-2">
                                        <label for="image-upload-2" id="image-label-2">Choose File</label>
                                        <input type="file" name="image_two" id="image-upload-2" />
                                        <input type="hidden" name="old_image_two" value="{{ @$loveToDo->image_two }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Title<code>  (leave empty for hide)</code></label>
                                <input type="text" class="form-control" name="title_two" value="{{ @$loveToDo->title_two }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label">Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview-3" class="image-preview preview-3">
                                        <label for="image-upload-3" id="image-label-3">Choose File</label>
                                        <input type="file" name="image_three" id="image-upload-3" />
                                        <input type="hidden" name="old_image_three" value="{{ @$loveToDo->image_three }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Title<code>  (leave empty for hide)</code></label>
                                <input type="text" class="form-control" name="title_three" value="{{ @$loveToDo->title_three }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label">Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview-4" class="image-preview preview-4">
                                        <label for="image-upload-4" id="image-label-4">Choose File</label>
                                        <input type="file" name="image_four" id="image-upload-4" />
                                        <input type="hidden" name="old_image_four" value="{{ @$loveToDo->image_four }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Title<code>  (leave empty for hide)</code></label>
                                <input type="text" class="form-control" name="title_four" value="{{ @$loveToDo->title_four }}">
                            </div>
                        </div>
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
                'background-image': 'url({{ asset(@$loveToDo->image_one) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })

            $('.preview-2').css({
                'background-image': 'url({{ asset(@$loveToDo->image_two) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })

            $('.preview-3').css({
                'background-image': 'url({{ asset(@$loveToDo->image_three) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })

            $('.preview-4').css({
                'background-image': 'url({{ asset(@$loveToDo->image_four) }})',
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

        $.uploadPreview({
            input_field: "#image-upload-2", // Default: .image-upload
            preview_box: "#image-preview-2", // Default: .image-preview
            label_field: "#image-label-2", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });

        $.uploadPreview({
            input_field: "#image-upload-3", // Default: .image-upload
            preview_box: "#image-preview-3", // Default: .image-preview
            label_field: "#image-label-3", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });

        $.uploadPreview({
            input_field: "#image-upload-4", // Default: .image-upload
            preview_box: "#image-preview-4", // Default: .image-preview
            label_field: "#image-label-4", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
    </script>
@endpush
