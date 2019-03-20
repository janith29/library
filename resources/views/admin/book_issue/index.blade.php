@extends('admin.layouts.admin')

@section('content')
    <div class="row title-section">
        <div class=".col-xs-12 .col-sm-6 .col-lg-8">
            @section('title', "Book issue Management ")
        </div>
        <div class=".col-xs-6 .col-lg-4 searchbar-addbt">
            <div class="topicbar">
                {{-- <a href="{{ route('admin.employees.add') }}" class="btn btn-primary">Add Employee</a> --}}
                {{ link_to_route('admin.book_issue.add', 'Add Book issue', null, ['class' => 'btn btn-primary']) }}
            </div>
            <div class="right-searchbar">
                <!-- Search form -->
                <form action="{{ route('admin.book_issue') }}" method="get" class="form-inline">
                    <div class="form-group">
                        <input class="form-control" type="text" name="key" placeholder="Search" aria-label="Search" value="{{isSet($key) ? $key : ''}}" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" style="margin-top: -10px;" type="submit">Search</button>
                    </div>
                    {{-- <i class="fa fa-search" aria-hidden="true"></i> --}}
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                width="100%">
            <thead> 
            <tr>
                <th>ID</th>
                <th>Member name</th>
                <th>Book name</th>
                <th>Get date</th>
                <th>Book issued day</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
               @foreach ($Book_issues as $Book_issue)
                    <tr>
                        <td>{{ $Book_issue->id }}</td>
                        <td>{{ $Book_issue->member_id }}</td>
                        <td>{{ $Book_issue->book_id }}</td>
                        <td>{{ $Book_issue->getdate }}</td>
                        <td>{{ $Book_issue->book_issued_day }}</td>
                        <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.book.show',[$Book_issue->id]) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-xs btn-info" href="{{  route('admin.book.edit',[$Book_issue->id]) }}">
                                        <i class="fas fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-xs btn-danger" href="{{ route('admin.book.delete',[$Book_issue->id]) }}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
        <div class="pull-right">
            {{-- {{ $users->links() }} --}}
        </div>
    </div>
@endsection

@section('styles')
    @parent
    {{ Html::style('assets/admin/css/my_style.css') }}
@endsection