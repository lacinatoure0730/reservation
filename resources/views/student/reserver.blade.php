<x-student-layout>

    <form action="" id="wizard" class="pt-5 w-80">
                    <!-- SECTION 1 -->
                    <h4></h4>
                    <section>
                        <div class="inner">
                            <a href="#" class="avartar">
                                <img src="{{ asset('dist/img/upb.png') }}" width="80" alt="">
                            </a>
                            <h1>RESERVATION</h1> <br><br>
                            <div class="form-row form-group">
                                <div class="form-holder">
                                    <input type="text" class="form-control" placeholder="Nom">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" class="form-control" placeholder="Prenom">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" class="form-control" placeholder="Email">
                                    <i class="zmdi zmdi-email small"></i>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" class="form-control" placeholder="Telephone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" class="form-control" placeholder="Sexe">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="texte" class="form-control" placeholder="Age">

                                </div>
                            </div>

                            <div class="form-row">
                                 <div class="form-holder">
                                    <input type="texte" class="form-control" placeholder="Religion">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-holder">
                                   <input type="texte" class="form-control" placeholder="Filiere">
                               </div>
                             </div>
                              <div class="form-row">
                                <div class="form-holder ">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn">Soumettre</button>
                             </div>



                        </div>
                    </section>

                </form>
    </div>




</x-student-layout>
