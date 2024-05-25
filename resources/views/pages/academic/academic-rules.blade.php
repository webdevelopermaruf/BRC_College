@extends('layouts.app')
@section('title', 'একাডেমিক নিয়মাবলি - BRC')

@section('content')
<div class="overview-section-six py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <ul class="list-itemsMenu" style="font-size: 17px">
                        <div onclick="onObjectChange(this)" data-object="assets/notices/academic_calendar.pdf" href="">
                            <li class="p-2 py-3 activeList">
                                <i class="icon_book mr-4"></i> একাডেমিক নিয়মাবলি
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
                <object class="object-box" data="assets/notices/academic_rules.pdf" type="application/pdf" width="100%" height="800px">
                    <p>Alternative text - include a link <a href="myfile.pdf">to the PDF!</a></p>
                  </object>
            </div>
            
        </div>
    </div>
</div>
@endsection