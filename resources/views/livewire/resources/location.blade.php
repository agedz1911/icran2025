<div>
    <div class="flex flex-col lg:flex-row flex-wrap justify-between">
        <div class="w-full lg:w-1/2 lg:pr-3 mb-5">
            <img src="images/manado/Four_Points_by.jpg" class="w-full max-w-2xl rounded-lg" alt="">
        </div>
        <div class="w-full lg:w-1/2 lg:pl-3 flex flex-col gap-3 mb-5">
            <p>Comfortable stay experience with panoramic sea view and magnificent sunset at The Manado Bay</p>
            <p>Rest assured that comfort and convenience are everywhere at Four Points by Sheraton Manado.
                We offer everything you need, plus the style and extras you’ll love.
            </p>
            <p>The Four Points by Sheraton Manado is located at the capital heart of downtown area Boulevard on Business
                (BOB) district, Our Hotel is greatly ideal for business, leisure, shopping and close by to the
                entertainment areas.
            </p>
            <p>Guest can expect a personalized and attentive service when it’s time for the meeting and social event
                with the size of 2184 square meters consists of one Grand Ballroom and six Meeting rooms made us the
                number one choice for business.</p>
        </div>
        <div class=" w-full lg:w-1/2 lg:pr-8 flex flex-col gap-3 mb-5">
            <p>Exploring the local areas which surrounding our Hotel is the experience that we would strongly recommend
                you, such visiting churches, temple and traditional markets, mountains for hiking and Bunaken Island for
                diving and snorkeling activities.
            </p>
            <p>The distance from the Hotel to the Sam Ratulangi International Airport takes approximately 30 minutes by
                car.
            </p>
        </div>
        <div class=" w-full lg:w-1/2">
            <div class="mockup-window border bg-icran-100">
                <div class="flex justify-center px-4 py-5 bg-slate-100">
                    <div class="carousel w-full">
                        <div id="slide1" class="carousel-item relative w-full ease-in-out duration-300">
                            <figure>
                                <img src="images/manado/ballroom.png" alt="" class="rounded-lg" />
                            </figure>
                            <div
                                class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                                <a href="#" class="btn btn-circle">❮</a>
                                <a href="#" class="btn btn-circle">❯</a>
                            </div>
                        </div>

                        <div id="slide2" class="carousel-item relative w-full ease-in-out duration-300">
                            <p class="text-center"></p>
                            <figure>
                                <img src="images/manado/lobby.png" alt="" class="rounded-lg" />
                            </figure>
                            <div
                                class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                                <a href="#" class="btn btn-circle">❮</a>
                                <a href="#" class="btn btn-circle">❯</a>
                            </div>
                        </div>

                        <div id="slide3" class="carousel-item relative w-full ease-in-out duration-300">
                            <p class="text-center"></p>
                            <figure>
                                <img src="images/manado/room.png" alt="" class="rounded-lg" />
                            </figure>
                            <div
                                class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                                <a href="#" class="btn btn-circle">❮</a>
                                <a href="#" class="btn btn-circle">❯</a>
                            </div>
                        </div>

                        <div id="slide4" class="carousel-item relative w-full ease-in-out duration-300">
                            <p class="text-center"></p>
                            <figure>
                                <img src="images/manado/pool.png" alt="" class="rounded-lg" />
                            </figure>
                            <div
                                class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                                <a href="#" class="btn btn-circle">❮</a>
                                <a href="#" class="btn btn-circle">❯</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let slideIndex = 1;
    // Fungsi untuk menampilkan slide
    function showSlides(n) {
        let slides = document.getElementsByClassName("carousel-item");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
    // Fungsi untuk memindahkan slide ke depan atau ke belakang
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    // Fungsi untuk memindahkan slide secara otomatis
    setInterval(function() {
        plusSlides(1);
    }, 10000); // rotate every 10 seconds
    // Inisialisasi slide
    showSlides(slideIndex);
    // Add event listeners to next and previous buttons
    let nextButtons = document.querySelectorAll('.btn-circle:nth-child(2)');
    let prevButtons = document.querySelectorAll('.btn-circle:nth-child(1)');
    nextButtons.forEach((button, index) => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            plusSlides(1);
        });
    });
    prevButtons.forEach((button, index) => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            plusSlides(-1);
        });
    });
</script>