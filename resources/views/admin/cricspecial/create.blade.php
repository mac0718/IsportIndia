@extends('admin.layout.main')

@section('title','CricSpecial Create')

@section('heads')

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section('content')
<div class="page pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-4 px-xl-4">
    <div class="page-body pb-4 pb-xl-6" style="max-width: 100% !important">
        <div class="row g-0">
            <div class="col-lg-12 col-12 pe-lg-2">
                <div class="card mb-2 p-4 p-sm-5">
                    <div class="card-head d-flex align-items-center justify-content-between mb-5 mb-sm-6">
                        <div class="title title-color green">Create CricSpecial</div><a class="btn-stroke btn-small"
                            href="{{route('cricspecial')}}">
                            <svg class="icon icon-arrow-left me-1">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg><span>Back</span></a>
                    </div>

                    <form action="{{ route('cricspecial.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body p-0">

                            <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Title
                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip" title="Maximum 255 characters">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            @error('title')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                            <input class="form-control mb-5 mb-sm-6" type="text" name="title"
                                value="{{ old('title') }}">

                            <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Short Description
                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                    title="Write short description of this blog">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            @error('short_description')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                            <textarea class="form-control mb-5 mb-sm-6" name="short_description" rows="3"
                                cols="10">{{ old('short_description') }}</textarea>

                            <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Description
                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                    title="Write in details description of this blog">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            @error('description')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                            <textarea id="description" name="description" rows="10"
                                cols="80">{{ old('description') }}</textarea>

                            <br>
                            <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Article Image
                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip" title="Image">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            @error('img')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                            <input class="form-control mb-3 mb-sm-6" type="file" name="img">

                            <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Article Read Min
                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                    title="add number of min to read this article">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            @error('min')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                            <input class="form-control mb-3" type="text" name="min" value="{{ old('min') }}">

                            <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Tag
                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip" title="Add Tags">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            @error('tag')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                            <input class="form-control mb-3" type="text" name="tag" value="{{ old('tag') }}">


                            <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Status
                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip" title="Status">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            @error('status')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                            <select class="select select-wide" name="status">
                                <option {{ old('stauts')==1 ? 'selected' : '' }} selected value="1">Publish</option>
                                <option {{ old('stauts')==2 ? 'selected' : '' }} value="2">Save Draft</option>
                            </select>

                            <div class="w-100 text-center">
                                <button class="btn mt-3 ">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="page-footer p-4 p-sm-5 px-xl-7 mx-n4 mx-sm-n5 mx-xl-n7 mt-auto">
        <div class="container p-0 d-block d-sm-flex">
            <div class="d-flex align-items-center mb-4 mb-sm-0">
                <svg class="icon icon-check-all fill-shades-2 me-3">
                    <use xlink:href="#icon-check-all"></use>
                </svg><span class="caption pe-1">Last saved</span><span class="caption text-reset">Oct 4, 2021 -
                    23:32</span>
            </div>
            <div class="d-flex ms-auto">
                <button class="btn-stroke flex-grow-1">Save Draft</button>
                <button class="btn ms-2 flex-grow-1">Publish now</button>
                <div class="action-item ms-2">
                    <button class="action-head btn-stroke p-3">
                        <svg class="icon icon-more-vertical">
                            <use xlink:href="#icon-more-vertical"></use>
                        </svg>
                    </button>
                    <div class="action-body top p-3">
                        <button class="action-item d-block d-lg-none" data-bs-toggle="modal"
                            data-bs-target="#modal-preview">
                            <svg class="icon icon-expand">
                                <use xlink:href="#icon-expand"></use>
                            </svg>Preview
                        </button>
                        <button class="action-item" data-bs-toggle="modal" data-bs-target="#modal-datepicker">
                            <svg class="icon icon-calendar">
                                <use xlink:href="#icon-calendar"></use>
                            </svg>Schedule product
                        </button>
                        <button class="action-item">
                            <svg class="icon icon-link">
                                <use xlink:href="#icon-link"></use>
                            </svg>Get shareable link
                        </button>
                        <button class="action-item">
                            <svg class="icon icon-close">
                                <use xlink:href="#icon-close"></use>
                            </svg>Clear data
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection


