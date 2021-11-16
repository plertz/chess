<div class="signup_form">
    <form action="../../auth/signup" method="post" autocomplete="off">
        <fieldset>
            <legend>Signup</legend>
            <div class="sign-field">
                <div>
                    <label for="naam">Name:</label>
                    <br>
                    <input type="text" placeholder="Piet" name="naam">
                </div>
                
                <div>
                    <label for="tussenvoegsel">Prefix:</label>
                    <br>
                    <input type="text" placeholder="van" name="tussenvoegsel">
                </div>
                
                <div>
                    <label for="achternaam">Last name:</label>
                    <br>
                    <input type="text" placeholder="Vliet" name="achternaam">
                </div>

                <div>
                    <label for="username">Username:</label>
                    <br>
                    <input type="text" placeholder="Proplayer101" name="username">
                </div>

                <div>
                    <label for="birthYear">Birth year:</label>
                    <br>
                    <input type="date" name="birthyear">
                </div>

                <div>
                    <label for="email">E-mail:</label>
                    <br>
                    <input type="email" placeholder="example@domain.nl" name="email"> 
                </div>

                <div>
                    <label for="phone_number">Phone number</label>
                    <br>
                    <input type="tel" placeholder="06-12345678" name="phone">
                </div>

                <div>
                    <label for="password">Password:</label>
                    <br>
                    <input type="password" placeholder="" name="password">
                </div>
                
                <div>
                    <label for="confirm">Password(confirm):</label>
                    <br>
                    <input type="password" placeholder="" name="confirm">
                </div>

                <div>
                    <input type="submit" value="Sign Up">
                </div>
                
                <div>
                    <a href="../login">Login</a>
                </div>
            </div>
        </fieldset>
    </form>
</div>