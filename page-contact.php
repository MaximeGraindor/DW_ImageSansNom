<?php get_header(); ?>
<main>
    <div class="contact__intro">
        <div class="contact__wrap contact__intro__content">
            <span class="isn-corner">l'</span>
            <span class="isn-corner">image</span>
            <span class="isn-corner">sans</span>
            <span class="isn-corner">nom</span>
            <div class="contact__intro__left">
                <h1 class="contact__intro__title">
                    <span>Contact</span>
                </h1>
                <div class="contact__infos">
                    <p class="contact__description">
                        Vous pouvez nous trouvez via nos informations ci-dessous mais aussi via notre formulaire.
                    </p>
                    <p class="contact__adress">
                        Place Vivegnis 6, 4000 Liège
                    </p>
                    <p class="contact__phone">
                        0485/84 79 77
                    </p>
                    <p class="contact__email">
                        limagesansnom@gmail.com
                    </p>
                </div>
            </div>
            <div class="contact__intro__right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2529.65916058447!2d5.586833615798751!3d50.65202088070098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f09efd899003%3A0xfd80007f7a26fee7!2sPlace%20Vivegnis%206%2C%204000%20Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1598042883763!5m2!1sfr!2sbe"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <div class="contact__form">
        <p class="contact__title">
            Une question ? besoin d'un rendez-vous ? N'hésitez pas à nous contacter!
        </p>
        <form action="" method="get">
            <p class="form__firstname">
                <label for="firstname">Prénom*</label>
                <input type="text" id="firstname" name="firstname">
            </p>
            <p class="form__name">
                <label for="name">Nom*</label>
                <input type="text" id="name" name="name">
            </p>
            <p class="form__email">
                <label for="email">Email*</label>
                <input type="text" id="email" name="email">
            </p>
            <p class="form__phone">
                <label for="phone">Téléphone*</label>
                <input type="text" id="phone" name="phone">
            </p>
            <p class="form__subject">
                <label for="subject">Sujet*</label>
                <select name="subject" id="subject">
                    <option value="">--Choissisez un sujet--</option>
                    <option value="dog">Une question</option>
                    <option value="cat">Visite</option>
                    <option value="hamster">rendez-vous</option>
                    <option value="parrot">autre</option>
                </select>
            </p>
            <p class="form__message">
                <label for="message">Message*</label>
                <textarea name="" id="message" cols="30" rows="10"></textarea>
            </p>
            <p class="form__submit">
                <button type="submit">Envoyer</button>
            </p>
        </form>
    </div>
</main>

<?php get_footer(); ?>

