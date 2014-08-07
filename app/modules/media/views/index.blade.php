@extends('layouts.back')

@section('section-top')
<div class="nav navbar-left">
    <a href="{{ URL::to('/') }}"><span class="fa fa-th"></span>View your Website</a>
</div>

@stop
@section('content')

  <div class="section--top">
    <div class="page-title">
        <h3 class="pull-left"> <span class="fa fa-photo"></span> Media </h3>
    </div>
    
    <div class="pull-right">
        {{ $lists->search_box() }}
    </div>
    <ul class="action-list">
        <li><a  href="{{ URL::to('admin/media/create') }}" class=" btn btn-default">
            <i class="fa fa-plus"></i>
            <span>Add New</span>
          </a>
        </li>
        <li>
        <a onclick="cskAdmin.BootrstrapAlert.xdelete('admin/media/delete', 'Group buy');return false;" class="delete-post btn btn-default">
            <i class="fa fa-trash-o"></i>
            <span>Delete</span>
          </a>
        </li>
        <li class="pull-right">
          {{ $lists->records_per_page() }}
        </li>
    </ul>

  </div>
  {{ Site::system_messages() }}
  {{ $lists->prepare_items() }}
    <div class="section section--box">
      <div class="row">
        {{ Form::open(array('url' => 'admin/dashboard', 'method' => 'GET')) }}
        <div class="section section--offset">

            <div class="table-actions">
              <div class="table-action-left">
                <div class="table-results">
                     {{ $lists->pagination_info() }}
                  </div>
              </div>
            </div>

            
            {{ $lists->display() }}
          <div class="table-actions">
            <div class="table-action-left">
              <div class="table-results">
                {{ $lists->pagination_info() }}
              </div>
            </div>
            <div class="table-action-right">
              {{ $lists->pagination() }}
            </div>
          </div>
        </div>
        {{ Form::close() }}
      </div>
    </div>

  <script>
    $(function(){
      tableHelper.init("{{ URL::to('admin/media') }}");
    })
  </script>
@stop