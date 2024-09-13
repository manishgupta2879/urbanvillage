<!-- resources/views/partials/free-valuation.blade.php -->
<section class="our-story position-relative my-2 my-lg-5 valuation position-relative">
    <style>
        .area-guides-section {
    text-align: center; /* Center-aligns the text */
    padding: 20px; /* Padding around the section */
    margin: 0 auto; /* Centers the section horizontally */
    max-width: 800px; /* Sets a maximum width for the content */
}

.area-guides-heading {
    color: #A22D6C; /* Heading color */
    font-size: 32px; /* Font size for the heading */
    margin-bottom: 10px; /* Margin below the heading */
    font-family: 'DM Serif Display', serif; /* Font family for the heading */
    font-weight: normal; /* Normal font weight */
}

.area-guides-subtitle {
    color: #333; /* Subtitle text color */
    font-size: 18px; /* Font size for the subtitle */
    line-height: 1.5; /* Line height for better readability */
    margin: 0; /* No margin to keep it tight to the heading */
}
        </style>
    <img src="{{ $imagePath }}" alt="{{ $imageAlt }}">
    <h2 class="text-white position-relative">{{ $heading }}</h2>
    <div class="body-component text-center mx-0">
        @foreach($paragraphs as $paragraph)
            <p>{{ $paragraph }}</p>
        @endforeach
        <div class="d-flex justify-content-center pt-4 pt-lg-5">
            <a href="{{ $buttonLink }}" class="book-now text-white d-flex justify-content-center align-items-center">{{ $buttonText }}</a>
        </div>
    </div>
</section>
