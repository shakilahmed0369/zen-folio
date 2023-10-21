@extends('admin.layouts.master')

@section('contents')
<section class="section">
    <div class="section-header">
      <h1>Project Images</h1>
    </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.project-images.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Image <code>Multi Image Supported</code></label>
                        <input type="file" name="images[]" multiple class="form-control">
                        <input type="hidden" name="project_id" value="{{ request()->id }}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Upload</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $image)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td><img width="300" src="{{ asset($image->image) }}" alt=""></td>
                                <td><a class="btn btn-danger mx-2 delete-item" href="{{ route('admin.project-images.destroy', $image->id) }}"><i class="fas fa-trash text-light"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>

            </div>
        </div>


        </div>
  </section>
@endsection

