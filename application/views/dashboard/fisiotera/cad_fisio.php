<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


<?php $this->load->view('Lista/coluna'); ?>

<main class="content">

<?php $this->load->view('Lista/lateralenf'); ?>

<div class="py-4">
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
    <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Prontuário Fisioterápico</li>
</ol>
</nav>
<div class="d-flex justify-content-between w-100 flex-wrap">
<div class="mb-3 mb-lg-0">
    <h1 class="h4">Ficha de Avaliação Fisioterápica do idoso</h1>
    <p class="mb-0">Centro Feminino de Longa Permanência</p>
</div>

</div>
</div>
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body shadow-sm mb-4">
                <h2 class="h5 mb-4">1. IDENTIFICAÇÃO DO PACIENTE</h2>
                <form method="post" action="cadidoso">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="first_name">Nome completo:</label>
                                <input class="form-control" id="first_name" name ="nome" type="text" placeholder="" >
                            </div>
                        </div>


                        <div class="col-md-4 mb-3">
                          <label for="birthday">Data de nascimento</label>
                          <div class="input-group">
                              <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                              <input data-datepicker="" class="form-control" name ="data" id="birthday" type="text" placeholder="Dia/Mês/Ano" >
                           </div>
                        </div>
                          <div class="col-md-4 mb-3">
                              <div>
                                  <label for="first_name">Naturalidade:</label>
                                  <input name ="bairro" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <div>
                                  <label for="first_name">Estado civil:</label>
                                  <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <div>
                                  <label for="first_name">Sexo biológico:</label>
                                  <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                          </div>
                          <div class="col-md-4 mb-3">
                              <div>
                                  <label for="first_name">Lateralidade:</label>
                                  <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <div>
                              <label for="first_name">Documento pessoal:</label>
                              <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                            </div>
                        </div>

                      <h2 class="h5 my-4">2. AVALIAÇÃO | HISTÓRIA CLÍNICA</h2>

                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label for="birthday">Data da avaliação</label>
                        <div class="input-group">
                            <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                            <input data-datepicker="" class="form-control" name ="data" id="birthday" type="text" placeholder="Dia/Mês/Ano" >
                         </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="first_name">Queixa principal:</label>
                                <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                            </div>
                        </div>
                      </div>
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="first_name">Fumante:</label>
                                <input name ="cidade" class="form-control" id="first_name" type="number" placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="first_name">Dorme bem:</label>
                                <input name ="cidade" class="form-control" id="first_name" type="number" placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div>
                                <label for="first_name">Exercício Físico:</label>
                                <input name ="cidade" class="form-control" id="first_name" type="number" placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <div>
                            <label for="first_name">Alcoolista:</label>
                            <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                          </div>
                      </div>
                        <div class="col-md-4 mb-3">
                            <div>
                              <label for="first_name">Alimentação saudável:</label>
                              <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-3">
                              <div>
                                  <label for="first_name">Observações:</label>
                                  <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-3">
                              <div>
                                  <label for="first_name">História progressa da doença:</label>
                                  <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-3">
                              <div>
                                  <label for="first_name">História atual da doença:</label>
                                  <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-3">
                              <div>
                                  <label for="first_name">Antecedentes pessoais:</label>
                                  <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-3">
                              <div>
                                  <label for="first_name">Antecedentes familiares:</label>
                                  <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-3">
                              <div>
                                  <label for="first_name">Tratamentos realizados:</label>
                                  <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                              </div>
                          </div>
                        </div>
                    </div>
                    <h2 class="h5 mb-4">3. EXAME FÍSICO</h2>

                    <div class="row">
                      <div class="col-md-4 mb-3">
                          <div>
                              <label for="first_name">Frequência cardíaca:</label>
                              <input name ="cidade" class="form-control" id="first_name" type="number" placeholder="" >
                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div>
                              <label for="first_name">Temperatura (°C):</label>
                              <input name ="cidade" class="form-control" id="first_name" type="number" placeholder="" >
                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div>
                              <label for="first_name">Frequência respiratória:</label>
                              <input name ="cidade" class="form-control" id="first_name" type="number" placeholder="" >
                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div>
                          <label for="first_name">Pressão arterial:</label>
                          <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                        </div>
                    </div>
                      <div class="col-md-4 mb-3">
                          <div>
                            <label for="first_name">Saturação:</label>
                            <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="first_name">Diagnóstico fisioterapêutico:</label>
                                <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="first_name">Prognóstico fisioterapêutico:</label>
                                <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="first_name">Plano terapêutico:</label>
                                <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="first_name">Objetivo:</label>
                                <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                            </div>
                        </div>
                      </div>
                    </div>


            </div>
        </div>
    </div>




<footer class="footer section py-5">
<div class="row">
<div class="col-12 col-lg-6 mb-4 mb-lg-0">
    <p class="mb-0 text-center text-xl-left">Copyright © 2021-<span class="current-year"></span> <a
            class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Flavio e Jonnatha</a></p>
</div>


</div>
</footer>
</main>
