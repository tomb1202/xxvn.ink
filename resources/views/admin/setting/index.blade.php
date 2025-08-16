@extends('admin.layouts.master')
@section('title')
    <title>General Settings</title>
@endsection
@section('content')
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class=""><a href="{{ route('admin.settings.index') }}">General Settings</a></li>
        </ol>
        <ul class="right-button">
            <li><a class="btn btn-block btn-success text-bold" id="submit"><i class="fa fa-save mr-1"
                        aria-hidden="true"></i> SAVE</a></li>
        </ul>
        <div class="clearfix"></div>
    </section>
    <section class="content">
        <form action="{{ route('admin.settings.store') }}" method="POST" id="formData" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-info" style="padding-right: 7px;"></i></h3>General Information
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group clearfix">
                                        <label class="control-label">Title: <strong class="red">*</strong></label>
                                        @if (!empty($arrSettings) && isset($arrSettings['title']))
                                            <input type="text" required name="title"
                                                value="{{ !empty($arrSettings) ? $arrSettings['title'] : '' }}">
                                        @else
                                            <input type="text" required name="title" value="">
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group clearfix">
                                        <label class="control-label">Site Name: <strong class="red">*</strong></label>
                                        @if (!empty($arrSettings) && isset($arrSettings['site_name']))
                                            <input type="text" required name="site_name"
                                                value="{{ !empty($arrSettings) ? $arrSettings['site_name'] : '' }}">
                                        @else
                                            <input type="text" required name="site_name" value="">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group clearfix">
                                        <label class="control-label">Version: <strong class="red">*</strong></label>
                                        @if (!empty($arrSettings) && isset($arrSettings['version']))
                                            <input type="text" required name="version"
                                                value="{{ !empty($arrSettings) ? $arrSettings['version'] : '1.2' }}">
                                        @else
                                            <input type="text" required name="version" value="1.2">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group clearfix">
                                        <label class="control-label">Them color: <strong class="red">*</strong></label>
                                        @if (!empty($arrSettings) && isset($arrSettings['theme_color']))
                                            <input type="text" required name="theme_color"
                                                value="{{ !empty($arrSettings) ? $arrSettings['theme_color'] : '#b5114c' }}">
                                        @else
                                            <input type="text" required name="theme_color" value="#b5114c">
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="control-label">Description: <strong class="red">*</strong></label>
                                @if (!empty($arrSettings) && isset($arrSettings['description']))
                                    <textarea required name="description" id="description">{!! !empty($arrSettings) ? $arrSettings['description'] : '' !!}</textarea>
                                @else
                                    <textarea required name="description" id="description"></textarea>
                                @endif
                            </div>

                            <div class="form-group clearfix">
                                <label class="control-label">Footer Introduction: <strong class="red">*</strong></label>
                                @if (!empty($arrSettings) && isset($arrSettings['introduct_footer']))
                                    <textarea required name="introduct_footer" id="introduct_footer">{!! !empty($arrSettings) ? $arrSettings['introduct_footer'] : '' !!}</textarea>
                                @else
                                    <textarea required name="introduct_footer" id="introduct_footer"></textarea>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group clearfix">
                                        <label class="control-label">Google Analytics:</label>
                                        @if (!empty($arrSettings) && isset($arrSettings['google_analytics']))
                                            <input type="text" name="google_analytics"
                                                value="{{ !empty($arrSettings) ? $arrSettings['google_analytics'] : '' }}">
                                        @else
                                            <input type="text" name="google_analytics" value="">
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group clearfix">
                                        <label class="control-label">Google Console: </label>
                                        @if (!empty($arrSettings) && isset($arrSettings['google_console']))
                                            <input type="text"  name="google_console"
                                                value="{{ !empty($arrSettings) ? $arrSettings['google_console'] : '' }}">
                                        @else
                                            <input type="text"  name="google_console" value="">
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group clearfix">
                                        <label class="control-label">Google Site Verification: </label>
                                        @if (!empty($arrSettings) && isset($arrSettings['google_site_verification']))
                                            <input type="text"  name="google_site_verification"
                                                value="{{ !empty($arrSettings) ? $arrSettings['google_site_verification'] : '' }}">
                                        @else
                                            <input type="text"  name="google_site_verification" value="">
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group clearfix">
                                        <label class="control-label">Logo: <strong class="red">*</strong></label>
                                        <div class="box-body post-image" style="padding: 0px">
                                            <div id="image-preview">
                                                <label for="image-upload" id="image-label" style="height: 200px;">
                                                    <p>Change</p>
                                                    @if (!empty($arrSettings) && isset($arrSettings['logo']))
                                                        <img src="{{sourceSetting($arrSettings['logo'])}}" alt="" id="img-review" class="thumbnail"
                                                            onerror="this.onerror=null;this.src='/system/img/no-image.png';">
                                                    @else
                                                        <img src="/system/img/no-image.png" id="img-review" class="thumbnail">
                                                    @endif
                                                </label>
                                                <input type="file" name="logo" id="image-upload">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group clearfix">
                                        <label class="control-label">Favicon: <strong class="red">*</strong></label>
                                        <div class="box-body post-image" style="padding: 0px">
                                            <div id="image-preview">
                                                <label for="image-upload-favicon" id="image-label" style="height: 200px;">
                                                    <p>Change</p>
                                                    @if (!empty($arrSettings) && isset($arrSettings['favicon']))
                                                        <img src="{{sourceSetting($arrSettings['favicon'])}}" alt="" id="img-review-favicon" class="thumbnail"
                                                            onerror="this.onerror=null;this.src='/system/img/no-image.png';">
                                                    @else
                                                        <img src="/system/img/no-image.png" id="img-review-favicon" class="thumbnail">
                                                    @endif
                                                </label>
                                                <input type="file" name="favicon" id="image-upload-favicon">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="hide"></button>
            {{ csrf_field() }}
        </form>
    </section>
    <script>
        $(document).ready(function() {

            $('#submit').click(function() {
                $('form').find('[type="submit"]').trigger('click');
            })
        });

        //logo
        function readURL(input, review) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(review).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image-upload").change(function(e) {
            readURL(this, '#img-review');
        });

        //favicon

        $("#image-upload-favicon").change(function(e) {
            readURL(this, '#img-review-favicon');
        });

    </script>
@endsection
