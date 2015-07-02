
<section id="contact" class="section--lightgray js-section">
  <div class="wrapper">
    <div class="section--light__head">
      <h1 class="section--light__title"><?= $data->title() ?></h1>
    </div>
    <div class="section--light__body">
      <form action="<?= url('contact/contact-form-submit') ?>" method="post" id="contactForm" class="form">
        <div class="form__body">
          <div class="form__cols">
            <div class="form__item form__col">
              <input type="text" id="name" name="name" placeholder="<?= l::get('form name') ?>" class="form__input--text"/>
            </div>
            <div class="form__item form__col">
              <input type="email" id="email" name="_from" placeholder="<?= l::get('form email') ?>" class="form__input--text"/>
            </div>
          </div>
          <div class="form__item">
            <textarea type="message" id="message" name="message" placeholder="<?= l::get('form message') ?>" class="form__input--textarea"> </textarea>
          </div>
        </div>
        <div class="form__foot">
          <input type="text" name="website" id="website" class="uniform__potty"/>
          <input type="hidden" name="_submit" value="<?= $form->token() ?>"/>
          <button type="submit" class="form__input--submit button--ghost_main_active button--lg js-contactFormSubmit"><?= l::get('form submit') ?></button>
        </div>
      </form>
    </div>
  </div>
</section>