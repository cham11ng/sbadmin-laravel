@extends('admin.layouts.dashboard')

@section('page_heading','Tables')

@section('section')

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Regular Table')
                    @slot('panelBody')
                        @include('admin.widgets.table', array('class'=>''))
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Bordered Table')
                    @slot('panelBody')
                        @include('admin.widgets.table', array('class'=>'table-bordered'))
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Striped Table')
                    @slot('panelBody')
                        @include('admin.widgets.table', array('class'=>'table-striped'))
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Hover Table')
                    @slot('panelBody')
                        @include('admin.widgets.table', array('class'=>'table-hover'))
                    @endslot
                @endcomponent
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Condensed Table')
                    @slot('panelBody')
                        @include('admin.widgets.table', array('class'=>'table-condensed'))
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Condensed, Bordered, Striped Table')
                    @slot('panelBody')
                        @include('admin.widgets.table', array('class'=>'table-condensed table-bordered table-striped'))
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Coloured Table')
                    @slot('panelBody')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success">
                                    <td>John</td>
                                    <td>john@gmail.com</td>
                                    <td>London, UK</td>
                                </tr>
                                <tr>
                                    <td>Wayne</td>
                                    <td>wayne@gmail.com</td>
                                    <td>Manchester, UK</td>
                                </tr>
                                <tr class="info">
                                    <td>Andy</td>
                                    <td>andy@gmail.com</td>
                                    <td>Merseyside, UK</td>
                                </tr>
                                <tr>
                                    <td>Danny</td>
                                    <td>danny@gmail.com</td>
                                    <td>Middlesborough, UK</td>
                                </tr>
                                <tr class="warning">
                                    <td>Frank</td>
                                    <td>frank@gmail.com</td>
                                    <td>Southampton, UK</td>
                                </tr>
                                <tr>
                                    <td>Scott</td>
                                    <td>scott@gmail.com</td>
                                    <td>Newcastle, UK</td>
                                </tr>
                                <tr class="danger">
                                    <td>Rickie</td>
                                    <td>rickie@gmail.com</td>
                                    <td>Burnley, UK</td>
                                </tr>
                            </tbody>
                        </table>
                    @endslot
                @endcomponent
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->

@endsection