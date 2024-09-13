<!-- resources/views/partials/content-image-section.blade.php -->
<div class="content-image-section">
    <style>
        .content-image-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
            margin: 0 auto;
            max-width: 1200px;
        }

        .content-text {
            max-width: 60%;
            margin-right: 20px;
        }

        .subheading {
            color: #A22D6C;
            font-size: 20px;
            font-weight: normal;
            margin-bottom: 10px;
        }

        .main-heading {
            color: #992785;
            font-size: 48px;
            font-weight: normal;
            margin-bottom: 20px;
            font-family: 'DM Serif Display', serif;
        }

        .description {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .btn {
            background-color: #f7f7f7;
            color: #333;
            padding: 10px 20px;
            border-radius: 25px;
            border: 2px solid #f0f0f0;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #eaeaea;
        }

        .content-image {
            max-width: 35%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        iframe {
            border-radius: 10px;
        }
    </style>

    <div class="content-text">
        <h3 class="subheading">{{ $subheading }}</h3>
        <h1 class="main-heading">{{ $mainHeading }}</h1>

        @foreach($descriptions as $description)
            <p class="description">{{ $description }}</p>
        @endforeach

        <div class="button-container">
            <a href="{{ $saleLink }}" class="btn property-btn">Properties for sale</a>
            <a href="{{ $rentLink }}" class="btn property-btn">Properties for rent</a>
        </div>
    </div>
    
    <div class="content-image">
        <iframe width="100%" height="355" class="set-phone-height" src="{{ $videoLink }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
