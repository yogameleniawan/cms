<div class="table-responsive">
            <div class="row">
                <div class="col-lg-10 margin-tb">
                    <div class="pull-right" style="padding-bottom:20px">
                        <a class="btn btn-success" href="{{ route('articles.create') }}"> Create New Article</a>
                    </div>
                </div>
                <div class="col-lg-2 margin-tb">
                    <div class="pull-right" style="padding-bottom:20px">
                        <a class="btn btn-success" href="{{ URL::to('pdf') }}" target="_blank">Preview PDF</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length"
                                    aria-controls="dataTable"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                    class="form-control form-control-sm" placeholder=""
                                    aria-controls="dataTable"></label></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                            width="100%">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Featured Image</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($article as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->title }}</td>
                                <td>{{ $a->content }}</td>
                                <td>{{ $a->featured_image }}</td>
                                <td>
                                    <form action="{{ route('articles.destroy',$a->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('articles.show',$a->id) }}">Show</a>

                                        <a class="btn btn-primary" href="{{ route('articles.edit',$a->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
            {{ $article->links() }}
        </div>