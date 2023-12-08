@extends('layouts.parent')
@section('title', 'Announcements')
@section('content')
<div class="content-body">
   <div class="container-fluid">
        <div class="announcements">
            <h4 class="">Announcements</h4>
            <div class="row">
               <div class="col-xl-12  col-lg-12 col-sm-12">
                  <div class="widget-stat card bg-primary">
                     <div class="card-body  p-4">
                        <div class="media">
                           <div class="media-body text-white">
                              <div class="d-flex flex-inline">
                                 <div class=" " style="max-width: 700px; max-heigth: 400px;">
                                    <img src="{{asset('assets/images/announcements/noClasses.png')}}" style="width: 100%" alt="">
                                 </div>
                                 <div class="announce-details p-3">
                                    <h3 class="text-success">Public Advisory</h3>
                                    <p class="mb-1">Walang pasok bukas, December 8, 2023, para sa Feast of the Immaculate Conception of Mary.</p>

                                 </div>
                              </div>
                              <br>
                              <div class="progress mb-2 bg-secondary">
                                 <div class="progress-bar progress-animated bg-white" style="width: 800%"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection

