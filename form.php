<?php

    echo '

        <h1> Contato </h1>

           <form class="form-horizontal" method="post" action="envia.php">
                    <fieldset>

            <!-- Form Name -->
            <legend>Fale Conosco</legend>

                <!-- Nome input-->
                <div class="control-group">
                  <label class="control-label" for="nome">Nome:</label>
                  <div class="controls">
                    <input id="nome" name="nome" type="text" placeholder="Insira seu Nome" class="input-xlarge" required>
                  </div>
                </div>

                <!-- Email input-->
                <div class="control-group">
                  <label class="control-label" for="email">Email:</label>
                  <div class="controls">
                    <input id="email" name="email" type="email" placeholder="Insira Seu Email" class="input-xlarge" required>
                  </div>
                </div>

                <!-- Assunto input-->
                <div class="control-group">
                  <label class="control-label" for="assunto">Assunto:</label>
                  <div class="controls">
                    <input id="assunto" name="assunto" type="text" placeholder="Insira seu Assunto" class="input-xlarge" required>
                  </div>
                </div>

                <!-- Textarea -->
                <div class="control-group">
                  <label class="control-label" for="textarea">Mensagem:</label>
                  <div class="controls">
                    <textarea id="textarea" name="textarea" required>  </textarea>
                  </div>
                </div>

                <!-- Submit input -->
                <div class="control-group">
                  <div class="controls">
                    <input type="submit" value="Enviar!" id="singlebutton" name="singlebutton" class="btn btn-primary">
                  </div>
                </div>

                    </fieldset>
            </form>



    ';

?>