<section id="contacto" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contáctanos</h2>
        <p>Puedes contactarnos por nuestros diferentes medios, asi como visitarnos directamente en nuestras instalaciones.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-6 ">
                <div class="row gy-4">

                    <div class="col-lg-12">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                            data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Visítanos</h3>
                            <p>13a Sur Poniente 880, Col. San Francisco, Tuxtla Gutiérrez, Chiapas</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                            data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Llámanos</h3>
                            <p><a href="tel:9612236697">961 223 6697</a></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                            data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Nuestro Correo</h3>
                            <p><a href="mailto:ventas@red-ink.store">ventas@red-ink.store</a></p>
                        </div>
                    </div><!-- End Info Item -->

                </div>
            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="500">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Ingrese su nombre" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Asunto" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="4" placeholder="Escriba su mensaje" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Enviar Mensaje</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section>