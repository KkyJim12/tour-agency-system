<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="title"><img src='/assets/img/home/icn-recommend.png' class='icon-title'>ประเทศยอดนิยม</h3>
        </div>
    </div>
    <div class="row">
        @foreach($country_suggest as $show)
        <div class="col-md-4">
            <a href='#'>
                <div>
                    <figure>
                        <img style="width:100%; border-radius:10px;" src='/assets/img/tour/tour-1.jpg'>

                    </figure>
                    <div class="text-center">
                        <h5>{{$show->country_name}}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>