<div>
  <livewire:web.components.cover title="Contato"
                                 text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue tortor, lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam egestas dui tristique"/>
  <section class="contact">
    <div class="container contact__container">
      <form action="#" class="contact__form">
        <div class="contact__form__column">
          <div class="form__input">
            <label for="name" class="visually-hidden">Nome</label>
            <input type="text" name="name" id="name" placeholder="Nome">
          </div>
          <div class="form__input">
            <label for="phone" class="visually-hidden">Telefone</label>
            <input type="text" name="phone" id="phone" placeholder="Telefone">
          </div>
          <div class="form__input">
            <label for="guests" class="visually-hidden">Quantidade de Convidados</label>
            <input type="text" name="guests" id="guests" placeholder="Qtd. de Convidados">
          </div>
          <div class="form__textarea">
            <label for="message" class="visually-hidden">Mensagem</label>
            <textarea name="message" id="message"></textarea>
          </div>
          <button class="form__button form__button--desktop">Solicitar Orçamento</button>
        </div>
        <div class="contact__form__column">
          <div class="form__input">
            <label for="email" class="visually-hidden">E-mail</label>
            <input type="text" name="email" id="email" placeholder="E-mail">
          </div>
          <div class="form__input">
            <label for="date" class="visually-hidden">Data do Evento</label>
            <input type="text" name="date" id="date" placeholder="Data do evento">
          </div>
          <button class="form__button form__button--mobile">Solicitar Orçamento</button>
          <img src="https://picsum.photos/700" alt="" class="form__image">
        </div>
      </form>
    </div>
  </section>
</div>
