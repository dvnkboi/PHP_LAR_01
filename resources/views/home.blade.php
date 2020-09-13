@extends("layouts.basicApp")

@section("content")

<div class="d-flex flex-column flex-fill justify-content-start align-items-center body">
    <div class="row d-flex flex-fill justify-content-center align-items-center shopList" style="height: 0px;">
        <div class="col d-flex flex-fill justify-content-start align-items-start" style="height: 100%;max-height: 100%;">
            <div class="flex-fill cardCont" style="max-height: 100%;">
                <div class="row flex-fill" style="max-height: 100%;height: 100%;">
                    <div class="col d-flex flex-row flex-fill justify-content-start align-items-start flex-wrap" style="max-height: 100%;height: 100%;overflow: hidden;">
                        <div class="carousel slide" data-ride="carousel" id="carousel-1" style="height: 100%;width: 100%;">
                            <div class="carousel-inner" style="height: 100%;">
                                <div class="carousel-item active" style="height: 100%;">
                                    <div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%;height: 100%;">
                                        <div class="d-flex flex-column justify-content-center align-items-center" style="position: relative;"><img src='img/{{$featured[0]->itemID}}.png' alt="Slide Image" style="min-height:400px;width:500px;max-width: 600px;z-index: 1;">
                                            <h1 class="featComp" style='color:{{$featured[0]->color}}'>{{$featured[0]->company}}</h1>
                                        </div>
                                        <h1 class="featModel">{{$featured[0]->name}}</h1>
                                        <div class="d-flex justify-content-center align-items-center buyNow" style='background:{{$featured[0]->color}}'>
                                            <h1 class="text-uppercase" style="font-size: 25px;margin: 0px;padding: 0px;color: #ebebeb!important;transition: color 300ms ease;">Buy now</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 100%;">
                                    <div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%;height: 100%;">
                                        <div class="d-flex flex-column justify-content-center align-items-center" style="position: relative;"><img src='img/{{$featured[1]->itemID}}.png' alt="Slide Image" style="min-height:400px;width:500px;max-width: 600px;z-index: 1;">
                                        <h1 class="featComp" style='color:{{$featured[1]->color}}'>{{$featured[1]->company}}</h1>
                                        </div>
                                        <h1 class="featModel">{{$featured[1]->name}}</h1>
                                        <div class="d-flex justify-content-center align-items-center buyNow" style='background:{{$featured[1]->color}}'>
                                            <h1 class="text-uppercase" style="font-size: 25px;margin: 0px;padding: 0px;color: #ebebeb!important;transition: color 300ms ease;">Buy now</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 100%;">
                                    <div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%;height: 100%;">
                                        <div class="d-flex flex-column justify-content-center align-items-center" style="position: relative;"><img src='img/{{$featured[2]->itemID}}.png' alt="Slide Image" style="min-height:400px;width:500px;max-width: 600px;z-index: 1;">
                                            <h1 class="featComp" style='color:{{$featured[2]->color}}'>{{$featured[2]->company}}</h1>
                                        </div>
                                        <h1 class="featModel">{{$featured[2]->name}}</h1>
                                        <div class="d-flex justify-content-center align-items-center buyNow" style='background:{{$featured[2]->color}}'>
                                            <h1 class="text-uppercase" style="font-size: 25px;margin: 0px;padding: 0px;color: #ebebeb!important;transition: color 300ms ease;">Buy now</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="carousel-control-prev" style='cursor:pointer;'><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></div>
                                <div class="carousel-control-next" style='cursor:pointer;'><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-1" data-slide-to="1"></li>
                                <li data-target="#carousel-1" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
