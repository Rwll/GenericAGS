@extends('layouts.admin-master')

@section('content')
	<ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab1" data-toggle="tab">Create Message</a>
        </li>
        <li><a href="#tab2" data-toggle="tab">Inbox</a></li>
        <li><a href="#tab3" data-toggle="tab">Sent</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane panel panel-default active" id="tab1">
            <div class="panel-body">
                <div class="row">
                	<div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                		<div class="panel panel-default">
                			<div class="panel-heading">
                				Recipients
                			</div>
                			<div class="panel-body">
		                		<ul class="list-group">
		                		  <li class="list-group-item recipient">Cras justo odio</li>
		                		  <li class="list-group-item recipient">Dapibus ac facilisis in</li>
		                		  <li class="list-group-item recipient">Morbi leo risus</li>
		                		  <li class="list-group-item recipient">Porta ac consectetur ac</li>
		                		  <li class="list-group-item recipient">Vestibulum at eros</li>
		                		</ul>
                			</div>
                		</div>
                	</div>
                	<form role="form" class="col-md-6">
                        <div class="form-group">
                            <label for="recipients"><strong> Recipients</strong></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="recipients" placeholder="...">
                                <span class="input-group-btn">
                                <button class="btn btn-info" type="button"><i class="fa fa-plus fa-fw"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject"><strong> Subject</strong></label>
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label><strong> Message</strong></label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope fa-fw"></i> Send</button>
                        </div>
                	</form>
                </div>
            </div>
        </div><!-- tab1 -->
        <div class="tab-pane panel panel-default" id="tab2">
            @include('blocks.inbox')
        </div>
        <div class="tab-pane panel panel-default" id="tab3">
            @include('blocks.sent-items')
        </div>
    </div>
@stop