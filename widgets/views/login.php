<div class="modal-dialog fgt">
<form id="userLog" action="/" method="post">
    <div class="modal-content rrr">
        <!-- Заголовок модального окна -->
        <div class="modal-header yyy">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title">ВХОД</h4>
        </div>
        <!-- Основное содержимое модального окна -->
        <div class="modal-body kjjh">
            <div class="form-group">
                <label for="username">Имя пользователя или E-mail:</label>
                <input type="text" class="form-control" name="login">
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <p style="display: none;" clas="error" id="login-error">Неверный логин или пароль</p>
        </div>
        <!-- Футер модального окна -->
        <div class="modal-footer modfoot">
            <button type="submit" class="btn btn-primary">Войти</button>
        </div>
    </div>
</form>
</div>