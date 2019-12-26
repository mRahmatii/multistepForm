@extends('frontend.layouts.default')

@section('title','خدمت از ما')

@section('description','سامانه آنلاین درخواست خدمات منزل')

@push('meta')
    <meta name="og_image" content="{{asset('frontend/img/logo.png')}}">
@endpush

@section('page_name','home')

@section('content')
    <section class="home">
        <section class="hero">
            <div class="container">
                <div class="row hero-wrapper">
                    <main class="content-hero col-12 col-md-6">
                        <h1 class="slogan">بهترین متخصصان را در بازار "خدمت از ما" پیدا کنید!</h1>

                        <p class="question">به چه خدمتی نیاز دارید؟</p>

                        <div id="frmSearchHome">
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="service-input"><i class="fi fi-search ml-0"></i></label>
                                    </div>

                                    <input type="search" name="search-home" onkeyup="searchHome()" placeholder="جست و جو بین خدمات" class="form-control service-name" id="service-input" autocomplete="off">

                                    <div class="input-group-append">
                                        <button class="btn mybtn" type="submit" id="button-addon1">جستجو</button>
                                    </div>
                                </div>

                                <div class="search-wrap-home">
                                    <ul class="services-search">
                                        <li tabindex="-1" class="search-item"><a data-name="carwash" href="{{url('order/carwash/tehran')}}">کارواش نانو</a></li>
                                        <li class="no-item-found alert alert-warning mb-0 rounded-0">سرویس مورد نظر در شهر انتخابی یافت نشد.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </main>

                    <figure class="pic col-12 col-md-6">
                        <img class="img-fluid" src="#" alt="بنر">
                    </figure>
                </div>
            </div>
        </section>
    </section>
@endsection

@push('footer_scripts')
    <script>
        var isIos= '1';
        const $search_container = $('.search-wrap-home');

        $(function () {
            $("input[name=search-home]").on({
                keydown: function(e) {
                    $this= $(this);
                    if (e.which === 40){
                        $('.search-wrap-home li:visible:first').focus().addClass('active');
                    }

                    if (e.which === 13){
                        window.location= base_url + 'categories/';
                        return false;
                    }
                }
            });

            $(".search-wrap-home li").on({
                keydown: function(ev) {
                    $this= $(this);
                    if (ev.which === 40){
                        if ($this.nextAll('li:visible').first().length)
                        {
                            $this.blur().removeClass('active');
                            $this.nextAll('li:visible').first().focus().addClass('active');
                            return false;
                        }
                    }
                    else if (ev.which === 38)
                    {
                        if ($this.prevAll('li:visible').first().length)
                        {
                            $this.blur().removeClass('active');
                            $this.prevAll('li:visible').first().focus().addClass('active');
                            return false;
                        }
                    }
                    else if (ev.which === 13)
                    {
                        window.location= $this.find('a').attr('href');
                    }
                }
            });
        });

        $(document).mouseup(function (e) {
            if (!$search_container.is(e.target) // if the target of the click isn't the container...
                && $search_container.has(e.target).length === 0) // ... nor a descendant of the container
            {
                $search_container.css('display','none');
            }
        });

        function searchHome() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = $('input[name=search-home]');
            filter = input.val();
            ul = $('.search-wrap-home');
            li = ul.find('li');

            if (!filter)
            {
                ul.css('display','none');
                return false;
            }

            ul.find('li.no-item-found').css('display','none');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li.eq(i).find("a");
                txtValue = a.attr('data-name');
                if (txtValue)
                {
                    if (txtValue.indexOf(filter) > -1) {
                        li.eq(i).not('.no-item-found').css('display','block');
                    } else {
                        li.eq(i).not('.no-item-found').css('display','none');
                    }
                }
            }

            ul.find('li.no-item-found').css('display','none');

            if (ul.find('li:visible').length < 1)
            {
                ul.find('li.no-item-found').css('display','block');
            }

            ul.css('display','block');
        }

        if (isIos)
        {
            var deferredPrompt;

            window.addEventListener('beforeinstallprompt', function (e) {
                // Prevent Chrome 67 and earlier from automatically showing the prompt
                e.preventDefault();
                // Stash the event so it can be triggered later.
                deferredPrompt = e;

                showAddToHomeScreen();
            });

            function showAddToHomeScreen() {

                var a2hsBtn = document.querySelector(".btn-add-to-home");

                a2hsBtn.style.display = "block";

                a2hsBtn.addEventListener("click", addToHomeScreen);
            }

            function addToHomeScreen() {
                var a2hsBtn = document.querySelector(".btn-add-to-home");  // hide our user interface that shows our A2HS button
                a2hsBtn.style.display = 'none';  // Show the prompt
                deferredPrompt.prompt();  // Wait for the user to respond to the prompt
                deferredPrompt.userChoice
                    .then(function(choiceResult){

                        if (choiceResult.outcome === 'accepted') {
                            console.log('User accepted the A2HS prompt');
                        } else {
                            console.log('User dismissed the A2HS prompt');
                        }

                        deferredPrompt = null;

                    });}
        }
    </script>
@endpush
