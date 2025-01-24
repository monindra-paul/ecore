@extends('frontend.layout.portfolio')

    <main id="right-p-side">
        <div class="container">
            <div class="row">
                @foreach ($allwebsites as $website)        
                <div class="col-4">
                    <div class="window">
                      <img src="{{ asset('portfolio/website/' . $website->image) }}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
       
      
      
       
      </main>
    