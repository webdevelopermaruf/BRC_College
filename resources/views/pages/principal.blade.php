@extends('layouts.app')
@section('title', 'Principal Message - ')

@section('content')
<div class="overview-section-six py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="text-center">
                    <img width="300px" src="assets/img/administration/principle.jpg" alt="">
                </div>
                <div class="my-3" style="font-size: 17px">
                    {!! json_decode($site_settings->site_administration)->principal->message !!}
                    <div class="text-right mt-3">
                        <p style="font-size: 18px;font-weight:800" class="mx-3">
                            {{json_decode($site_settings->site_administration)->principal->name}} <br>
                            {{json_decode($site_settings->site_administration)->principal->designation}} <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
               <div>
                    <h3> Suggested Video</h3>
                    <video src="" width="100%" style="border:1px solid black"></video>
               </div>
               <p>
                <a class="bg-primaryColor text-white py-3 px-2 d-block my-2 w-100" href="/chairman-message">Chairman Message</a>
               </p>
               <p>
                <a class="bg-dark text-white py-3 px-2 d-block my-2 w-100" href="#">Principal Message</a>
               </p>
               <p>
                <a class="bg-primaryColor text-white py-3 px-2 d-block my-2 w-100" href="/governing-body">Governing Body</a>
               </p>
            </div>
        </div>
    </div>
</div>
@endsection