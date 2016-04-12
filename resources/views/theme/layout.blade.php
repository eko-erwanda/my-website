<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INTERDUST - Web Development</title>
        @include('theme.partials.css')

    </head>
    
    <body>
        <!-- Start navbar section -->
        @include('theme.partials.navbar')
        <!-- End navbar section -->
        <!-- Start home section -->
        @include('theme.partials.home')
        <!-- End home section -->
        <!-- Service section start -->
        @include('theme.partials.service')
        <!-- Service section end -->
        <!-- Portfolio section start -->
        @include('theme.partials.portofolio')
        <!-- Portfolio section end -->
        <!-- About us section start -->
        @include('theme.partials.about')
        <!-- About us section end -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                @if (count($words) == 0)
                    <p class="large-text">Elegance is not the abundance of simplicity. It is the absence of complexity.</p>
                @else
                    <p class="large-text">{{ $words[0]['about_words_3'] }}</p>
                @endif
                <a href="#contact" class="button">Beli Sekarang</a>
            </div>
        </div>
        <!-- Client section start -->
        @include('theme.partials.client')
        <!-- Client section end -->
        <!-- Price section start -->
        @include('theme.partials.paket')
        <!-- Price section end -->
        <!-- Newsletter section start -->
        @include('theme.partials.newsletter')
        <!-- Newsletter section end -->
        <!-- Contact section start -->
        @include('theme.partials.contact')
        <!-- Contact section end -->
        <!-- Footer section start -->
        @include('theme.partials.footer')
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        @include('theme.partials.javascript')
    </body>
</html>