<main>
  
   

    <!-- SEZIONE CARD -->
    <div class="bg-dark my-second-header">
        <div class="container bg-dark my-padd">
            <div class="  pb-4">

                <button class="my-btn2 fw-bold text-white ">CURRENT SERIES</button>

            </div>

            <div class=" row row-cols-1  row-cols-md-3 g-4 ">
                <div class="col-md-2 " v-for="(Contents, i) in cardItems " :key="('contents n°' + i)">
                    <div class="card bg-dark border-0 text-white pt-4 pb-4">
                        <img src="{{ Vite::asset('resources/img/adv.jpg') }} " style="height:50px " alt="">
                        <div class="card-body">
                            <h5 class="card-title">fff</h5>
                            <p class="card-text fw-light m-neg"><small><em>ff</em></small> </p>
                            <p class="card-text fw-light"><small>fff</small> </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center pb-4">

                <button class="  bg-primary fw-bold border-0 text-white ">LOAD MORE</button>

            </div>

        </div>
    </div>
</main>