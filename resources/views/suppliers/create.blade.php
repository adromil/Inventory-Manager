@extends('adminlte::page')

@section('title', 'New supplier')

@section('content_header')
    <h1>New supplier</h1>
@stop

@section('content')
	@include('includes.messages')
    <div class="row">
			<div class="col-sm-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">New supplier</h3>
					</div>
					<div class="box-body">
						{!! Form::open(['action' => 'SuppliersController@store', 'method' => 'post']) !!}

						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									{{ Form::label('name', 'Supplier name') }}
									{{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Supplier name']) }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									{{ Form::label('contact_person', 'Contact person') }}
									{{ Form::text('contact_person', '', ['class' => 'form-control', 'placeholder' => 'Contact person']) }}
								</div>
							</div>
						</div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('email', 'Email address') }}
                                    {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email address']) }}
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('fax', 'Fax number') }}
                                    {{ Form::text('fax', '', ['class' => 'form-control', 'placeholder' => 'Fax number']) }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('phone', 'Phone number') }}
                                    {{ Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone number']) }}
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('mobile', 'Mobile number') }}
                                    {{ Form::text('mobile', '', ['class' => 'form-control', 'placeholder' => 'Mobile number']) }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    {{ Form::label('street', 'Street name') }}
                                    {{ Form::text('street', '', ['class' => 'form-control', 'placeholder' => 'Street name']) }}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {{ Form::label('house_number', 'House number') }}
                                    {{ Form::text('house_number', '', ['class' => 'form-control', 'placeholder' => 'House number']) }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('state_province_county', 'City / Province') }}
                                    {{ Form::text('state_province_county', '', ['class' => 'form-control', 'placeholder' => 'City / Province']) }}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {{ Form::label('country', 'Country') }}
                                    {{ Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Country']) }}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {{ Form::label('postal', 'Postal / Zip Code') }}
                                    {{ Form::text('postal', '', ['class' => 'form-control', 'placeholder' => 'Postal / Zip code']) }}
                                </div>
                            </div>
                        </div>

						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									{{ Form::label('website', 'Supplier website') }}
									{{ Form::text('website', '', ['class' => 'form-control', 'placeholder' => 'Supplier website']) }}
								</div>
							</div>
						</div>

						{{ Form::submit('Create supplier', ['class' => 'pull-right btn btn-default']) }}

						{!! Form::close() !!}
					</div>
				</div>
			</div>
    </div>
@stop
