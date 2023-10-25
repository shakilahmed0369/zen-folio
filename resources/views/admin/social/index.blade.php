@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Love To Do</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.socials.update', 1) }}" method="post" enctype='multipart/form-data'>
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="">Facebook<code>  (leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="facebook" value="{{ @$social->facebook }}">
                    </div>
                    <div class="form-group">
                        <label for="">Linkedin<code>  (leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="linkedin" value="{{ @$social->linkedin}}">
                    </div>

                    <div class="form-group">
                        <label for="">X <code>  (leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="x" value="{{ @$social->x}}">
                    </div>

                    <div class="form-group">
                        <label for="">Git Hub <code>  (leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="github" value="{{ @$social->github}}">
                    </div>

                    <div class="form-group">
                        <label for="">Stackoverflow<code>  (leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="stackoverflow" value="{{ @$social->stackoverflow}}">
                    </div>

                    <div class="form-group">
                        <label for="">Leecode<code>  (leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="leecode" value="{{ @$social->leecode}}">
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
