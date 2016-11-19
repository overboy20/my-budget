@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Categories</div>

                <div class="panel-body">
                    @foreach ($categories as $category)
                        {{ $category->name }}<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">operations with categories</div>

                <div class="panel-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">Add new</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div id="addCategoryModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add category</h4>
            </div>
            {!! Form::open(array('url' => '/categories/add', 'method' => 'post')) !!}
                <div class="modal-body">
                        <input class="form-control" type="text" name="categoryName" placeholder="Category name"><br>
                        <select class="form-control" data-style="btn-primary">
                            @foreach ($categories as $category)
                            <option>
                            {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">
                        Add new
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
</div>
@endsection
