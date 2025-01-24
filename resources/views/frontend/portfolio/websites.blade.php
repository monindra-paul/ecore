@extends('frontend.layout.portfolio')
@section('mainsection-portfolio')


<!-- Projects -->
    <div class="doro-projects">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta">Take a Look at</span>
                    <h2 class="doro-heading animate-box" data-animate-effect="fadeInLeft">Our Website Projects</h2>
                </div>
            </div>
            <div class="row">

                @foreach ($allwebsites as $website)        
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <a href="{{$website->link}}" target="blank" class="desc">
                            <div class="project"> <img src="{{ asset('portfolio/website/' . $website->image) }}"
                                    class="img-fluid" alt="">
                                <div class="desc">
                                    <div class="con">
                                        <h3>{{$website->name }}
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#fff" d="m16.004 9.414-8.607 8.607-1.414-1.414L14.589 8H7.004V6h11v11h-2z" opacity="1" data-original="#000000" class=""></path></g>
                                            </svg>
                                        </h3>
                                        <span>{{$website->category}}</span>
                                    </div>                               
                                </div>
                            </div>                        
                        </a>
                    </div>
                @endforeach
            
            </div>
        </div>
    </div>

@endsection