@extends('layouts.back')

@section('content')


    <div class="section section--top">
        <div class="section-left">
          <ul class="action-list">
            <li>
              <a  href="#" class="delete-post btn btn-default">
                <i class="fa fa-trash-o"></i>
                <span>Delete</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="section-right">
          
        </div>
    </div>


    <div class="section section--box">
        <div class="row">
            <div class="col-sm-3">
                <div class="panel">
                    <div class="panel__heading">
                        <h1 class="h4">Status</h1>
                    </div>
                    <div class="panel__sub_content">
                        <div class="row">
                            <div class="col-lg-7">

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9    ">
                <div class="panel">
                    <div class="panel__heading">
                        <h1 class="h4">No of Property Listings ( Past 30 days )</h1>
                        
                        <div class="pull-right">
                            <div class="pull-left selectpicker-md2 mr-5px">

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle btn-md--2nd" data-toggle="dropdown">
                                        <span class="pull-left">
                                            Select Category
                                        </span>
                                        <span class="pull-right">
                                            <span class="caret"></span>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu--extended" role="menu">
                                        <li class="dd-menu--extended__item">
                                            <label>
                                                1
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel__sub_content">
                        <div class="row">
                            <div class="col-lg-7">

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop