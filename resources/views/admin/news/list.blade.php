@extends('admin.layout.main')

@section('title','News')

@section('content')
<div class="page pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-4 px-xl-4">
    <div class="page-body pb-4 pb-xl-6" style="max-width: 100% !important">
        {!! responseMessage('news') !!}
        <div class="card mb-2 p-4 p-sm-5">
            <div class="card-head d-flex flex-wrap align-items-center justify-content-between mb-2 mb-sm-7">
                <div class="title title-color purple me-5 mb-4 mb-sm-0">News List</div>
                <div class="search-input input-group me-sm-5 mb-3 mb-sm-0 order-2 order-sm-1">
                    <button class="input-group-text transparent">
                        <svg class="icon icon-search">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                    <form action="{{ route('article') }}" method="get">
                        <input class="form-control input-small input-action rounded-2" type="text"
                            placeholder="Search product" name="search" value="{{ Request::get('search') }}">
                    </form>
                </div>
                <div class="nav row gx-4 ms-auto flex-nowrap d-flex mb-4 mb-sm-0 order-1 order-sm-2">
                    <a class="btn btn-xs btn-success px-2 py-1" href="{{ route('news.create') }}">Create</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="drafts tab-content">
                    <div class="tab-pane fade active show" id="tab-list" role="tabpanel">
                        <div class="row g-0">
                            <div class="sheet-table d-block d-md-table text-center">
                                <div class="border-bottom d-none d-md-table-row">
                                    <div class="d-table-cell pb-4 px-3 caption">#</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Title</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Views</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Likes</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Status</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Created By</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Created At</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Edit</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Delete</div>
                                </div>
                                @foreach ($news as $key => $val)
                                <div class="border-bottom sheet-row position-relative d-block d-md-table-row pb-4 mb-4">
                                    <div class="checkbox-cell sheet-cell d-none d-md-table-cell py-2 py-md-4 px-3">
                                        {{ ++$key }}
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        {{Str::limit($val->title,25,'...')}}
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        {{ $val->views }}
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        {{ $val->likes }}
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        @if ($val->status == 1)
                                        <div class="badge min green-light">Publish</div>
                                        @else
                                        <div class="badge min red-light">!! Draft !!</div>
                                        @endif
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        {{ $val->user->name }}
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        {{ Carbon\Carbon::parse($val->created_at)->format('d-m-Y H:i:s') }}
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <a href="{{ route('news.edit',$val->id) }}">
                                            <svg class="icon icon-edit">
                                                <use xlink:href="#icon-edit"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <a onclick="return confirm('are you sure want to delete?')"
                                            href="{{ route('news.destroy',$val->id) }}">
                                            <svg class="icon icon-trash">
                                                <use xlink:href="#icon-trash"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col-md-12">
                                    {{ $news->links('pagination::bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection