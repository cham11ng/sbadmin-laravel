@extends('admin.layouts.dashboard')

@section('page_heading','Panels and Collapsibles')

@section('section')

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Default Title')
                    @slot('panelBody')
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    @endslot
                @endcomponent

                @component('admin.widgets.panel')
                    @slot('class', 'primary')
                    @slot('panelTitle', 'Inverse Header')
                    @slot('panelBody')
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    @endslot
                @endcomponent

                @component('admin.widgets.panel')
                    @slot('class', 'success')
                    @slot('panelTitle', 'Header')
                    @slot('panelBody')
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    @endslot
                    @slot('panelFooter')
                        View All
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot('class', 'info')
                    @slot('panelTitle', 'Hello World!')
                    @slot('panelBody')
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    @endslot
                @endcomponent

                @component('admin.widgets.panel')
                    @slot('class', 'warning')
                    @slot('panelTitle', 'Warning')
                    @slot('panelBody')
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    @endslot
                @endcomponent

                @component('admin.widgets.panel')
                    @slot('class', 'danger')
                    @slot('panelTitle', 'Danger')
                    @slot('panelBody')
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-12">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Collapsible Panel Group')
                    @slot('panelBody')
                        @include('admin.widgets.collapse', array('id'=>'1', 'class'=>'primary', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.','collapseIn'=>true))
                        @include('admin.widgets.collapse', array('id'=>'2', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
                        @include('admin.widgets.collapse', array('id'=>'3', 'class'=>'success', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
                    @endslot
                @endcomponent
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->

@endsection