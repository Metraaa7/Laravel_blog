@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Adding</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active">Adding</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="{{route('admin.post.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Post title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter title"
                                    value="{{old('title')}}"
                                    >
                                    @error('title')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="summernote"></label>
                                    <textarea id="summernote" name="content" >
                                        {{old('content')}}
                                    </textarea>
                                </div>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_image">
                                                <label class="custom-file-label" for="exampleInputFile">Add a blog preview</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="main_image">
                                                <label class="custom-file-label" for="exampleInputFile">Add a main image</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Select the category</label>
                                    <label>
                                        <select name="category_id" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"
                                                {{$category->id == old('category_id') ? 'selected' : ''}}
                                                >{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Select Tags
                                        <select multiple="multiple" class="form-control" name="tag_idx[]">
                                            @foreach($tags as $tag)
                                                <option value="{{$tag->id}}"
                                                {{is_array(old('tag_idx')) && in_array($tag->id, old('tag_idx')) ? 'selected' : ''}}
                                                >{{$tag->title}}</option>
                                            @endforeach
                                        </select>
                                    </label>

                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer d-flex justify-content-lg-start">
                                <input type="submit" class="btn btn-dark mr-2" value="Add"/>
                                <div>
                                    <a href="{{route('admin.post.index')}}" class="btn btn-block btn-danger">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection