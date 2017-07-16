
 @extends('layouts.app')

 @section('title')
     Business Edit  | {{ config('app.name', 'Laravel') }} | Platform for comparing schools in Imo State
 @endsection

 @section('content')
     <div class="container">
         <div class="row">
             <div class="panel panel-default">
                 <div class="panel-heading text-center"> Update Details For Business Owners </div>
                 <div class="panel-body">
                     <form class="form-horizontal auth_form" role="form" method="POST" action="{{ route('update-business-details', Auth::user()->id) }}">
                         {{ csrf_field() }}
                         <div class="col-md-6">
                             <fieldset class="form-group{{ $errors->has('business_username') ? ' has-error' : '' }}">
                                 <label for="business_username" class="control-label"> Username</label>
                                 <input type="text" id="business_username" name="business_username" class="form-control" placeholder="Business Username" value="{{ old('business_username') }}">
                                 @if ($errors->has('business_username'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('business_username') }}</strong>
                                     </span>
                                 @endif
                             </fieldset>

                             <fieldset class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }}">
                                 <label for="business_name" class="control-label"> Business Name</label>
                                 <input type="text" id="business_name" name="business_name" class="form-control" placeholder="Your Business Name" value="{{ old('business_name') }}">
                                 @if ($errors->has('business_name'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('business_name') }}</strong>
                                     </span>
                                 @endif
                             </fieldset>

                             <fieldset class="form-group{{ $errors->has('business_location') ? ' has-error' : '' }}">
                                 <label for="business_location" class="control-label"> Business Location</label>
                                 <input type="text" id="business_location" name="business_location" class="form-control" placeholder="Your Business Location" value="{{ old('business_location') }}">
                                 @if ($errors->has('business_location'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('business_location') }}</strong>
                                     </span>
                                 @endif
                             </fieldset>

                             <fieldset class="form-group{{ $errors->has('business_phone') ? ' has-error' : '' }}">
                                 <label for="business_phone" class="control-label"> Business Phone Number </label>
                                 <input type="text" id="business_phone" name="business_phone" class="form-control" placeholder="Business Phone Number" value="{{ old('business_phone') }}">
                                 @if ($errors->has('business_phone'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('business_phone') }}</strong>
                                     </span>
                                 @endif
                             </fieldset>
                         </div>

                         <div class="col-md-6">
                             <fieldset class="form-group{{ $errors->has('product') ? ' has-error' : '' }}">
                                 <label for="product" class="control-label"> Your Product </label>
                                 <input type="text" id="product" name="product" class="form-control" placeholder="Your Product" value="{{ old('product') }}">
                                 @if ($errors->has('product'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('product') }}</strong>
                                     </span>
                                 @endif
                             </fieldset>

                             <fieldset id="comment_wrapper" class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                 <label for="comment" class="control-label"> Add Comment </label>
                                 <textarea class="form-control" name="comment" id="comment" cols="30" rows="5" placeholder="Post your comment here"></textarea>
                                 <span id="minimum_count" class="">Minimum of 150 characters</span>
                                 <span id="text_count" class="pull-right"></span>
                                 <div class="clear-fix"></div>
                                 @if ($errors->has('comment'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('comment') }}</strong>
                                     </span>
                                 @endif
                             </fieldset>

                             <fieldset id="avatar_section" class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                                 <label for="image_input_file" class="control-label">Upload Logo</label>
                                 <img src="" height="200" id="preview" alt="">
                                 <input name="avatar" type="file" id="image_input_file" class="form-control" onchange="previewImage()" accept="image/*">
                                 @if ($errors->has('avatar'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('avatar') }}</strong>
                                     </span>
                                 @endif
                             </fieldset>

                             <fieldset class="form-group">
                                 <div class="g-recaptcha" data-sitekey="6Le40SEUAAAAAP9scWszcbSrjeHYL7qUJAvDlgkI"></div>
                             </fieldset>
                         </div>
                         <div class="clearfix"></div>
                         <fieldset class="form-group">
                             <div class="">
                                 <button type="submit" class="btn btn-success auth_button">
                                     Update
                                 </button>
                             </div>
                         </fieldset>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection