@csrf

<input type="text" name="name" placeholder="*Ваше имя" required>
<input type="tel" name="tel" placeholder="*Телефон (начиная с 8)" required>
<input type="email" name="email" placeholder="Email" required>
<input type="submit" name="send_contact_data" value="Отправить заявку">
<br>
<textarea name="body" class="body"></textarea>
<br>
<input type="checkbox" name="agreement" required>
<p> <a href="/other/soglasiye_na_obrabotku_personal'nykh_dannykh.pdf">*Согласен на обработку персональных данных</a></p>
