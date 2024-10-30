<div class=" d-flex flex-container justify-content-end mt-5">
    <div class=" Mailing">
        <h1 class="mailingTitle">Узнавайте первыми</h1>
        <p class="mailingText mt-3 mb-2">Подпишитесь на новостную рассылку с самыми интересными новостями и акциями</p>

        <form action="" method="POST">
            {{-- {{ route('contact.submit') }} --}}
            @csrf
            <div class="formGroup mt-3">
                <label  for="userEmail">Эл. почта</label>
                <input type="email" class="form-control emailInput" id="userEmail" name="userEmail" placeholder="Figur@mail.ru" required>
            </div>
            <div class="formGroup mt-3">
                <label for="userName">Имя</label>
                <input type="text" class="form-control nameInput" id="userName" name="userName" placeholder="Введите имя" required>
            </div>
            <div class="form-check mt-3 mb-3">
                <input class="form-check-input agreement-checkbox" type="checkbox" id="userAgreement" name="userAgreement" required>
                <label class="form-check-label" for="userAgreement">
                    Вы соглашаетесь на обработку ваших персональных данных
                </label>
            </div>
            <button type="submit" class="btn_tat_black">Отправить</button>
        </form>
    </div>
    <div class="imgMailing"></div>
</div>
