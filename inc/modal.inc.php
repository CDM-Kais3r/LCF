<div class="modal fade" id="modalPSalarial" tabindex="-1" aria-labelledby="modalSalarialLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSalarialLabel">Pretenção Salarial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="border-bottom">Digite sua pretenção salarial por hora trabalhada.</div>
          <div class="mb-3 mt-3 row">
            <label for="staticPSalarialDe" class="col-sm-2 col-form-label">Valor/h:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="R$ 0,00">
              </div>            
          </div>
         
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-dark">Aplicar alterações</button>
        </div>
      </div>
    </div>
  </div>
</div>
 
<div class="modal fade" id="modalPAtuacao" tabindex="-1" aria-labelledby="modalPAtuacaoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPAtuacaoLabel">Atuação</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="border-bottom">Altere sua área de atuação abaixo.</div>
          <div class="mb-3 mt-3 row">
            <label for="staticDevAtuacao" class="col-sm-3 col-form-label">Área de Atuação: </label>
            <div class="col-sm-9">
              <input list="developerArea" class="form-control" name="txtDeveloperArea" id="txtDeveloperArea">
                <datalist id="developerArea">
                  <option value="Front-End">
                  <option value="Back-End">
                  <option value="Full-Stack">
                  <option value="Mobile">
                  <option value="Java">
                  <option value="Ruby">
                  <option value="Delphi">
                </datalist>
              </div>            
            </div>
            <div class="mb-3 mt-3 row">
              <label for="staticDevNivel" class="col-sm-3 col-form-label">Nível: </label>
              <div class="col-sm-9">
                <input list="developerNivel" class="form-control" name="txtDeveloperNivel" id="txtDeveloperNivel">
                <datalist id="developerNivel">
                  <option value="Junior">
                  <option value="Pleno">
                  <option value="Senior">
                </datalist>
              </div>            
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-dark">Aplicar alterações</button>
          </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalPLanguage" tabindex="-1" aria-labelledby="modalPLanguageLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPLanguageLabel">Idiomas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="border-bottom">Sabe falar outro idioma? Marque todos os quais você sabe junto do nível de afinidade com o mesmo.</div>
        <div class="mb-3 mt-3 row">
          <label for="languageNew" class="col-sm-3 col-form-label">Idiomas:</label>
            <div class="col-sm-9">
              <input type="text" list="languageNew" id="txtLanguageNew" name="txtLanguageNew" class="form-control">
                <datalist id="languageNew">
                  <option value="Inglês">
                  <option value="Japonês">
                  <option value="Mandarim">
                  <option value="Russo">
                  <option value="Filipino">
                  <option value="Coreano">
                </datalist>
            </div>            
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="border-top py-3 border-bottom">Idiomas selecionados anteriormente.</div>
          </div>           
        </div>
        <div class="mb-3 mt-3 row">
          <div class="col-sm-6 text-end">Inglês</div>
          <div class="col-sm-6 text-start"><a href="#"><i class="bi bi-trash text-danger"></i></a></div>
        </div>
        <div class="mb-3 mt-3 row">
          <div class="col-sm-6 text-end">Inglês</div>
          <div class="col-sm-6 text-start"><a href="#"><i class="bi bi-trash text-danger"></i></a></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-dark">Aplicar alterações</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalPSocial" tabindex="-1" aria-labelledby="modalPSocialLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPSocialLabel">Redes Sociais</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <div class="modal-body">
      <div class="border-bottom">Preencha os campos com seu usuário em cada rede.</div>
        <div class="mb-3 mt-3 row">
        <label for="staticPFacebook" class="col-sm-3 col-form-label">GitHub: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="txtFacebookSocial" placeholder="">
        </div>            
        </div>
        <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Linkedin: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtInstagramSocial">
            </div>            
        </div>
        <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">E-mail: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtEmail">
            </div>            
        </div>
       
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-dark">Aplicar alterações</button>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="modalInfo" tabindex="-1" aria-labelledby="modalInfoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalInfoLabel">Informações</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <div class="modal-body">
      <div class="border-bottom">Altere suas informações.</div>
        <div class="mb-3 mt-3 row">
        <label for="staticPFacebook" class="col-sm-3 col-form-label">Gênero: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="txtGenero" placeholder="">
        </div>            
        </div>
        <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">E-mail: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtEmail" placeholder="">
            </div>            
        </div>
		 <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Cidade: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtCidade" placeholder="">
            </div>            
        </div>
         <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Idade: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtIdade" placeholder="">
            </div>            
        </div>
		 <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Celular: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtCelular" placeholder="">
            </div>            
        </div>
		 <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">País: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtPaís" placeholder="">
            </div>            
        </div>
		<div class="mb-3 mt-3 row">
            <label for="staticPInstagram" class="col-sm-3 col-form-label">Resumo:</label>
			<div class="">
        <textarea name="txtResumo" id="txtResumo" cols="10" rows="10" class="form-control"></textarea>
			</div>  
        </div>
		
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-dark">Aplicar alterações</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalSkills" tabindex="-1" aria-labelledby="modalSkillsLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSkillsLabel">Skills</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="border-bottom">Altere suas skills abaixo.</div>
          <div class="mb-3 mt-3 row">
            <label for="staticHabilidades" class="col-sm-3 col-form-label">Habilidades: </label>
            <div class="col-sm-9">
              <input list="habilidades" class="form-control" name="txtHabilidade" id="txtHabilidade">
                <datalist id="habilidades">
                  <option value="User Experience">
                  <option value="E-Commerce Strategy"> 
                  <option value="Business Process">
                </datalist>
              </div>            
            </div>
			
			 <div class="mb-3 mt-3 row">
            <label for="staticSoftwares" class="col-sm-3 col-form-label">Softwares: </label>
            <div class="col-sm-9">
              <input list="softwares" class="form-control" name="txtSoftwares" id="txtSoftwares">
                <datalist id="softwares">
                  <option value="Trello">
                  <option value="Visual Studio Code"> 
                  <option value="Miro">
                </datalist>
              </div>            
            </div>
			
			 <div class="mb-3 mt-3 row">
            <label for="staticMetodologias" class="col-sm-3 col-form-label">Metodologias: </label>
            <div class="col-sm-9">
              <input list="metodologias" class="form-control" name="txtMetodologias" id="txtMetodologias">
                <datalist id="metodologias">
                  <option value="Kanban">
                  <option value="Scrum">
                </datalist>
              </div>            
            </div>
			
			 <div class="mb-3 mt-3 row">
            <label for="staticLinguagensFrameworks" class="col-sm-3 col-form-label">Linguagens/<br>Frameworks: </label>
            <div class="col-sm-9">
              <input list="linguagensFrameworks" class="form-control" name="txtLinguagensFrameworks" id="txtLinguagensFrameworks">
                <datalist id="linguagensFrameworks">
                  <option value="Javascript">
                  <option value="React">
				   <option value="Vue.Js">
                </datalist>
              </div>            
            </div>
			
			<div class="mb-3 mt-3 row">
            <label for="staticDatabase" class="col-sm-3 col-form-label">Database: </label>
            <div class="col-sm-9">
              <input list="database" class="form-control" name="txtDatabase" id="txtDatabase">
                <datalist id="database">
                  <option value="MySQL">
                  <option value="Cassandra">
				   <option value="Oracle">
                </datalist>
              </div>            
            </div>
			   <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-dark">Aplicar alterações</button>
          </div>
        </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalExperiencia" tabindex="-1" aria-labelledby="modalExperiencialabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalExperiencialabel">Adicionar Experiência</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <div class="modal-body">
        <div class="mb-3 mt-3 row">
        <label for="staticPFacebook" class="col-sm-3 col-form-label">Nome da Empresa: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="txtEmpresa" placeholder="">
        </div>            
        </div>
        <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Cargo: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtCargo" placeholder="">
            </div>            
        </div>
		 <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Tipo de Trabalho: </label>
            <div class="col-sm-9">
			   <input list="trabalho" class="form-control" name="txtTrabalho" id="txtTrabalho" placeholder="">
                <datalist id="trabalho">
                  <option value="Full-time">
                  <option value="Freelancer">
				   <option value="Autônomo">
                </datalist>
            </div>            
        </div>
         <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Data de Início: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtIdade" placeholder="mm/aaaa">
            </div>            
        </div>
		 <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Data de Término: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtCelular" placeholder="mm/aaaa">
            </div>            
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-dark">Aplicar alterações</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="modalEducacao" tabindex="-1" aria-labelledby="modalEducacaoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEducacaoLabel">Adicionar Educação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <div class="modal-body">
        <div class="mb-3 mt-3 row">
        <label for="staticPFacebook" class="col-sm-3 col-form-label">Universidade/<br>Escola: </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="txtUniversidadeEscola" placeholder="">
        </div>            
        </div>
        <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Nome do curso: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtCurso" placeholder="">
            </div>            
        </div>
		 <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Grau de formação: </label>
            <div class="col-sm-9">
			   <input list="formacao" class="form-control" name="txtFormacao" id="txtFormacao" placeholder="">
                <datalist id="formacao">
                  <option value="Não Graduado">
                  <option value="Cursos">
				   <option value="Bacharel">
                </datalist>
            </div>            
        </div>
         <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Data de Início: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtDataInicio" placeholder="mm/aaaa">
            </div>            
        </div>
		 <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Data de Término: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtDataTermino" placeholder="mm/aaaa">
            </div>            
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-dark">Aplicar alterações</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<div class="modal fade" id="modalDadosBancarios" tabindex="-1" aria-labelledby="modalDadosBancariosLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDadosBancariosLabel">Dados Bancarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <div class="modal-body">    
		 <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Tipo de Chave Pix: </label>
            <div class="col-sm-9">
			   <input list="pix" class="form-control" name="txtPix" id="txtPix" placeholder="">
                <datalist id="pix">
                  <option value="CPF">
                  <option value="CNPJ">
				   <option value="E-mail">
				   <option value="Telefone">
				   <option value="Chave Aleatória">
                </datalist>
            </div>            
        </div>
         <div class="mb-3 mt-3 row">
          <label for="staticPInstagram" class="col-sm-3 col-form-label">Chave Pix: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="txtDataInicio" placeholder="mm/aaaa">
            </div>            
        </div>         
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-dark">Aplicar alterações</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="modalImageProfissional" tabindex="-1" aria-labelledby="modalImageProfissionalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalImageProfissionalLabel">Imagem</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class='input-DestaqueEmpresa'>
			<label for='input-file'>
				Selecione um arquivo
			</label>
			<input id='input-file' type='file' value=''/>
			<span id='file-name'></span>
			<br>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-dark">Aplicar alterações</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="fundoEscuro"></div>
