<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($doctor as $doctors)
            <div class="item">
                <div class="card-doctor"  style="border: 1px solid;
                padding: 10px;
                box-shadow: 3px 7px 5px 7px grey;">
                    <div class="header">
                        <img src="doctorImage/{{$doctors->image}}" alt="" style="height:350px">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body text-center">
                        <p class="text-xl mb-0" style="text-transform:uppercase;">{{$doctors->username}}</p>
                        <span class="text-xl text-grey" style="text-transform: capitalize;">{{$doctors->speciality}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>