@include('template.partials.header')

    <div class="intro" style="background-image: url('/template/images/bg6.jpg');">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                    <h1 class="intro-title animated fadeInDown"> Find Classified Ads </h1>

                    <p class="sub animateme fittext3 animated fadeIn">
                        Find local classified ads on bootclassified in Minutes
                    </p>

                    <div class="row search-row animated fadeInUp">
                        <div class="col-xl-4 col-sm-4 search-col relative locationicon">
                            <i class="icon-location-2 icon-append"></i>
                            <input type="text" name="country" id="autocomplete-ajax"
                                   class="form-control locinput input-rel searchtag-input has-icon"
                                   placeholder="City/Zipcode..." value="">

                        </div>
                        <div class="col-xl-4 col-sm-4 search-col relative"><i class="icon-docs icon-append"></i>
                            <input type="text" name="ads" class="form-control has-icon"
                                   placeholder="I'm looking for a ..." value="">
                        </div>
                        <div class="col-xl-4 col-sm-4 search-col">
                            <button class="btn btn-primary btn-search btn-block btn-gradient" id="btn_search">
                                <i class="fa fa-search"></i><strong> Find</strong>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.intro -->

    <div class="main-container">
        <div class="container">

            <div class="col-xl-12 content-box ">
                <div class="row row-featured row-featured-category">
                    <div class="col-xl-12  box-title no-border">
                        <div class="inner"><h2><span>Browse by</span>
                                Category <a href="category.html" class="sell-your-item"> View more <i
                                            class="  icon-th-list"></i> </a></h2>
                        </div>
                    </div>
                    @foreach($categories as $categorie)
                        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                            <a href="#"><img src="" class="img-responsive" alt="img">
                                <h6> {{ $categorie->name}} </h6></a>
                        </div>
                    @endforeach

                </div>


            </div>

            <div style="clear: both"></div>
        </div>
    </div>
    <!-- /.main-container -->

    <div class="page-bottom-info">
        <div class="page-bottom-info-inner">

            <div class="page-bottom-info-content text-center">
                <h1>If you have any questions, comments or concerns, please call the Classified Advertising department
                    at (000) 555-5556</h1>
                <a class="btn  btn-lg btn-primary-dark" href="tel:+000000000">
                    <i class="icon-mobile"></i> <span class="hide-xs color50">Call Now:</span> (000) 555-5555 </a>
            </div>

        </div>
    </div>

</div>
<!-- /.wrapper -->

@include('template.partials.footer')
