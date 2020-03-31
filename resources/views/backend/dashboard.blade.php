@extends('layouts.backend')

@section('content')

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Orders</div>
                    <div class="widget-subheading">Last year expenses</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>1896</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Clients</div>
                    <div class="widget-subheading">Total Clients Profit</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>$ 568</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Followers</div>
                    <div class="widget-subheading">People Interested</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>46%</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 card">
        <div class="card-header-tab card-header-tab-animation card-header">
            <div class="card-header-title">
                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                Sales Report
            </div>
            <ul class="nav">
                <li class="nav-item"><a href="javascript:void(0);" class="active nav-link">Last</a></li>
                <li class="nav-item"><a href="javascript:void(0);" class="nav-link second-tab-toggle">Current</a></li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-eg-77">
                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="canvas" width="447" height="223" class="chartjs-render-monitor" style="display: block; width: 447px; height: 223px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Top Authors</h6>
                    <div class="scroll-area-sm">
                        <div class="scrollbar-container ps ps--active-y">
                            <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <img width="42" class="rounded-circle" src="{{ asset('/images/avatars/9.jpg') }}" alt="">
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ella-Rose Henry</div>
                                                <div class="widget-subheading">Web Developer</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="font-size-xlg text-muted">
                                                    <small class="opacity-5 pr-1">$</small>
                                                    <span>129</span>
                                                    <small class="text-danger pl-2">
                                                        <i class="fa fa-angle-down"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <img width="42" class="rounded-circle" src="{{ asset('/images/avatars/5.jpg') }}" alt="">
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ruben Tillman</div>
                                                <div class="widget-subheading">UI Designer</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="font-size-xlg text-muted">
                                                    <small class="opacity-5 pr-1">$</small>
                                                    <span>54</span>
                                                    <small class="text-success pl-2">
                                                        <i class="fa fa-angle-up"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <img width="42" class="rounded-circle" src="{{ asset('/images/avatars/4.jpg') }}" alt="">
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Vinnie Wagstaff</div>
                                                <div class="widget-subheading">Java Programmer</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="font-size-xlg text-muted">
                                                    <small class="opacity-5 pr-1">$</small>
                                                    <span>429</span>
                                                    <small class="text-warning pl-2">
                                                        <i class="fa fa-dot-circle"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <img width="42" class="rounded-circle" src="{{ asset('/images/avatars/3.jpg') }}" alt="">
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ella-Rose Henry</div>
                                                <div class="widget-subheading">Web Developer</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="font-size-xlg text-muted">
                                                    <small class="opacity-5 pr-1">$</small>
                                                    <span>129</span>
                                                    <small class="text-danger pl-2">
                                                        <i class="fa fa-angle-down"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <img width="42" class="rounded-circle" src="{{ asset('/images/avatars/2.jpg') }}" alt="">
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Ruben Tillman</div>
                                                <div class="widget-subheading">UI Designer</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="font-size-xlg text-muted">
                                                    <small class="opacity-5 pr-1">$</small>
                                                    <span>54</span>
                                                    <small class="text-success pl-2">
                                                        <i class="fa fa-angle-up"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 200px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 139px;"></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="main-card col-md-12 card" style="margin-top:20px">
        <div class="card-header">Active Users
            <div class="btn-actions-pane-right">
                <div role="group" class="btn-group-sm btn-group">
                    <button class="active btn btn-focus">Last Week</button>
                    <button class="btn btn-focus">All Month</button>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th class="text-center">City</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center text-muted">#345</td>
                    <td>
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                    <div class="widget-content-left">
                                        <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="widget-content-left flex2">
                                    <div class="widget-heading">John Doe</div>
                                    <div class="widget-subheading opacity-7">Web Developer</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">Madrid</td>
                    <td class="text-center">
                        <div class="badge badge-warning">Pending</div>
                    </td>
                    <td class="text-center">
                        <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted">#347</td>
                    <td>
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                    <div class="widget-content-left">
                                        <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="widget-content-left flex2">
                                    <div class="widget-heading">Ruben Tillman</div>
                                    <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">Berlin</td>
                    <td class="text-center">
                        <div class="badge badge-success">Completed</div>
                    </td>
                    <td class="text-center">
                        <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted">#321</td>
                    <td>
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                    <div class="widget-content-left">
                                        <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="widget-content-left flex2">
                                    <div class="widget-heading">Elliot Huber</div>
                                    <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">London</td>
                    <td class="text-center">
                        <div class="badge badge-danger">In Progress</div>
                    </td>
                    <td class="text-center">
                        <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted">#55</td>
                    <td>
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                    <div class="widget-content-left">
                                        <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt=""></div>
                                </div>
                                <div class="widget-content-left flex2">
                                    <div class="widget-heading">Vinnie Wagstaff</div>
                                    <div class="widget-subheading opacity-7">UI Designer</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">Amsterdam</td>
                    <td class="text-center">
                        <div class="badge badge-info">On Hold</div>
                    </td>
                    <td class="text-center">
                        <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="d-block text-center card-footer">
            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
            <button class="btn-wide btn btn-success">Save</button>
        </div>
    </div>
</div>

@endsection