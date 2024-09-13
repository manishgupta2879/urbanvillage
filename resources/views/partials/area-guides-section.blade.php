<!-- resources/views/partials/area-guides-section.blade.php -->
<div class="area-guides-section">
    <style>
        .item-container {
            position: relative;
            width: 100%;
            max-width: 400px; /* Adjust the size as needed */
        }

        .item-image {
            display: block;
            width: 100%;
            height: auto;
            filter: blur(5px); /* Adjust the blur effect as needed */
            -webkit-filter: blur(5px);
        }

        .item-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2em;
            font-family: Arial, sans-serif;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); /* Adds a shadow to improve readability */
        }

        </style>
    <h2 class="area-guides-heading">{{ $heading }}</h2>
    <p class="area-guides-subtitle">
        {{ $subtitle }}
    </p>
    
    

</div>

<div class="owl-carousel owl-loaded">
    <div class="owl-stage-outer">
        <div class="owl-stage">
            <div class="owl-item cloned" >
                
                    <div class="item-container">
                        <img src="{{ asset('images/dulwich.png') }}" alt="Camberwell" class="item-image">
                        <div class="item-ext">Camberwell</div>
                    </div>
               
            </div>
            <div class="owl-item cloned" >
                
                    <div class="item-container">
                        <img src="{{ asset('images/dulwich.png') }}" alt="Camberwell" class="item-image">
                        <div class="item-ext">Camberwell</div>
                    </div>
               
            </div>
        </div>
    </div>
</div>
