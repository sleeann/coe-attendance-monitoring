<div class="container-fluid">
    <h4 class="">Announcements</h4>
        @foreach ($allAnnouncement as $announcements)
            <div class="announcements">
                <div class="row">
                <div class="col-xl-12  col-lg-12 col-sm-12">
                    <div class="widget-stat card bg-primary">
                        <div class="card-body  p-4">
                            <div class="media">
                            <div class="media-body text-white">
                                <div class="d-flex flex-inline">
                                    <div class=" " style="max-width: 700px; max-heigth: 400px;">
                                        <img src="{{ asset('storage/gallery/' . $announcements->image) }}" style="width: 300px; height: 180px;" alt="">
                                    </div>
                                    <div class="announce-details p-3">
                                        <h3 class="text-success">{{ $announcements->title }}</h3>
                                        <p class="mb-1">{{ $announcements->announcement }}</p>

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
        @endforeach
    </div>