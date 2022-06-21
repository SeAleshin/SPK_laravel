<main class="creation">

    <div class="creation_new_user">

        <h2>Создание нового пользователя</h2>

        <form class="creation_form" action="" method="POST">

            @csrf

            <input type="text" placeholder="email" name='newEmail'> <br>
            <input type="password" placeholder="пароль" name="newPassword"> <br>

            <input type="submit" value="Создать" name="creation">
        </form>
    </div>

</main>
