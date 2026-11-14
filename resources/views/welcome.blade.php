<x-layouts.main>
    <x-slot:title>Mochilas urbanas y de viaje</x-slot:title>

    <section class="fullwidth-carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carrusel/carrusel1.webp" class="d-block w-100 img-fluid" alt="Mochila en el bosque">
            </div>
            <div class="carousel-item">
                <img src="img/carrusel/carrusel2.webp" class="d-block w-100 img-fluid" alt="Mochila en la ciudad">
            </div>
            <div class="carousel-item">
                <img src="img/carrusel/carrusel3.webp" class="d-block w-100 img-fluid" alt="Mochila en la montaña">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <div class="container">
        <div class="col-sm-12 mb-5">
            <h1 class="text-center my-5">Bienvenido</h1>
            <p class="text-center">En PEAKGEAR vas a descubrir una selección de <strong>mochilas urbanas y de viaje</strong> pensadas para cada estilo de vida. Desde modelos compactos para el día a día hasta mochilas técnicas para grandes recorridos, reunimos las mejores marcas con la combinación perfecta de <em>comodidad, resistencia y diseño.</em></p>
                    <p class="text-center">Tanto si te movés por la ciudad como si estás por emprender tu próxima aventura, en <strong>PEAKGEAR</strong> vas a encontrar <em>la compañera ideal</em> para llevar todo lo que necesitás. Variedad, calidad y funcionalidad en un solo lugar: preparate para moverte con libertad y estilo.</p>
        </div>
    </div>
    </section>

    <section class="container rounded text-center">
            <h2 class="text-center my-5">¿Por qué elegirnos?</h2>

            <div class="row text-center d-flex gap-4 mb-5 justify-content-center">

                <div class="card border-0 p-2">
                    <i class="bi bi-tags fs-2 mt-3"></i>
                        <p class="card-text mb-4">Descuentos exclusivos de cada producto durante el <strong>Sale Day</strong></p>
                </div>

                <div class="card border-0 p-2">
                    <i class="bi bi-truck fs-2 mt-3"></i>
                        <p class="card-text mb-4">En compras superiores a $50000 ofrecemos <strong>envíos gratis</strong> </p>
                </div>

                <div class="card border-0 p-2">
                    <i class="bi bi-star fs-2 mt-3"></i>
                        <p class="card-text mb-4">Mochilas que incluyen garantía por defectos de hasta <strong>6 meses</strong></p>
                </div>

        </div>
    </section>

    <section class="sustainable-content d-flex row g-0 flex-wrap">
        <div class="col-6 col-md-5 p-5">
            <h3 class="fw-bold mb-5 mt-3">Rendimiento responsable</h3>
                    <p>Nuestros productos unen:</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-lightbulb fs-5 me-2"></i><strong>Innovación</strong></li>
                            <li><i class="bi bi-recycle fs-5 me-2"></i><strong>Calidad y reciclaje</strong></li>
                            <li><i class="bi bi-tree fs-5 me-2"></i><strong>Respeto por el medio ambiente</strong></li>
                        </ul>
                    <p>llevando la aventura a otro nivel sin dejar huella.</p>
                    <a href="<?= route('bags.index');?>" class="btn btn-primary mt-5">Ver mochilas</a>
        </div>
        <div class="col-sm-6 col-md-7">
            <img src="{{ url('img/sustainable.webp') }}" alt="Foto de mochila sustentable" class="img-fluid">
        </div>
    </section>
</x-layouts.main>