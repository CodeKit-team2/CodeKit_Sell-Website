<style>
  .slider {
    display: none;
  }
</style>

<div class="w-full">
    <div class="slider w-full">
        <img class="opacity-75" src="{{ URL::to('/assets/img/converse.jpg') }}">
    </div>
    <div class="slider w-full">
        <img class="opacity-75" src="{{ URL::to('/assets/img/converse2.jpg') }}">
    </div>
    <div class="slider w-full">
        <img class="opacity-75" src="{{ URL::to('/assets/img/converse3  .jpg') }}">
    </div>
</div>

<script>
  let slideIndex = 0;
  
  const showSlides = () => {
    let i;
    let slides = document.getElementsByClassName('slider');
    // console.log(slides);
    for(i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000);
  }

  showSlides();
  
</script>