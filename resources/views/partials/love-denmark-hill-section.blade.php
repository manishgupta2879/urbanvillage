
<!-- resources/views/partials/love-denmark-hill-section.blade.php -->
<div class="love-denmark-hill-section">
    <style>
        .love-denmark-hill-section {
    display: flex; /* Use Flexbox for layout */
    justify-content: space-between; /* Space between the image and text */
    align-items: center; /* Center items vertically */
    background-color: #1A1033; /* Background color for the section */
    padding: 40px; /* Padding around the section */
    border-radius: 20px; /* Rounded corners for the section */
    max-width: 1200px; /* Maximum width for the section */
    margin: 0 auto; /* Center the section horizontally */
}

.image-container {
    flex: 1; /* Take up 50% of the width */
    margin-right: 20px; /* Margin between the image and text */
}

.text-container {
    flex: 1; /* Take up 50% of the width */
    background-color: white; /* Background color for text container */
    padding: 30px; /* Padding inside the text container */
    border-radius: 20px; /* Rounded corners for the text container */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
}

.image-placeholder {
    width: 100%; /* Full width image */
    height: auto; /* Maintain aspect ratio */
    border-radius: 10px; /* Rounded corners for the image */
}





.image {
    width: 100%; /* Full width for the image */
    border-radius: 20px; /* Rounded corners for the image */
}



.text-container h2 {
    color: #A22D6C; /* Heading color */
    font-size: 28px; /* Font size for the heading */
    margin-bottom: 15px; /* Margin below heading */
}

.text-container p {
    color: #333; /* Paragraph text color */
    font-size: 16px; /* Font size for paragraphs */
    line-height: 1.6; /* Line height for readability */
    margin-bottom: 15px; /* Margin below paragraphs */
}

.button-container {
    text-align: center; /* Center the button */
    margin-top: 20px; /* Margin above the button */
}

.valuation-btn {
    background-color: #e11959; /* Button background color */
    color: white; /* Button text color */
    padding: 12px 24px; /* Button padding */
    border-radius: 25px; /* Rounded corners for the button */
    text-decoration: none; /* Remove underline from the link */
    font-weight: bold; /* Bold text */
    display: inline-block; /* Display as inline block */
    transition: background-color 0.3s ease; /* Smooth hover effect */
}

.valuation-btn:hover {
    background-color: #d41653; /* Hover color */
}
        </style>
    <div class="image-container">
        <<img src="{{ asset('images/' . $imagePath) }}" alt="{{ $imageAlt }}" class="image">

    </div>
    <div class="text-container">
        <h2>{{ $heading }}</h2>
        @foreach($paragraphs as $paragraph)
            <p>{{ $paragraph }}</p>
        @endforeach
        <div class="button-container">
            <a href="{{ $buttonLink }}" class="btn valuation-btn">{{ $buttonText }}</a>
        </div>
    </div>
</div>
