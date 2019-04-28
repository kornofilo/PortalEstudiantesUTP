                </div></div>
              <div class="col-md-9">
            <form class="form-inline">
              <i class="fas fa-search" aria-hidden="true"></i>
                  <div class="col-xl">
                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Buscar" aria-label="Search">
              </div>
                <!-- <i class="fas fa-bell"></i> -->
            </form>
              @if(count($errors) > 0)
                        <div class="alert alert-danger">
                        <ul>
                  @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                  @endforeach
                        </ul>
                        </div>
              @endif
                <br><br>
                   <br >
                     <div id="anuncios" class="row justify-content-center">
                        <div class="col-md-8">
                           <div class="card">
                              <div class="card-header"><h4>Mis Anuncios</h4></div>
                               @isset($datos)
                                   @foreach ($datos as $data)
                                    <div class="col-md-10 blogShort card m-3 p-5">
                                      <p>
                                      <label>Descripcion: {{isset($descripcion)?$datos:null}}</label>
                                      </p></article>
                                    </div>
                                   @endforeach
                                @endisset
                                        <div class="col-md-12 gap10"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
              </body>
