@extends('master.app')
@section('content')
    <div class='view-directory course-directory gray-layout'>
      <div class='container'>
        <div class='row search'>
            <div class='pull-left course-filter'>
               <div class="filter-label">
                    @lang('message.course')
               </div>
               <div class="btn-group">
                {!! Form::button(trans('message.all_btn'), ['class' => 'btn btn-default btn-lg btn-course-filter dropdown-toggle' , 'data-toggle' => 'dropdown', 'aria-expanded' => 'false']) !!}
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">@lang('message.all_btn')</a></li>
                        <li><a href="#">@lang('message.course_name')</a></li>
                    </ul>
               </div>
            </div>
            <div class='pull-left course-filter'>
               <div class="filter-label">
                    @lang('message.member'):
               </div>
               <div class="btn-group">
                {!! Form::button(trans('message.all_btn'), ['class' => 'btn btn-default btn-lg btn-course-filter dropdown-toggle' , 'data-toggle' => 'dropdown', 'aria-expanded' => 'false']) !!}
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">@lang('message.all_btn')</a></li>
                        <li><a href="#">@lang('message.course_name')</a></li>
                    </ul>
                </div>
            </div>
            <div class='col-lg-4 col-md-4 col-xs-12 pull-right'>
                {!! Form::open() !!}
                    <div class="input-group">
                        {!! Form::label('search-courses', trans('message.search_course_member'), ['class' => 'sr-only']) !!}
                        {!! Form::text('query', trans('message.empty'), ['class' => 'form-control search input-lg', 'data-list' => '.list', 'placeholder' => 'Search courses, member']) !!}
                        <span class="input-group-btn">
                            {!! Form::label('search-course-button', trans('message.search_course'), ['class' => 'sr-only']) !!}
                            {!! Form::button('<i class="fa fa-search"></i>', ['class' => 'btn search btn-default btn-lg'])!!}
                        </span>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
            <div class='row course-list list'>
                <div class='col-xs-12 col-sm-4 col-md-3'>
                    <div class='course-listing' >
                        <div class='row'>
                            <div class='col-lg-12'>
                                <div class='course-listing-title'>
                                </div>
                                <div class='col-xs-12 hidden'>
                                    <div class='progressbar'>
                                        <div class='progressbar-fill'>
                                        </div>
                                    </div>
                                </div>
                                <div class='course-listing-subtitle'>
                                </div>
                                <div class="text-center">
                                    {!! Form::button (trans('message.search_course'), ['class' => 'btn btn-primary btn-md']) !!}
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
