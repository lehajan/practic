
<div class="register_form">
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <pre><?= $message ?? ''; ?></pre>
            <h2>Регистрация</h2>
            <label>Имя <input type="text" name="name"></label>
            <label>Логин <input type="text" name="login"></label>
            <label>Пароль <input type="password" name="password"></label>
            <select hidden="hidden" name="role_id">
                <option value="1"</option>
            </select>
            <button>Зарегистрироваться</button>
    </form>
</div>


