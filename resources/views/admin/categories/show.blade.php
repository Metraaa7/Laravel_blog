@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm- d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{$category->title}}</h1>
                        <a class="text-success" href="{{route('admin.category.edit', $category->id)}}"><i class="fas fa-pencil-alt"></i></a>
                        <form method="post" action="{{route('admin.category.delete', $category->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger" role="button"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active">Categories</li>
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
                    <div class="col-6">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{$category->id}}</td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td>{{$category->title}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
            <div class="col-1">
                <a href="{{route('admin.category.index')}}" class="btn btn-block btn-danger">Back</a>
            </div>
        </section>

        <!-- /.content -->
    </div>
@endsection