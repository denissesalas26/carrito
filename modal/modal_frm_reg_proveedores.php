 
 
 
 
 <!-- Large modal -->
 <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".registrar_usuario">+Nuevo</button>

<div class="modal fade registrar_usuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Proveedores</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="registrar_proovedores.php" method="post">
                            

                        <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Ruc :</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="ruc"placeholder="Ingrese su ruc "required>

                            </div>


                            <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">Razon Social</label>
                            <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="nombre"placeholder="Ingrese  nombre  "required>

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Correo:</label>
                                <input type="email"class="form-control col-lg-10 col-md-10 col-sm-12"  name="correo"placeholder="Ingrese el Correo"required>

                            </div>


                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Telefono :</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="telefono"placeholder="Ingrese el Telefono "required>

                            </div>




                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Direccion:</label>
                                <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="direccion"placeholder="Ingrese la Direccion"required>

                            </div>



                            <!---
                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Metodo de Pago</label>
                                <input type="text"class="form-control col-lg-4 col-md-4 col-sm-12"  name="nacimiento"placeholder="Metodo de Pago "required>

                            </div>


                    --->


                            
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12">Metodo de Pago</label>
                               
                                    <select name="stock" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    <option>Seleccione Metodo  </option>
                                    <option>yape</option>
                                     <option>Plin</option>
                                     <option>Interbanck</option>
                                      
  
                                      
                                    </select>
                                 </div>





                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for=""></label>
                                <button type="submit" class="btn btn-primary ">Registrar</button>

                            </div>

                      
                      


                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    