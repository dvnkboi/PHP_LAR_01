@extends("layouts.basicApp")

@section("content")

<div class="d-flex flex-column flex-fill justify-content-start align-items-center body">
    <div class="row shopHeader"></div>
    <div class="row d-flex flex-fill justify-content-center align-items-center shopList" style="height: 0px;">
        <div class="col d-flex flex-fill justify-content-start align-items-start" style="height: 100%;max-height: 100%;">
            <div class="flex-fill cardCont" style="max-height: 100%;">
                <div class="row flex-fill" style="max-height: 100%;">
                    <div class="col d-flex flex-row flex-fill justify-content-start align-items-start flex-wrap" style="max-height: 100%;">

                        @forelse ($shop as $item)

                        <div class="d-flex flex-column justify-content-center align-items-center shopCard" style="background: #252525;box-shadow: -1px 1px 0px {{$item->color}};">
                            <div class="row flex-fill" style="width: 100%;">
                                <div class="col d-flex justify-content-center align-items-center" style="z-index: 1;width: 50%;">
                                    <div class="prodImgCont"><img class="prodImg" src='img/{{$item->itemID}}.png'></div>
                                </div>
                                <div class="col d-flex flex-column justify-content-center align-items-end" style="z-index: 0;">
                                    <h1 class="spec1">{{$item->spec1}}</h1>
                                    <h1 class="spec2">{{$item->spec2}}</h1>
                                    <h1 class="spec3">{{$item->spec3}}</h1>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center extraInfo" style="width: 100%;height: 0px;opacity:0;">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex justify-content-between align-items-center prodInfoCard" style="width: 100%;height: 40px;">
                                        <h1 class="prodCompany">${{$item->price}}</h1>
                                        <h1 class="prodModel">Only {{$item->stock}} Left</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center" style="width: 100%;height: 50px;">
                                <div class="col d-flex justify-content-center align-items-center">
                                    
                                    <div class="d-flex justify-content-between align-items-center prodInfoCard" style="width: 100%;height: 40px;">
                                        <h1 class="prodCompany">{{$item->company}}</h1>
                                        <h1 class="prodModel">{{$item->name}}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="width: 100%;">
                                <div class="col d-flex justify-content-center align-items-center" style="width: 100%;">
                                    <div class="addCartBtn" style="background:{{$item->color}}">
                                        <h3 class="d-flex justify-content-center align-items-center addToCartTxt">Buy Now</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        @empty

                        <div class="d-flex flex-column justify-content-center align-items-center" style="color:#ebebeb;display:flex;align-items:center;justify-content:center;width:100%;height:100%;font-size:80px">
                            no item found :c
                            <img src="img/cat.jpg" alt="sad cat" style="max-width: 400px">
                        </div>
                            
                        @endforelse
                        


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
