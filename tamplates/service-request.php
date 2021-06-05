<audio id="beep__active" src="http://freesound.org/data/previews/263/263133_2064400-lq.mp3"></audio>
<section class="service-request-section">
    <div class="container service-request-section-container">
        <div class="row justify-content-center service-request-section-container-row">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4 contact-wrap__h3">Szervizigénylés</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    <p class="contact-wrap__p">Kérjük töltse ki igénylőlapunkat, hogy segíteni tudjunk!</p>
                                </div>
                                <form action="/service-request" method="POST" id="sendmailSubmit" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label contactForm__label" for="name">Az Ön neve</label>
                                                <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Név" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label contactForm__label" for="name">Telefontípusa</label>
                                                <input type="text" class="form-control" name="phone_name" id="phone_name" placeholder="Telefontípus" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label contactForm__label" for="email">Az Ön email címe</label>
                                                <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email címe" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label contactForm__label" for="email">Az Ön telefonszáma</label>
                                                <input type="text" class="form-control" name="user_tel" id="user_tel" placeholder="Telefonszáma" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label contactForm__label" for="#">Hiba jelenség</label>
                                                <textarea name="user_message" class="form-control" id="user_message" cols="30" rows="4" placeholder="..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" name="event" id="event" value="sendemail">
                                                <input type="submit" value="Igénylés beküldése" class="btn-setting btn-setting--f-size color-black btn-hvr-up btn-blue btn-hvr-white">
                                                <div class="submitting"></div>
                                            </div>
                                            <a class="contactForm__link" href="/">Vissza a főoldalra</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 service-request-section-container-row-img-box">
                            <div class="form-div__email-confirmation-text-box">
                                <div class="alert alert-success form-div__email-confirmation-text-box__alert-box">
                                    <p id="form-div__email-confirmation-text-box__alert-box__p">
                                    </p>
                                </div>
                            </div>
                            <img class="service-request-section-container-row-img-box__img" src="karaKrisz/img/senior-man-with-equipment-soldering-working-home.jpg" alt="Keszimobilos">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>