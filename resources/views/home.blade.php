@extends('template')

@section('baner')
<section class="offer">
        <h1> WE OFFER</h1>
        <p>It's not about money, it's about quality.</p>
        <div class="row">
            <div class="col">
                <h3>MERCHANDISE</h3>
                <p>Merchandise is one of the knick-knacks that we often encounter and has been widely used by various parties in any particular event or event.
                     For merchandise recipients, the benefits can be used for various daily activities, such as mugs, clothes, or bags.</p>
            </div>
            <div class="col">
                <h3>CINEMATOGRAPHY</h3>
                <p>Cinematography is a field of science that discusses techniques
                     and combining images so that a series of ideas are conveyed and the art and skill of making films by assembling stories through pictures or visuals..</p>
            </div>
            <div class="col">
                <h3>ANIMATION</h3>
                <p>Animation is the rapid change of successive images to create the illusion of movement. In simpler terms,
                     Bloop Animation explains that animation is the art of animate illustrations of an inanimate object or character.</p>
            </div>
        </div>
    </section>

    <section class="merchandise">
        <h1 id="mechandise">MERCHANDISE</h1>
        <p>Quality clothes with contemporary outfit styles.</p>
        <div class="row">
            <div class="mcol">
             <img src="jpg/male-fashion-wooden-floor-young-man-posing.jpg" alt="">
             <div class="layer">
                <h3>Pants</h3>
             </div>
            </div>
            <div class="mcol">
                <img src="jpg/man-simple-white-tee-studio-portrait.jpg" alt="">
                <div class="layer">
                   <h3>T-Shirt </h3>
                </div>
               </div>
               <div class="mcol">
                <img src="jpg/leather-shoes-wooden-background.jpg" alt="">
                <div class="layer">
                   <h3>Shoes</h3>
                </div>
               </div>
        </div>
        <div class="buy">
            <a href="formmerchandise.html"> <i class="fas fa-shopping-cart"></i> <p>Pre-Order</p> </a>
        </div>
    </section>

@endsection