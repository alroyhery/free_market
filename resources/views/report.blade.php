<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
<style>
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
    .salesarea{
        background-color:#fefeb8;
        /* border: 1px solid black ; */
        border-right: 1px solid black;
    }
    .category1{
        background-color:#fefeb8;
        /* border: 1px solid black ; */
        border-right: 1px solid black;
        border-left: 1px solid black;



    }
    .category3{
        background-color: #aee5fb;
        /* border: 1px solid black ; */

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
    }
    .totalkuning{
        border-top: 1px solid black;
        background-color:#f0f107;
        border-left: 1px solid black;
    }
    .text_align
    {
        text-align: right;
        padding-right: 5px;
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

</style>
</head>
<body>
<table class="headcontainer">
    <h3 class="flex title"> Daily Sales Report Free Market (in Kg)</h3>
<h3>{{ $tbl_free_market_report[0]->group }}</h3>
<h3>Reporting date : {{ $tbl_free_market_report[0]->period }}</h3>

<tr>
<td class="head">Sales Area</td>
<td class="head">Category</td>
<td class="head">Target</td>
<td class="head">MTD H-1</td>
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
    else{
        $category = "category1";
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
<td class={{ $free_market->salesarea == $tbl_free_market_report[0]->group||$free_market->salesarea == "**"? 'total':'salesarea' }}>{{ $free_market->salesarea }}</td>
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

</body>
</html>
