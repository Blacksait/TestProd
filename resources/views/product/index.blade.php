@extends('layout.main')

@section('content')


    <!-- Page Content
        ================================================== -->
    <div class="full-page-container">

        <div class="full-page-sidebar">
            <div class="full-page-sidebar-inner" data-simplebar>
                <form method="GET" action="/product">
                    <div class="sidebar-container">
                        <!-- Keywords -->
                        <div class="sidebar-widget">
                            <h3>Keywords</h3>
                            <div class="keywords-container">
                                <div class="keyword-input-container">
                                    <input type="text" name="name" class="keyword-input" placeholder="Name" value="{{request()->name}}">
                                </div>
                                <div class="keywords-list"><!-- keywords go here --></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>


                        <div class="sidebar-widget">
                            <h3>Sort by:</h3>
                            <select class="selectpicker hide-tick" name="more_types">
                                <option @if(request('more_types') == 'Newest') selected @endif name="more">Newest</option>
                                <option @if(request('more_types') == 'Oldest') selected @endif name="more">Oldest</option>
                                <option @if(request('more_types') == 'Dearest') selected @endif name="more">Dearest</option>
                                <option @if(request('more_types') == 'Cheapest') selected @endif name="more">Cheapest</option>
                            </select>
                        </div>


                        <!-- Category -->
                        <div class="sidebar-widget">
                            <h3>Category</h3>
                            <select class="selectpicker default" multiple data-selected-text-format="count" name="category_types[]" data-size="7" title="All Categories" >
                                @foreach(\App\Category::all() as $category)
                                    <option name="{{$category->name}}" @if(in_array($category->label, request('category_types',[]))) selected @endif>{{ $category->label  }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Salary -->
                        <div class="sidebar-widget">
                            <h3>Salary</h3>
                            <div class="margin-top-55"></div>

                            <!-- Range Slider -->
                            <input class="range-slider" type="text" value="" name="slider" data-slider-currency="$" data-slider-min="100" data-slider-max="15000" data-slider-step="100" data-slider-value="[100,15000]"/>
                        </div>
                    </div>


                    <!-- Sidebar Container / End -->

                    <!-- Search Button -->
                    <div class="sidebar-search-button-container">
                        <button type="submit" class="button ripple-effect">Search</button>
                    </div>
                    <!-- Search Button / End-->
                </form>
            </div>
        </div>
        <!-- Full Page Sidebar / End -->

        <!-- Full Page Content -->
        <div class="full-page-content-container" data-simplebar>
            <div class="full-page-content-inner">

                <h3 class="page-title">Search Results</h3>
                <div class="listings-container grid-layout margin-top-35">

                @if(count($product) > 0)
                    @foreach($product as $el)
                        <!-- Job Listing -->

                            <a href="/articles/{{$el->id}}" class="job-listing">

                                <!-- Job Listing Details -->
                                <div class="job-listing-details">


                                    <!-- Details -->
                                    <div class="job-listing-description" style="text-align: center">
                                        <h4 class="job-listing-company">{{$el->name}}
                                            @if($el->availability == true)

                                                <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span>
                                            @endif
                                        </h4>
                                        <h3 class="job-listing-title">{{$el->description}}</h3>
                                    </div>
                                </div>

                                <!-- Job Listing Footer -->
                                <div class="job-listing-footer" style="text-align: center">
                                    <ul>
                                        <li><i class="icon-material-outline-account-balance-wallet"></i>${{$el->price}}</li>
                                        <li><i class="icon-material-outline-shopping-cart"></i>{{$el->quantity}}</li>
                                        <li><i class="icon-material-outline-access-time"></i>
                                            <?php
                                            $update_at_day =  e($el->updated_at);
                                            $current_day = date('d-m-Y');
                                            $first_date_transform = strtotime($update_at_day);
                                            $second_date_transform = strtotime($current_day);
                                            $interval = $second_date_transform -$first_date_transform;
                                            $interval = $interval/(60*60*24);
                                            $interval = round($interval);
                                            if ($interval < 0){
                                                echo 0;
                                            }else{
                                                echo $interval;
                                            }
                                            ?>

                                            days ago

                                        </li>
                                    </ul>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p>Статей пока нет</p>
                    @endif
                </div>
            </div>
            {{$product->links("pagination::custom-pg")}}
        </div>
    </div>

@endsection
