@extends('layouts.dashboard.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">

            <h1>
         @lang('site.users')
            </h1>
            <ol class="breadcrumb">

                <li> <a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a> </li>
                <li> <a href="{{route('dashboard.users.index')}}"> @lang('site.users')</a></li>
                <li class="active"> @lang('site.add')</li>


            </ol>
        </section><!--end section content-header-->

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> @lang('site.add')</h3>
                </div>
                <div class="box-body">

                    @include('partials._errors')

                    <form action=" {{route('dashboard.users.store')}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        <div class="form-group">

                            <lable> @lang('site.first_name')</lable>
                            <input type="text" name="first_name" class="form-control" vlaue="{{old('first_name')}}" >

                        </div>

                        <div class="form-group">
                            <lable> @lang('site.last_name')</lable>
                            <input type="text" name="last_name" class="form-control" vlaue="{{old('last_name')}}" >

                        </div>

                        <div class="form-group">
                            <lable> @lang('site.email')</lable>
                            <input type="email" name="email" class="form-control" vlaue="{{old('email')}}" >

                        </div>

                        <div class="form-group">
                            <lable> @lang('site.password')</lable>
                            <input type="password" name="password" class="form-control" >

                        </div>

                        <div class="form-group">
                            <lable> @lang('site.password_confirmation')</lable>
                            <input type="password" name="password_confirmation" class="form-control"  >

                        </div>

                        <div class="form-group">
                          <button type="submit" class="btn btn-primary"><i class="fa fa-plus"> @lang('site.add')</i> </button>
                        </div>

                    </form>
                </div>
            </div>
        </section>


    </div> <!-- end content wrapper>
@endsection
