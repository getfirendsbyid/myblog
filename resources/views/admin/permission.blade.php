@extends('layouts/admin')

@section('content')
    <link href="{{asset('admin/css/plugins/jsTree/style.min.css')}}" rel="stylesheet">

    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Basic example <small>with custom Font Awesome icons.</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div id="jstree1" class="jstree jstree-1 jstree-default" role="tree" aria-multiselectable="true" tabindex="0" aria-activedescendant="j1_1" aria-busy="false">
                            <ul class="jstree-container-ul jstree-children" role="group">
                                <li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="j1_1_anchor" aria-expanded="false" id="j1_1" class="jstree-node  jstree-last jstree-closed">
                                    <i class="jstree-icon jstree-ocl" role="presentation"></i>
                                    <a class="jstree-anchor" href="#" tabindex="-1" id="j1_1_anchor">
                                        <i class="jstree-icon jstree-themeicon fa fa-folder jstree-themeicon-custom" role="presentation"></i>
                                        Admin theme
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@stop
