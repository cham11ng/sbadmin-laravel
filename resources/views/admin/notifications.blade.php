@extends('admin.layouts.dashboard')

@section ('page_heading','Alerts')

@section('section')

    @component('admin.widgets.panel')
        @slot ('panelTitle','Regular Alerts')
        @slot ('panelBody')
            @include('admin.widgets.alert', array('class'=>'success', 'message'=> 'You have an alert', 'icon'=> 'user'))
            @include('admin.widgets.alert', array('class'=>'info', 'message'=> 'My message'))
            @include('admin.widgets.alert', array('class'=>'warning', 'message'=> 'My message'))
            @include('admin.widgets.alert', array('class'=>'danger', 'message'=> 'My message', 'icon'=> 'remove'))
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-sm-6">
            @component('admin.widgets.panel')
                @slot ('panelTitle','Dismissable Alerts')
                @slot ('panelBody')
                    @include('admin.widgets.alert', array('class'=>'success', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'check'))
                    @include('admin.widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'My message'))
                    @include('admin.widgets.alert', array('class'=>'warning', 'dismissable'=>true, 'message'=> 'My message'))
                    @include('admin.widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'remove'))
                @endslot
            @endcomponent
        </div>
        <div class="col-sm-6">
            @component('admin.widgets.panel')
                @slot ('panelTitle', 'Links in Alerts')
                @slot ('panelBody')

                    @include('admin.widgets.alert', array('class'=>'success', 'link'=> 'link', 'message'=> 'My message', 'icon'=> 'check'))
                    @include('admin.widgets.alert', array('class'=>'info', 'link'=> 'link', 'message'=> 'My message'))
                    @include('admin.widgets.alert', array('class'=>'warning', 'link'=> 'link', 'message'=> 'My message'))
                    @include('admin.widgets.alert', array('class'=>'danger', 'link'=> 'link', 'message'=> 'My message', 'icon'=> 'remove'))
                @endslot
            @endcomponent
        </div>
    </div>

@endsection
