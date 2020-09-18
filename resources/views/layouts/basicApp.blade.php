<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PHP PROJ 2</title>
    <link rel="stylesheet" href="css/app.css">
</head>




<body class="noselect" style="height: 100%;width: 100%;background: #363636;">

    @if(count($errors) > 0)
    <div style="color:red">
        @foreach ($errors->all() as $message)
            <ul>
                <li>{{$message}}</li>
            </ul>
        @endforeach
    </div>
    @endif
    <div class="app">
        <div style="position: relative;height: 100%;width: 100%;border-radius: 25px;overflow: hidden;box-shadow: 0px 4px 25px rgba(0,0,0,0.35);">
            <div class="solidBg"></div>
            <div class="d-flex justify-content-center align-items-center background boxed">
                <div class="insideBgCont"><img class="bg-img boxed" src="img/Design.svg"></div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center appCont">
                <div class="navCont">
                    <div class="container-fluid d-xl-flex flex-row justify-content-xl-center align-items-xl-center" style="width: 100%;height: 100%;">
                        <div class="row row-cols-2 d-flex justify-content-between align-items-center" style="height: 100%;width: 100%;">
                            <div class="col-xl-3 d-flex justify-content-center align-items-center logoCont" style="width: 50px;max-width: 100px;height: 80%;background: #252525;cursor: pointer;color: #ebebeb;border-radius: 10px;padding: 0px;">
                                <div class="d-flex flex-row justify-content-start align-items-center flex-wrap" style="transform: scale(0.7);color: inherit!important;overflow: hidden;border-radius: 10px;">
                                    <h1 class="d-flex justify-content-center align-items-center logo" style="color: #ebebeb;transition: color 300ms 20ms ease;">C</h1>
                                    <h1 class="d-flex justify-content-center align-items-center logo" style="color: #ebebeb;transition: color 300ms 40ms ease;">R</h1>
                                    <h1 class="d-flex justify-content-center align-items-center logo" style="color: #ebebeb;transition: color 300ms 60ms ease;">A</h1>
                                    <h1 class="d-flex justify-content-center align-items-center logo" style="color: #ebebeb;transition: color 300ms 0ms ease;">M</h1>
                                    <h1 class="d-flex justify-content-center align-items-center logo" style="color: #ebebeb;transition: color 300ms 80ms ease;">F</h1>
                                    <h1 class="d-flex justify-content-center align-items-center logo" style="transition: color 300ms 100ms ease;">T</h1>
                                </div>
                            </div>
                            <div class="col-xl-8 d-flex flex-fill justify-content-end align-items-center" style="position: relative;">
                                <a class="navItem 
                                    @if (Request::is('/'))
                                    special
                                    @endif" 
                                    href="/">Home
                                </a>
                                <a class="navItem 
                                    @if (Request::is('about'))
                                    special
                                    @endif"
                                    href="about">About
                                </a>
                                <a class="navItem 
                                    @if (Request::is('shop'))
                                    special
                                    @endif" 
                                    href="shop">Shop
                                </a>
                                @guest <a href="login"> @endguest
                                <div class="d-flex justify-content-center align-items-center avatar" >
                                <img src="img/icons/smile.svg" style="width: 32px;" /></div>
                                @guest </a> @endguest
                                @auth
                                <script>
                                    function defer(method) {
                                        if (window.jQuery) {
                                            method();
                                        } else {
                                            setTimeout(function() { defer(method) }, 50);
                                        }
                                    }
                                    defer(function () {
                                        $('.avatar').on('click',() => {
                                            if(!$(".avatar").hasClass('active')){
                                                $(".avatar").addClass('active');
                                                $(".avatarDropdown").css({
                                                    'opacity':1,
                                                    'transform':'translateY(0px)',
                                                    'pointer-events':'auto'
                                                });
                                                return;
                                            }
                                            $(".avatar").removeClass('active');
                                            $(".avatarDropdown").css({
                                                'opacity':0,
                                                'transform':'translateY(-6px)',
                                                'pointer-events':'none'
                                            });
                                        });
                                    });
                                </script>
                                @endauth
                                <div class="d-flex flex-column justify-content-center align-items-center avatarDropdown">
                                    <div id='cartBtn' data='' class="d-flex flex-fill justify-content-center align-items-center dropdownItem" style="z-index: 3;border-radius: 25px;">
                                        <h1 class="d-flex justify-content-center align-items-center" style="color: #ebebeb;font-size: inherit;">Cart</h1>
                                    </div>
                                    <div id='logOut' class="d-flex flex-fill justify-content-center align-items-center dropdownItem" style="z-index: 2;border-radius: 25px;">
                                        <h1 class="d-flex justify-content-center align-items-center" style="color: #ebebeb;font-size: inherit;">Logout</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="dialog" tabindex="-1" class="modal fade" style="display: none;background:rgba(0, 0, 0, 0.5)">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Checkout</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                            <div class="modal-body">
                                <p style='font-size:30px;'>We only support Checkouts using Paypal at the Moment, please proceed to checkout or cancel using the buttons</p>
                            </div>
                            <div class="modal-footer"><button class="btn closeBtn" type="button" data-dismiss="modal">Close</button><button class="btn checkout" type="button">Proceed To Paypal Checkout</button></div>
                        </div>
                    </div>
                </div>
                @yield('content')

            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>