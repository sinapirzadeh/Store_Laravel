@extends('admin.master-admin')
@section('title', 'مدیریت پیام های')
@section('main')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">مدیریت پیام های</h3>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>کاربر</th>
                                <th>موضوع</th>
                                {{-- <th>وضعیت</th> --}}
                                <th>تاریخ</th>
                                <th>دستورات</th>
                            </tr>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->name }}</td>
                                    <td>{{ $comment->subject }}</td>
                                    <td>{{ $comment->created_at->fomated('Y/M/D') }}</td>
                                    {{--    if you can write staus code, jast send me a message - :)   --}}
                                    {{-- <td><span class="label label-primary">{{ $comment->status }}</span></td> --}}
                                    <td>
                                        <div class="btn-group">
                                            <form action=" admin/products_comment/{{ $comment->comment_id }}" method="get">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-danger">حذف</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
