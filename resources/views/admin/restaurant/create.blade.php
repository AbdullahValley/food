@extends('admin.layouts.master')

@section('content')
     <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Restaurant</h3>
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
                            <h2>Restaurant <small>sub title</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

                            <form action="{{ action('RestaurantController@store') }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
                                @csrf

                                <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                </p>
                                <span class="section">Restaurant</span>



                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Restaurant Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-7 col-xs-12" name="name" type="text">
                                        @if($errors->has('name')) <span class="text-danger">{{ $errors->first('name') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Display Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-7 col-xs-12" name="display_name" required="required" type="text">
                                        @if($errors->has('display_name')) <span class="text-danger">{{ $errors->first('display_name') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Details <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" required="required" name="details" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Restaurant Email
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" name="email" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('email')) <span class="text-danger">{{ $errors->first('email') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Restaurant Phone
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="tel" id="telephone" name="phone" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('phone')) <span class="text-danger">{{ $errors->first('phone') }}</span> @endif
                                    </div>
                                </div>


                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Restaurant Facilities <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="checkbox" name="facilities" class="form-control col-md-7 col-xs-12 flat">
                                        <input type="checkbox" name="facilities" class="form-control col-md-7 col-xs-12 flat">

                                        @if($errors->has('facilities')) <span class="text-danger">{{ $errors->first('facilities') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Restaurant Capacity <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="capacity" required="required"  class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('capacity')) <span class="text-danger">{{ $errors->first('capacity') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="open">Restaurant Open Time
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="time" name="open" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('open')) <span class="text-danger">{{ $errors->first('open') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="close">Restaurant Close Time
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="time" name="close" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('close')) <span class="text-danger">{{ $errors->first('close') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Pros
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" name="pros" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Cons
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" name="cons" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Our Opinion
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" name="our_opinion" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Types
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="checkbox" name="types" class="form-control col-md-7 col-xs-12 flat">
                                        <input type="checkbox" name="types" class="form-control col-md-7 col-xs-12 flat">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Categories
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="checkbox" name="categories" class="form-control col-md-7 col-xs-12 flat">
                                        <input type="checkbox" name="categories" class="form-control col-md-7 col-xs-12 flat">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Food Groups
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="checkbox" name="food_groups" class="form-control col-md-7 col-xs-12 flat">
                                        <input type="checkbox" name="food_groups" class="form-control col-md-7 col-xs-12 flat">
                                    </div>
                                </div>

                                 <div class="item form-group">
                                   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="same">City
                                   </label>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                       <select id="same" class="form-control" name="city" required>
                                           <option value="">Select City</option>
                                           @foreach($cities as $city)
                                               <option value="{{ $city->id }}">{{ $city->display_name }}</option>
                                           @endforeach
                                       </select>
                                       @if($errors->has('city')) <span class="text-danger">{{ $errors->first('city') }}</span> @endif
                                   </div>
                                 </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="same1">Location
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="same1" class="form-control" name="location" required>
                                            <option value="">Select Location</option>
                                            @foreach($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->display_name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('location')) <span class="text-danger">{{ $errors->first('location') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="same2">Sub Location
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="same2" class="form-control" name="sub_location" required>
                                            <option value="">Select Sub Location</option>
                                            @foreach($sub_locations as $sub_location)
                                                <option value="{{ $sub_location->id }}">{{ $sub_location->display_name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('sub_location')) <span class="text-danger">{{ $errors->first('sub_location') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="same3">Food Court
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="same3" class="form-control" name="food_court" required>
                                            <option value="">Select Food Court</option>
                                            @foreach($food_courts as $food_court)
                                                <option value="{{ $food_court->id }}">{{ $food_court->display_name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('food_court')) <span class="text-danger">{{ $errors->first('food_court') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Competitors
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="competitors" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('competitors')) <span class="text-danger">{{ $errors->first('competitors') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Photo <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" name="photo" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('photo')) <span class="text-danger">{{ $errors->first('photo') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Video
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" name="video" class="form-control col-md-7 col-xs-12" placeholder="Youtube Embed Code or URL"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Ratings
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="rating" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has('rating')) <span class="text-danger">{{ $errors->first('rating') }}</span> @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Featured
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="checkbox" name="featured" class="form-control col-md-7 col-xs-12 flat">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="active">

                                                <input type="radio" class="flat" id="active" name="status" value="1" class="form-control col-md-7 col-xs-12" required="required" {{ old('status') == 1 ? 'checked' : '' }}> Active

                                            </label>

                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inactive">

                                                <input type="radio" class="flat" id="inactive" name="status" value="0" class="form-control col-md-7 col-xs-12" required="required" {{ old('status') == 0 ? 'checked' : '' }}> Inactive

                                            </label>
                                        @if($errors->has('status')) <span class="text-danger">{{ $errors->first('status') }}</span> @endif

                                    </div>
                                </div>



                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection