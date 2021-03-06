@extends('admin.layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Restaurant Facility</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Restaurant Facility
                            <small>sub title</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form action="{{ action('RestaurantFacilityController@update', $restaurant_facility->unique_id)  }}"
                              method="post" enctype="multipart/form-data" class="form-horizontal form-label-left"
                              novalidate>
                            @csrf
                            @method('PUT')

                            <p>For alternative validation library <code>parsleyJS</code> check out in the <a
                                        href="form.html">form page</a>
                            </p>
                            <span class="section">Restaurant Facility</span>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name/Slug <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12" name="name"
                                           value="{{ $restaurant_facility->name }}" required="required" type="text">
                                    @if($errors->has('name')) <span
                                            class="text-danger">{{ $errors->first('name') }}</span> @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Display Name <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="email" name="display_name"
                                           value="{{ $restaurant_facility->display_name }}" required="required"
                                           class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('display_name')) <span
                                            class="text-danger">{{ $errors->first('display_name') }}</span> @endif
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Avatar <span
                                            class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <img src="{{ $restaurant_facility->avatar ? asset(config('appconfig.imagePath') . $restaurant_facility->avatar) : asset('image/avatar.png') }}"
                                         alt="Type Image" width="80px;">

                                    <br><br>

                                    <input type="file" id="photo" name="avatar" class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('avatar')) <span
                                            class="text-danger">{{ $errors->first('avatar') }}</span> @endif
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="active">

                                        <input type="radio" class="flat" id="active" name="status" value="1"
                                               class="form-control col-md-7 col-xs-12"
                                               required="required" {{ $restaurant_facility->status == 1 ? 'checked' : '' }}>
                                        Active

                                    </label>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inactive">

                                        <input type="radio" class="flat" id="inactive" name="status" value="0"
                                               class="form-control col-md-7 col-xs-12"
                                               required="required" {{ $restaurant_facility->status == 0 ? 'checked' : '' }}>
                                        Inactive

                                    </label>
                                    @if($errors->has('status')) <span
                                            class="text-danger">{{ $errors->first('status') }}</span> @endif

                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection