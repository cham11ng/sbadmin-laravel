@extends('admin.layouts.dashboard')

@section('page_heading','Buttons')

@section('section')

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot ('panelTitle', 'Default Buttons')
                    @slot ('panelBody')
                        <h4>Normal Buttons</h4>
                        <p>
                            @include('admin.widgets.button', array('value'=>'Primary', 'class'=>'primary'))
                            @include('admin.widgets.button', array('class'=>'primary', 'value'=>'Primary'))
                            @include('admin.widgets.button', array('class'=>'success', 'value'=>'Success'))
                            @include('admin.widgets.button', array('class'=>'warning', 'value'=>'Warning'))
                            @include('admin.widgets.button', array('class'=>'danger', 'value'=>'Danger'))
                        </p>
                        <br>
                        <h4>Disabled Buttons</h4>
                        <p>
                            @include('admin.widgets.button', array('value'=>'Default', 'disabled'=>true))
                            @include('admin.widgets.button', array('class'=>'primary', 'value'=>'Primary', 'disabled'=>true))
                            @include('admin.widgets.button', array('class'=>'success', 'value'=>'Success', 'disabled'=>true))
                            @include('admin.widgets.button', array('class'=>'warning', 'value'=>'Warning', 'disabled'=>true))
                            @include('admin.widgets.button', array('class'=>'danger', 'value'=>'Danger', 'disabled'=>true))
                        </p>
                        <br>
                        <h4>Button Sizes</h4>
                        <p>
                            @include('admin.widgets.button', array('class'=>'primary', 'size'=>'lg', 'value'=>'Large Button'))
                            @include('admin.widgets.button', array('class'=>'primary', 'value'=>'Default'))
                            @include('admin.widgets.button', array('class'=>'primary', 'size'=>'sm', 'value'=>'Small'))
                            @include('admin.widgets.button', array('class'=>'primary', 'size'=>'xs', 'value'=>'Extra Small'))
                            <br>
                            <br>
                        @include('admin.widgets.button', array('class'=>'primary', 'size'=>'lg btn-block', 'value'=>'Block level Button'))
                    @endslot
                @endcomponent
            </div>

            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot ('panelTitle', 'Default Buttons')
                    @slot ('panelBody')
                        <h4>Normal Circle Buttons</h4>
                        <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                        <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                        <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i></button>
                        <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>
                        <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i></button>

                        <br>
                        <br>

                        <h4>Large Circle Buttons</h4>
                        <button type="button" class="btn btn-default btn-circle btn-lg"><i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-list"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i>
                        </button>
                        <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-times"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-heart"></i>
                        </button>
                    @endslot
                @endcomponent

                <br/>
                @component('admin.widgets.panel')
                    @slot ('panelTitle', 'Outline buttons with smooth transition')
                    @slot ('panelBody')

                        <h4>Outline Buttons</h4>
                        <p>
                            @include('admin.widgets.button', array('value'=>'Default', 'class'=>'default btn-outline'))
                            @include('admin.widgets.button', array('class'=>'primary btn-outline', 'value'=>'Primary'))
                            @include('admin.widgets.button', array('class'=>'success btn-outline', 'value'=>'Success'))
                            @include('admin.widgets.button', array('class'=>'warning btn-outline', 'value'=>'Warning'))
                            @include('admin.widgets.button', array('class'=>'danger btn-outline', 'value'=>'Danger'))
                        </p>
                        <br>
                        <h4>Outline Button Sizes</h4>
                        <p>
                            @include('admin.widgets.button', array('class'=>'primary btn-outline', 'size'=>'lg', 'value'=>'Large Button'))
                            @include('admin.widgets.button', array('class'=>'primary btn-outline', 'value'=>'Default'))
                            @include('admin.widgets.button', array('class'=>'primary btn-outline', 'size'=>'sm', 'value'=>'Small'))
                            @include('admin.widgets.button', array('class'=>'primary btn-outline', 'size'=>'xs', 'value'=>'Extra Small'))
                        </p>
                        <br>
                        <br>
                        @include('admin.widgets.button', array('class'=>'primary btn-o', 'size'=>'lg btn-block', 'value'=>'Block level Button'))
                    @endslot
                @endcomponent
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->

@endsection


