<body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


<?php $this->load->view('Lista/coluna'); ?>

        <main class="content">

    <?php $this->load->view('Lista/lateralenf'); ?>

<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ficha de Avaliação Nutricional</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Ficha de Avaliação Nutricional do idoso</h1>
            <p class="mb-0">Centro Feminino de Longa Permanência</p>
        </div>

    </div>
</div>
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card card-body shadow-sm mb-4">
                        <h2 class="h5 mb-4">1. INFORMAÇÕES PESSOAIS</h2>
                        <form method="post" action="cadidoso">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div>
                                        <label for="first_name">Nome do idoso:</label>
                                        <input class="form-control" id="first_name" name ="nome" type="text" placeholder="" >
                                    </div>
                                </div>


                            <div class="col-md-6 mb-3">
                                <div>
                                    <label for="first_name">Idade:</label>
                                    <input name ="idade" class="form-control" id="first_name" type="number" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div>
                                  <label for="first_name">Localidade:</label>
                                  <input name ="rg" class="form-control" id="first_name" type="text" placeholder="" >
                                </div>
                            </div>

                              <h2 class="h5 my-4">2. AVALIAÇÃO DO IDOSO</h2>

                            <div class="row">
                              <div class="col-md-4 mb-3">
                                <label for="birthday">Data </label>
                                <div class="input-group">
                                    <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                    <input data-datepicker="" class="form-control" name ="data" id="birthday" type="text" placeholder="Dia/Mês/Ano" >
                                 </div>
                              </div>
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <label for="first_name">Altura:</label>
                                        <input name ="bairro" class="form-control" id="first_name" type="number" placeholder="cm" >
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <label for="first_name">CC:</label>
                                        <input name ="cidade" class="form-control" id="first_name" type="number" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <label for="first_name">CB:</label>
                                        <input name ="cidade" class="form-control" id="first_name" type="number" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <label for="first_name">AJ:</label>
                                        <input name ="cidade" class="form-control" id="first_name" type="number" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <div>
                                    <label for="first_name">ME:</label>
                                    <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                                  </div>
                              </div>
                                <div class="col-md-4 mb-3">
                                    <div>
                                      <label for="first_name">IMC:</label>
                                      <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div>
                                      <label for="first_name">Estado Nutricional:</label>
                                      <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <h2 class="h5 mb-4">3. VCT</h2>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                  <div>
                                      <label for="first_name">Via de Administração da Dieta:</label>
                                      <select name ="grauresp" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Esposo (a)">Oral</option>
                                          <option value="Filho (a)">Enteral</option>
                                            <option value="Genro/nora">Parenteral</option>
                                      </select>
                                  </div>
                                </div>
                            </div>
                            <h2 class="h5 mb-4">4. TIPO DE DIETA</h2>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                  <div>
                                      <label for="first_name">Alergia ou intolerância alimentar:</label>
                                      <select name ="grauresp" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Esposo (a)">Sim</option>
                                          <option value="Filho (a)">Não</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div>
                                      <label for="first_name">Se sim, qual?:</label>
                                      <input name ="cidade" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <div>
                                      <label for="first_name">Deambula:</label>
                                      <select name ="grauresp" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Esposo (a)">Sim</option>
                                          <option value="Filho (a)">Não</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <div>
                                      <label for="first_name">Diabetes:</label>
                                      <select name ="grauresp" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Esposo (a)">Sim</option>
                                          <option value="Filho (a)">Não</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <div>
                                      <label for="first_name">Hipertensão:</label>
                                      <select name ="grauresp" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Esposo (a)">Sim</option>
                                          <option value="Filho (a)">Não</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <div>
                                      <label for="first_name">Constipação:</label>
                                      <select name ="grauresp" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Esposo (a)">Sim</option>
                                          <option value="Filho (a)">Não</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <div>
                                      <label for="first_name">Diarréia:</label>
                                      <select name ="grauresp" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Esposo (a)">Sim</option>
                                          <option value="Filho (a)">Não</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <div>
                                      <label for="first_name">Método de Estimativa:</label>
                                      <select name ="grauresp" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Esposo (a)">Sim</option>
                                          <option value="Filho (a)">Não</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <div>
                                      <label for="first_name">Grau de Dependência:</label>
                                      <select name ="grauresp" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                          <option selected></option>
                                          <option value="Esposo (a)">Grau I</option>
                                          <option value="Filho (a)">Grau II</option>
                                          <option value="Filho (a)">Grau III</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <div>
                                        <label for="first_name">Observação:</label>
                                        <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <h2 class="h5 mb-4">5. FICHA DE EVOLUÇÃO NUTRICIONAL</h2>

                            <div class="row">
                              <div class="col-md-12 mb-3">
                                  <div>
                                      <label for="first_name">Observação:</label>
                                      <input name ="ruaresp" class="form-control" id="first_name" type="text" placeholder="" >
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
