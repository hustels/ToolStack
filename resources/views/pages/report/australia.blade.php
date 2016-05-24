@extends('template')
<link rel="stylesheet" href="/bkreport/assets/css/jquery-ui.min.css" />
<link rel="stylesheet" href="/bkreport/assets/css/ui.jqgrid.min.css" />
<!-- text fonts -->
<link rel="stylesheet" href="/bkreport/assets/fonts/fonts.googleapis.com.css" />
<!-- ace styles -->
<link rel="stylesheet" href="/bkreport/assets/css/table_vendor.min.css" class="ace-main-stylesheet" id="main-ace-style" />

@section('table')

<div class="main-container" id="main-container">
<div class="main-content" >
<div class="main-content-inner" >
    <div class="page-content"  >
        <div class="row ">
            <div class="col-xs-12 table-wrapper" style="margin: -38px">
               <div class="sc">
                    <table id="grid-table"  ></table>

                <div id="grid-pager"  ></div>
               </div>

                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
</div><!-- /.main-container --> 
   

@endsection  

@section('scripts')
    <script src="/bkreport/envs/australia.js"></script>
@endsection



