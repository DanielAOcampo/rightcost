@extends('layouts.back')


@section('section-top')
<div class="nav navbar-left">
    <a href="{{ URL::to('/') }}"><span class="fa fa-th"></span>View your Website</a>
</div>
@stop

<div class="navbar-top-bottom">
    <h1 class="page-title">
        <span>Dasboard</span>
    </h1>
</div>

@section('content')

    <div class="section section--top">
        <div class="section-left">
          <ul class="action-list">
            <li>
              <a href="#" class="btn btn-success">
                <i class="fa fa-plus"></i>
                <span>Add New</span>
              </a>
            </li>
            <li>
              <a  href="#" class="delete-post btn btn-default">
                <i class="fa fa-trash-o"></i>
                <span>Delete</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="section-right">
          <ul class="action-list">
            <li>
              <div class="selectpicker-sm">
              </div>
            </li>
          </ul>
        </div>
    </div>
    <div class="section section--top">
        <div class="section-left">
          <ul class="action-list">
            <li>
              <a href="#" class="btn btn-success">
                <i class="fa fa-plus"></i>
                <span>Add New</span>
              </a>
            </li>
            <li>
              <a  href="#" class="delete-post btn btn-default">
                <i class="fa fa-trash-o"></i>
                <span>Delete</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="section-right">
          <ul class="action-list">
            <li>
              <div class="selectpicker-sm">
              </div>
            </li>
          </ul>
        </div>
    </div>

    <div class="section section--box">
        <div class="panel">
            <div class="panel__heading">
                <h1 class="h4">Site Settings</h1>
            </div>
            <div class="panel__sub_content">
                <div class="row">
                    <div class="col-lg-7">

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop