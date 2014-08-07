@extends('layouts.back')

@section('section-top')
<div class="nav navbar-left">
    <a href="{{ URL::to('/') }}"><span class="fa fa-th"></span>View your Website</a>
</div>

@stop
@section('content')


<div class="section section--top">

  <div class="page-title">
        <h3 class="pull-left"> <span class="fa fa-file"></span> Page </h3>
    </div>

    <div class="pull-right search">
        <form class="form-inline form-rounded" role="form">
            <div class="form-group">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control" id="s" name="s" placeholder="Search..">
            </div>
        </form>
    </div>
    <ul class="action-list">
        <li><a  href="{{ URL::to('admin/page/create') }}" class=" btn btn-default">
            <i class="fa fa-plus"></i>
            <span>Add New</span>
          </a>
        </li>
        <li>
        <a onclick="cskAdmin.BootrstrapAlert.xdelete('admin/page/delete', 'Group buy');return false;" class="delete-post btn btn-default">
            <i class="fa fa-trash-o"></i>
            <span>Delete</span>
          </a>
        </li>
        <li class="pull-right">
          {{ $lists->records_per_page() }}
        </li>
    </ul>

</div>

<!-- Main Content -->
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
        {{ Form::close() }}
      </div>
    </div>

  <script>
    $(function(){
      tableHelper.init("{{ URL::to('admin/pages') }}");
    })
  </script>
@stop