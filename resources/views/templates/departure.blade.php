
@extends('layouts.master')

@section('title')
Departures
@endsection 

@section('content')

<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                
<div class="row">
    <div class="col-xl-12">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header" id="top">
                    <h2 class="pageheader-title"></h2>
                    <p class="pageheader-text"></p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active" aria-current="page">Departures</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                
                <form class="form-horizontal col-lg-12" role="form" method="POST" action="{{ url('/report-departures') }}" id="report_departure_form">
                            {!! csrf_field() !!}
                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Search departures</h4>
                            </div>
                            <div class="card-body">                                  

                                    <div class="row">

                                    

                                        <div class="col-md-3 mb-3 {{ $errors->has('dateFrom') ? ' has-error' : '' }}">
                                            <label for="dateFrom"> Date [From]</label>
                                            <input class="form-control text-box single-line" data-val="true" data-val-date="The field Date From must be a date." id="dateFrom" name="dateFrom" type="date" value="{{ old('dateFrom') }}">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="dateFrom" data-valmsg-replace="true"></span>
                                            @if ($errors->has('dateFrom'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('dateFrom') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="dateTo"> Date [To]</label>
                                            <input class="form-control text-box single-line" data-val="true" data-val-date="The field Date To must be a date." id="dateTo" name="dateTo" type="date" value="">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="dateTo" data-valmsg-replace="true"></span>
                                            @if ($errors->has('dateTo'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('dateTo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Search</button>
                                        </div>
                                    </div>

                                    <div class="col-md-9" id="hidden_search_loader" style="display:none;display:inline-block;">
                                        <div id="search_loader"></div>
                                        <div id="search_loader_msg" style="color:#2e8b57;text-align:left;"></div>
                                    </div>
                                

                            </div>
                        </div>
                    </div>

</form>

                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <p>departureS</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="report_table" class="table clientList table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>
                                CLIENT NAME
                            </th>

                            <th>
                                ROOM
                            </th>

                            <th>
                                ROOM TYPE
                            </th>
                            <th>
                                RESV#
                            </th>

                            <th>
                                ADULTS
                            </th>

                            <th>
                                STATUS
                            </th>

                            <th>
                                DURATION
                            </th>

                            <th>
                                CHECK IN
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $count=1 ?>
                    @foreach($data as $departure)
                            <tr class="table-success">
                                <td>{{ $count++ }}</td>
                                <td>{{ $departure->client_name }}</td>
                                <td>{{ $departure->room_title }}</td>
                                <td>{{ $departure->roomtype_title }}</td>
                                <td>{{ $departure->reservation_id }}</td>
                                <td>{{ $departure->adults }}</td> 
                                <td>{{ $departure->status }}</td> 
                                <td>{{ $departure->actual_departure }} - {{ $departure->departure }}</td> 
                                <td>{{ $departure->actual_departure }}</td> 
                            </tr>
                            @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
<br /><br /><br />
            </div>
            <!--footer-->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright &copy; 2019 | Pride Reports <a href="https://ieianchorpensions.com/" target="_blank">Webmobiles</a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">Support</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//footer-->
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->

@endsection