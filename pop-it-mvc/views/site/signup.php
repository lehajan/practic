<div>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <fieldset>
            <pre><?= $message ?? ''; ?></pre>
            <h2>Регистрация</h2>
            <label>Имя <input type="text" name="name"></label>
            <label>Логин <input type="text" name="login"></label>
            <label>Пароль <input type="password" name="password"></label>
            <select hidden="hidden" name="role_id">
                <option value="2"</option>
            </select>
            <button>Зарегистрироваться</button>
        </fieldset>
    </form>
</div>