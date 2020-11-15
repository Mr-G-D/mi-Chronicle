@extends('layouts.welcome')

@section('style')

    <style>
        .container {
            
            text-align: center;
            color:#fff;
            
        }

            * { text-decoration: none;}
    </style>
    
@endsection

@section('script')

    <script>
        var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    </script>
    
@endsection

@section('content')

    <div class="container" >
        <div class="row" >
            <div class="col align-self-center " style="padding: 25%" >
                <h1>
                    <p  class="typewrite" data-period="2000" data-type='[ "Never miss a Beautiful Memory.", "Keep your Moments Forever", "Safegaurd Your Feelings.", "Love your Thoughts" ]'>
                        <span class="wrap">hello</span>
                    </p>
                </h1>
                <strong><a class="btn btn-outline-light" href="{{route('register')}}" role="button" style="border-radius: 20px"> Get Started</a></strong>
            </div>
        </div>
    </div>
    

     
    
@endsection

@section('login')

<div class="float-right">
    <a class="btn btn-outline-light" href="{{ route('login') }}" role="button" style="border-radius: 20px">LOGIN</a>
</div>
    
@endsection
