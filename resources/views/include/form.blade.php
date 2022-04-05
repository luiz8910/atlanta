<div id="fale">
	<div class="bgFale"></div>

	<div class="contentFale">
		<div class="loading"></div>

		<a href="#" class="closeFale">X</a>

		<form id="formFale" action="{{ route('form.send') }}" method="POST">
            @csrf
			<h5>Fale com a Atlanta Tour</h5>
			<p>Deixe sua mensagem e entraremos em contato o mais breve possível.</p>

			<div class="input-field">
				<input type="text" id="nome" name="name" required>
          		<label for="nome">Seu nome</label>
          	</div>
          	<div class="input-field">
				<input type="email" id="email" name="email" required>
          		<label for="email">Seu e-mail</label>
          	</div>
          	<div class="input-field">
				<input type="tel" id="tel" class="tel" name="tel" maxlength="15" required>
          		<label for="tel">Seu telefone celular</label>
          	</div>
          	<div class="input-field">
				<textarea id="msg" name="msg" class="materialize-textarea"></textarea>
          		<label for="msg">Deixe sua mensagem</label>
          	</div>

          	<div>
				<p>Escolha a forma de contato</p>
				<br>
	          	<p class="check">
			      <label>
			        <input type="checkbox" name="contatoEmail" />
			        <span>E-mail</span>
			      </label>
			      <label>
			        <input type="checkbox" name="contatoCelular" />
			        <span>Celular</span>
			      </label>
			    </p>
		    </div>

			<input type="submit" id="submit" value="Enviar" class="btn">
		</form>
	</div>
</div>
