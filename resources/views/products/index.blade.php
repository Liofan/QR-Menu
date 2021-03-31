@extends('layouts.app')


@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <div class="dropdown align-items-lg-center flex-column flex-lg-row">
                <div class="select">
                    <span>Основное Меню</span>
                </div>
                <input type="hidden" name="gender">
                <ul class="dropdown-menu">
                    @foreach($group_menus as $g_menu)


                        <a href="{{ url('med/' . $g_menu->id) }}"><li id="{{$g_menu->id}}">{{$g_menu->name}}</li></a>

                    @endforeach
                </ul>
            </div>

            <div class="info">
                <input type="checkbox" id="pseudoBtn">
                <label for="pseudoBtn" class="btn">^</label>
                <img class="info_img" src="img/med_logo.png" class="preview-header__avatar">


                <h5 class="info_title">МЁД</h5>



                <div class="text">

                    <b>Телефон</b>
                    <p>+7 777-777-77-77</p>

                    <b>Мы в соц сетях</b>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.0419 0H5.95811C2.67279 0 0 2.67279 0 5.95811V14.0419C0 17.3272 2.67279 20 5.95811 20H14.0419C17.3272 20 20 17.3272 20 14.0419V5.95811C20 2.67279 17.3272 0 14.0419 0ZM17.988 14.0419C17.988 16.2213 16.2213 17.988 14.0419 17.988H5.95811C3.77875 17.988 2.012 16.2213 2.012 14.0419V5.95811C2.012 3.77871 3.77875 2.012 5.95811 2.012H14.0419C16.2213 2.012 17.988 3.77871 17.988 5.95811V14.0419Z" fill="#4A4A4A"></path><path d="M9.99998 4.82739C7.14774 4.82739 4.82727 7.14787 4.82727 10.0001C4.82727 12.8523 7.14774 15.1728 9.99998 15.1728C12.8522 15.1728 15.1727 12.8523 15.1727 10.0001C15.1727 7.14783 12.8522 4.82739 9.99998 4.82739ZM9.99998 13.1608C8.25435 13.1608 6.83927 11.7457 6.83927 10.0001C6.83927 8.25448 8.25439 6.83939 9.99998 6.83939C11.7456 6.83939 13.1607 8.25448 13.1607 10.0001C13.1607 11.7457 11.7456 13.1608 9.99998 13.1608Z" fill="#4A4A4A"></path><path d="M15.1827 6.10569C15.8673 6.10569 16.4222 5.55075 16.4222 4.8662C16.4222 4.18165 15.8673 3.62671 15.1827 3.62671C14.4982 3.62671 13.9432 4.18165 13.9432 4.8662C13.9432 5.55075 14.4982 6.10569 15.1827 6.10569Z" fill="#4A4A4A"></path></svg>
                </div>



            </div>

            <span class="msg"></span>
        </div>


            <ul class="categor" id="lightSlider">

                    @foreach($categories as $cat)
                    <a href="#{{$cat->name}}" class="cat_link">
                        <li class="cat_items">
                            <p>{{$cat->name}}</p>
                        </li>
                    </a>
                    @endforeach
            </ul>


            <ul class="list-groupp ">
                <!-- list group item-->

                  {{-- Categories --}}
                @foreach($categories as $cat )
                    @if($cat->publication == 1)
                        <h3 class="title" id="{{$cat->name}}">{{$cat->name}}</h3>


                           {{-- Products --}}
                           @foreach($cat->products as $product)


                            @if($product->publication == 1)
                                <a class="main-link"   href="/med/cat/{{$product->id}}">
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <li class="list-group-item">
                                        <!-- Custom content-->
                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">

                                            <div class="media-body order-2 order-lg-1 ">
                                                <h5 class="mt-0 font-weight-bold mb-2">{{$product->name}}</h5>

                                                <h6 class="font-weight-bold my-2 price">{{$product->price}} &#8376;</h6>

                                            </div>
                                        </div> <!-- End -->
                                    </li> <!-- End -->
                                </a>
                            @endif
                           @endforeach
                    @endif
                @endforeach

            </ul> <!-- End -->

            <div >

                <div >
                    <div >
                        <h1 id="title"></h1>
                        <p id="description"></p>

                        <div ></div>
                    </div>
                </div>


        </div>
    </div>
</div>








@endsection
