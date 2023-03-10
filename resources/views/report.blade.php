<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
<style>
    td{
        font-family: "courier new";
    }
    tr{
        font-family: "courier new";
    }
    h3{
        font-family: "courier new";
    }
    .title{
        display: flex;
        justify-content: center;
    }
    .head{
        background-color: #5ccbff;
        /* border: 1px solid black; */
        border-right: 1px solid black;
        padding: 10px 3rem;
        text-align: center;

    }
    .headmtd{
        background-color: #5ccbff;
        /* border: 1px solid black; */
        border-right: 1px solid black;
        padding: 10px 3rem;
        text-align: center;
        width: 50px;

    }
    .salesarea{
        background-color:#fefeb8;
        /* border: 1px solid black ; */
        border-right: 1px solid black;
        padding-left: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .category1{
        background-color:#fefeb8;
        /* border: 1px solid black ; */
        border-right: 1px solid black;
        border-left: 1px solid black;
        padding-left: 10px;



    }
    .category3{
        background-color: #aee5fb;
        /* border: 1px solid black ; */
        padding-left: 10px;

        border-right: 1px solid black;
        border-left: 1px solid black;
    }
    .headcontainer{
        border: 1px solid black;
        border-collapse:collapse;
        border-right: 1px solid black;

    }
    .color{
        background-color: #eef9ff;
        /* border: 1px solid black ; */
        border-right: 1px solid black;
    }
    .total{
        border-top: 1px solid black;
        background-color:#fefeb8;
        border-left: 1px solid black;
        padding-inline-start: 10px;
    }
    .totalkuning{
        border-top: 1px solid black;
        background-color:#f0f107;
        border-left: 1px solid black;
        padding-inline-start: 10px;
    }
    .text_align
    {
        text-align: right;
        padding-right: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .breakspace{
        white-space: nowrap;
    }
    .kosong{
        height: 10px;
        border-right: 1px solid black;
        border-left: 1px solid black;
    }
    .totalnational{
        border-top: 1px solid black;
        border-left: 1px solid black;
        background-color:#f0f107;
    }
    .warnabiru{
        background-color: #aee5fb;
    }
    .size{
        width: 1350px;
    }

</style>
</head>
<body>
    <div class="size">
<table class="headcontainer">
    <h3 class="flex title"> Daily Sales Report Free Market (in {{ $uom }})</h3>
<h3>{{ $tbl_free_market_report[0]->group }}</h3>
<h3>Reporting date : {{ $tbl_free_market_report[0]->period }}</h3>

<tr>
<td class="head">Sales Area</td>
<td class="head">Category</td>
<td class="head">Target</td>
<td class="headmtd">MTD H-1</td>
<td class="head">SID</td>
<td class="head">MTD</td>
<td class="head">Achv (%)</td>
<td class="head breakspace">Speed Qty <br>Kg</td>
<td class="head">Speed (%)</td>
</tr>
@foreach ($tbl_free_market_report as $key => $free_market)

@php
    $category ="";
    if(strtolower($free_market->category) == "total" && $free_market->salesarea =="")
    {
        $category = "category3";

    }
    else if($free_market->salesarea == $tbl_free_market_report[0]->group && strtolower($free_market->category) != "total")
    {
        $category = "total";
    }
    else if($free_market->salesarea == "**")
    {
        $category = "totalkuning";
    }
    else if($free_market->salesarea == $tbl_free_market_report[0]->group && strtolower($free_market->category) == "total")
    {
        $category = "totalnational";
    }
    else if($free_market->salesarea != $tbl_free_market_report[0]->group && strtolower($free_market->category) == "total")
    {
        $category = "category3";
    }

    else{
        $category = "category1";
    }

    if($free_market->salesarea == $tbl_free_market_report[0]->group||$free_market->salesarea == "**"){
        $category11 = "total";


    }
    else if(strtolower($free_market->category) == "total" && $free_market->salesarea == "")
    {
        $category11 = "warnabiru";
    }
    else {
        $category11 = "salesarea";
    }

@endphp


@if ($free_market->salesarea !="" && strtolower($free_market->category) == "total" && strtolower($tbl_free_market_report[0]->group) == "national")
    <tr class="">
<td class="kosong"></td>
<td class="kosong"></td>
<td class="kosong text_align"></td>
<td class="kosong text_align"></td>
<td class="kosong text_align"></td>
<td class="kosong text_align"></td>
<td class="kosong text_align"></td>
<td class="kosong text_align"></td>
<td class="kosong text_align"></td>
</tr>


@else

@endif

<tr class="">
{{-- <td class={{ $free_market->salesarea == $tbl_free_market_report[0]->group||$free_market->salesarea == "**"? 'total':'salesarea' }}>{{ $free_market->salesarea }}</td> --}}
<td class={{ $category11}}>{{ $free_market->salesarea }}</td>
<td class="{{ $category}}">{{ $free_market->category }}</td>
<td class="{{ $category}} text_align">{{ $free_market->target }}</td>
<td class="{{ $category}} text_align">{{ $free_market->mtdh1 }}</td>
<td class="{{ $category}} text_align">{{ $free_market->sid }}</td>
<td class="{{ $category}} text_align">{{ $free_market->mtd }}</td>
<td class="{{ $category}} text_align">{{ $free_market->achv }}</td>
<td class="{{ $category}} text_align">{{ $free_market->speedqty }}</td>
<td class="{{ $category}} text_align">{{ $free_market->speed }}</td>
</tr>
@endforeach
</table>

<h3 class="text_align"> Reporting Date : {{ $reportdates }}</h3>

</div>

</body>
</html>
