<?php

function traveloInputFormHeader () {
    echo <<<EOT
    <div class="container">
            
            <div class="row">
            <div class="col-md-12">
                <!--h3 class="page-header"><i class="fa fa-envelope"></i> Hírlevél készítés</h3-->

                
                    <!-- Panel1 eleje -->
                    
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="small"><img src="images/travelo_logo.png"></div>
                                        <div>Travelo heti hírlevél készítés</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    
                </div>
            </div>
            <!-- Panel1 vege --> 
EOT;
}

function traveloInputFormBase() {
    echo <<<EOT
    <form action="travelo_nl_inputDb.php" method="post" id="travelo_nl_edit" accept-charset="UTF-8" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">

                        <div class="col-xs-9 text-left">
                            <div class="big">Alapadatok</div>

                        </div>
                    </div>
                </div>

                <div class="panel-footer">

                    <div class="form-group">
                        <label>Küldés dátuma:</label>
                        <input type="text" class="form-control" name="sendingdate" placeholder="Dátum" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>
                    <div class="form-group">
                        <label>Alap mappa</label>
                        <input class="form-control" type="url" name="folder" placeholder="Pl.: http://stuff.szallas.travelo.hu/hirlevel/20140101" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">

                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">

                        <div class="col-xs-9 text-left">
                            <div class="big">Analytics kódok</div>

                        </div>
                    </div>
                </div>
                <div class="panel-footer">

                    <div class="form-group">
                        <label>Source:</label>
                        <input class="form-control"  type="text" name="analytics_source" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>
                    <div class="form-group">
                        <label>Medium</label>
                        <input class="form-control"  type="text" name="analytics_medium"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>
                    <div class="clearfix"></div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
EOT;
}

function traveloInputFormMenu () {
    echo <<<EOT
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary ">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 text-left">
                        <div class="big">Menü</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-2">
                        <label>1. hely</label>
                        <p class="help-block">Felirat:</p>
                        <input class="form-control"  type="text" name="menu1" value="közel" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>

                    <div class="form-group col-md-2">
                        <label>2. hely</label>
                        <p class="help-block">Felirat:</p>
                        <input class="form-control"  type="text" id="menu2" name="menu2" value="távol" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>

                    <div class="form-group col-md-2">
                        <label>3. hely</label>
                        <p class="help-block">Felirat:</p>
                        <input class="form-control"  type="text" id="menu3" name="menu3" value="cucc" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>


                    <div class="form-group col-md-2">
                        <label>4. hely</label>
                        <p class="help-block">Felirat:</p>
                        <input class="form-control"  type="text" id="menu4" name="menu4" value="hirek" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>


                    <div class="form-group col-md-2">
                        <label>5. hely</label>
                        <p class="help-block">Felirat:</p>
                        <input class="form-control"  type="text" id="menu5" name="menu5" value="akciók" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>
                    <div class="form-group col-md-1"></div>
                </div>
                <div class="row">
                    <div class="form-group col-md-1"></div>

                    <div class="form-group col-md-2">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="menu1_link" name="menu1_link" value="http://travelo.hu/kozel" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>

                    <div class="form-group col-md-2">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="menu2_link" name="menu2_link" value="http://travelo.hu/tavol" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>

                    <div class="form-group col-md-2">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="menu3_link" name="menu3_link" value="http://travelo.hu/cucc" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>


                    <div class="form-group col-md-2">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="menu4_link" name="menu4_link" value="http://travelo.hu/hirek" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>


                    <div class="form-group col-md-2">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="menu5_link" name="menu5_link" value="http://szallas.travelo.hu/akciok" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group col-md-1"></div>
                </div>
                <div class="row">
                    <div class="form-group col-md-1"></div>
                    <div class="form-group col-md-2">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" id="menu1_analytics" name="menu1_analytics" value="menu_kozel" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>

                    <div class="form-group col-md-2">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" id="menu2_analytics" name="menu2_analytics" value="menu_tavol" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>

                    <div class="form-group col-md-2">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" id="menu3_analytics" name="menu3_analytics" value="menu_cucc" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>


                    <div class="form-group col-md-2">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" id="menu4_analytics" name="menu4_analytics" value="menu_hirek" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>


                    <div class="form-group col-md-2">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" id="menu5_analytics" name="menu5_analytics" value="menu_akciok" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>				
                    <div class="form-group col-md-1"></div>
                </div>	

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
EOT;
}

function traveloInputFormBigPic () {
    echo <<<EOT
   <div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 text-left">
                        <div class="big">Nagyképes</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="col-md-6">
                    <div class="form-group">
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" name="bp_title" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="bp_link"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Leírás:</p>
                        <textarea class="form-control" rows="2" cols="83" name="bp_text" form="travelo_nl_edit" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <p class="help-block">Képválasztás:</p>
                        <input class="form-control"  type="file" name="bp_pic"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" name="bp_analytics" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Legjobb ár:</p>
                        <input class="form-control"  type="text" name="bp_price" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>

    </div>
</div>
EOT;
}

function traveloInputFormSmallPic() {
    echo <<<EOT
    <div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 text-left">
                        <div class="big">Kisképesek</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>1. sor</label>
                        <input class="form-control"  type="checkbox" id="1ok" name="1ok">
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Bal</label>
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" id="1l_title" name="1l_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Alcím:</p>
                        <input class="form-control"  type="text" id="1l_subtitle" name="1l_subtitle">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Leírás:</p>
                        <textarea class="form-control" rows="2" cols="68" id="1l_text" name="1l_text" form="travelo_nl_edit" ></textarea>
                    </div>
                    <div class="form-group">
                        <p class="help-block">Képválasztás:</p>
                        <input class="form-control"  type="file" id="1l_pic" name="1l_pic">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="1l_link" name="1l_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" id="1l_analytics" name="1l_analytics">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Legjobb ár:</p>
                        <input class="form-control"  type="text" id="1l_price" name="1l_price">
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Jobb</label>
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" id="1r_title" name="1r_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Alcím:</p>
                        <input class="form-control"  type="text" id="1r_subtitle" name="1r_subtitle">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Leírás:</p>
                        <textarea class="form-control" rows="2" cols="68" id="1r_text" name="1r_text" form="travelo_nl_edit" ></textarea>
                    </div>
                    <div class="form-group">
                        <p class="help-block">Képválasztás:</p>
                        <input class="form-control"  type="file" id="1r_pic" name="1r_pic">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="1r_link" name="1r_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" id="1r_analytics" name="1r_analytics">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Legjobb ár:</p>
                        <input class="form-control"  type="text" id="1r_price" name="1r_price">
                    </div>
                </div> <!-- itt elhagytal egy div-et -->
                <hr>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>2. sor</label>
                        <input class="form-control"  type="checkbox" id="2ok" name="2ok">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label>Bal</label>
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" id="1_title" name="2l_title">
                    </div> <!-- itt duplaztad az inputot es innetol az 5. sorig mindenhol :)-->
                    <div class="form-group">
                        <p class="help-block">Alcím:</p>
                        <input class="form-control"  type="text" id="2l_subtitle" name="2l_subtitle">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Leírás:</p>
                        <textarea class="form-control" rows="2" cols="68" id="2l_text" name="2l_text" form="travelo_nl_edit" ></textarea>
                    </div>
                    <div class="form-group">
                        <p class="help-block">Képválasztás:</p>
                        <input class="form-control"  type="file" id="2l_pic" name="2l_pic">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="2l_link" name="2l_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" id="2l_analytics" name="2l_analytics">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Legjobb ár:</p>
                        <input class="form-control"  type="text" id="2l_price" name="2l_price">
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Jobb</label>
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" id="2r_title" name="2r_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Alcím:</p>
                        <input class="form-control"  type="text" id="2r_subtitle" name="2r_subtitle">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Leírás:</p>
                        <textarea class="form-control" rows="2" cols="68" id="2r_text" name="2r_text" form="travelo_nl_edit" ></textarea>
                    </div>
                    <div class="form-group">
                        <p class="help-block">Képválasztás:</p>
                        <input class="form-control"  type="file" id="2r_pic" name="2r_pic">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="2r_link" name="2r_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" id="2r_analytics" name="2r_analytics">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Legjobb ár:</p>
                        <input class="form-control"  type="text" id="2r_price" name="2r_price">
                    </div>

                </div>


                <hr>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>3. sor</label>
                        <input class="form-control"  type="checkbox" id="3ok" name="3ok">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label>Bal</label>
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" id="1_title" name="3l_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Alcím:</p>
                        <input class="form-control"  type="text" id="3l_subtitle" name="3l_subtitle">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Leírás:</p>
                        <textarea class="form-control" rows="2" cols="68" id="3l_text" name="3l_text" form="travelo_nl_edit" ></textarea>
                    </div>
                    <div class="form-group">
                        <p class="help-block">Képválasztás:</p>
                        <input class="form-control"  type="file" id="3l_pic" name="3l_pic">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="3l_link" name="3l_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" id="3l_analytics" name="3l_analytics">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Legjobb ár:</p>
                        <input class="form-control"  type="text" id="3l_price" name="3l_price">
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Jobb</label>
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" id="3r_title" name="3r_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Alcím:</p>
                        <input class="form-control"  type="text" id="3r_subtitle" name="3r_subtitle">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Leírás:</p>
                        <textarea class="form-control" rows="2" cols="68" id="3r_text" name="3r_text" form="travelo_nl_edit" ></textarea>
                    </div>
                    <div class="form-group">
                        <p class="help-block">Képválasztás:</p>
                        <input class="form-control"  type="file" id="3r_pic" name="3r_pic">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="3r_link" name="3r_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" id="3r_analytics" name="3r_analytics">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Legjobb ár:</p>
                        <input class="form-control"  type="text" id="3r_price" name="3r_price">
                    </div>

                </div>


                <hr>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>4. sor</label>
                        <input class="form-control"  type="checkbox" id="4ok" name="4ok">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label>Bal</label>
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" id="1_title" name="4l_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Alcím:</p>
                        <input class="form-control"  type="text" id="4l_subtitle" name="4l_subtitle">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Leírás:</p>
                        <textarea class="form-control" rows="2" cols="68" id="4l_text" name="4l_text" form="travelo_nl_edit" ></textarea>
                    </div>
                    <div class="form-group">
                        <p class="help-block">Képválasztás:</p>
                        <input class="form-control"  type="file" id="4l_pic" name="4l_pic">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="4l_link" name="4l_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" id="4l_analytics" name="4l_analytics">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Legjobb ár:</p>
                        <input class="form-control"  type="text" id="4l_price" name="4l_price">
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Jobb</label>
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" id="4r_title" name="4r_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Alcím:</p>
                        <input class="form-control"  type="text" id="4r_subtitle" name="4r_subtitle">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Leírás:</p>
                        <textarea class="form-control" rows="2" cols="68" id="4r_text" name="4r_text" form="travelo_nl_edit" ></textarea>
                    </div>
                    <div class="form-group">
                        <p class="help-block">Képválasztás:</p>
                        <input class="form-control"  type="file" id="4r_pic" name="4r_pic">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="4r_link" name="4r_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" id="4r_analytics" name="4r_analytics">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Legjobb ár:</p>
                        <input class="form-control"  type="text" id="4r_price" name="4r_price">
                    </div>

                </div>


                <hr>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>5. sor</label>
                        <input class="form-control"  type="checkbox" id="5ok" name="5ok">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label>Bal</label>
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" id="1_title" name="5l_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Alcím:</p>
                        <input class="form-control"  type="text" id="5l_subtitle" name="5l_subtitle">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Leírás:</p>
                        <textarea class="form-control" rows="2" cols="68" id="5l_text" name="5l_text" form="travelo_nl_edit" ></textarea>
                    </div>
                    <div class="form-group">
                        <p class="help-block">Képválasztás:</p>
                        <input class="form-control"  type="file" id="5l_pic" name="5l_pic">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="5l_link" name="5l_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" id="5l_analytics" name="5l_analytics">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Legjobb ár:</p>
                        <input class="form-control"  type="text" id="5l_price" name="5l_price">
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Jobb</label>
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" id="5r_title" name="5r_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Alcím:</p>
                        <input class="form-control"  type="text" id="5r_subtitle" name="5r_subtitle">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Leírás:</p>
                        <textarea class="form-control" rows="2" cols="68" id="5r_text" name="5r_text" form="travelo_nl_edit" ></textarea>
                    </div>
                    <div class="form-group">
                        <p class="help-block">Képválasztás:</p>
                        <input class="form-control"  type="file" id="5r_pic" name="5r_pic">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" id="5r_link" name="5r_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" id="5r_analytics" name="5r_analytics">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Legjobb ár:</p>
                        <input class="form-control"  type="text" id="5r_price" name="5r_price">
                    </div>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
EOT;
}

function traveloInputFormMostRecent() {
    echo <<<EOT
    <div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 text-left">
                        <div class="big">Leggyakoribb keresések</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>1 oszlopos</label>
                        <input class="form-control"  type="checkbox" name="most_recent_1c_ok">
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="form-group">

                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_1_puretext">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url"  name="mostrecent_1_puretext" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>

                    <hr>

                    <div class="form-group">

                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_2_puretext">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url"  name="mostrecent_2_puretext" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <hr>
                    <div class="form-group">

                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_3_puretext">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url"  name="mostrecent_3_puretext" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <hr>
                    <div class="form-group">

                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_4_puretext">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url"  name="mostrecent_4_puretext" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <hr>
                    <div class="form-group">

                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_5_puretext">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url"  name="mostrecent_5_puretext" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_1_highlitedtext">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" name="mostrecent_1_analytics">
                    </div>
                    <hr>
                    <div class="form-group">
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_2_highlitedtext">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" name="mostrecent_2_analytics">
                    </div>
                    <hr>
                    <div class="form-group">
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_3_highlitedtext">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" name="mostrecent_3_analytics">
                    </div>
                    <hr>
                    <div class="form-group">
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_4_highlitedtext">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" name="mostrecent_4_analytics">
                    </div>
                    <hr>
                    <div class="form-group">
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_5_highlitedtext">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" name="mostrecent_5_analytics">
                    </div>
                </div>
                <hr>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>2 oszlopos</label>
                        <input class="form-control"  type="checkbox" name="mostrecent_2c_ok">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>Bal</label>
                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_1l_puretext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="mostrecent_1l_link">
                    </div>
                    <hr>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label><img src="images/spacer-10x5.png"></label>
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_1l_highlitedtext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" name="mostrecent_1l_analytics">
                    </div>
                    <hr>
                </div>


                <div class="col-md-1"></div>


                <div class="col-md-2">
                    <div class="form-group">
                        <label>Jobb</label>
                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_1r_puretext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="mostrecent_1r_link">
                    </div>
                    <hr>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label><img src="images/spacer-10x5.png"></label>
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_1r_highlitedtext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" name="mostrecent_1r_analytics">
                    </div>
                    <hr>
                </div>



                <div class="col-md-2"></div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>Bal</label>
                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_2l_puretext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="mostrecent_2l_link">
                    </div>
                    <hr>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label><img src="images/spacer-10x5.png"></label>
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_2l_highlitedtext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" name="mostrecent_2l_analytics">
                    </div>
                    <hr>
                </div>


                <div class="col-md-1"></div>


                <div class="col-md-2">
                    <div class="form-group">
                        <label>Jobb</label>
                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_2r_puretext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="mostrecent_2r_link">
                    </div>
                    <hr>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label><img src="images/spacer-10x5.png"></label>
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_2r_highlitedtext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" name="mostrecent_2r_analytics">
                    </div>
                    <hr>
                </div>


                <div class="col-md-2"></div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>Bal</label>
                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_3l_puretext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="mostrecent_3l_link">
                    </div>
                    <hr>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label><img src="images/spacer-10x5.png"></label>
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_3l_highlitedtext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" name="mostrecent_3l_analytics">
                    </div>
                    <hr>
                </div>


                <div class="col-md-1"></div>


                <div class="col-md-2">
                    <div class="form-group">
                        <label>Jobb</label>
                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_3r_puretext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="mostrecent_3r_link">
                    </div>
                    <hr>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label><img src="images/spacer-10x5.png"></label>
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_3r_highlitedtext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" name="mostrecent_3r_analytics">
                    </div>
                    <hr>
                </div>

                <div class="col-md-2"></div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>Bal</label>
                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_4l_puretext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="mostrecent_4l_link">
                    </div>
                    <hr>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label><img src="images/spacer-10x5.png"></label>
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_4l_highlitedtext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" name="mostrecent_4l_analytics">
                    </div>
                    <hr>
                </div>


                <div class="col-md-1"></div>


                <div class="col-md-2">
                    <div class="form-group">
                        <label>Jobb</label>
                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_4r_puretext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="mostrecent_4r_link">
                    </div>
                    <hr>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label><img src="images/spacer-10x5.png"></label>
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_4r_highlitedtext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" name="mostrecent_4r_analytics">
                    </div>
                    <hr>
                </div>

                <div class="col-md-2"></div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>Bal</label>
                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_5l_puretext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="mostrecent_5l_link">
                    </div>

                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label><img src="images/spacer-10x5.png"></label>
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_5l_highlitedtext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" name="mostrecent_5l_analytics">
                    </div>

                </div>


                <div class="col-md-1"></div>


                <div class="col-md-2">
                    <div class="form-group">
                        <label>Jobb</label>
                        <p class="help-block">Szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_5r_puretext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="mostrecent_5r_link">
                    </div>

                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label><img src="images/spacer-10x5.png"></label>
                        <p class="help-block">Kiemelt szöveg:</p>
                        <input class="form-control"  type="text" name="mostrecent_5r_highlitedtext">
                    </div>

                    <div class="form-group">
                        <p class="help-block">Analitycs:</p>
                        <input class="form-control"  type="text" name="mostrecent_5r_analytics">
                    </div> <!--itt meg vot egy extra div -->
                </div>	
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
EOT;
}

function traveloInputFormArticle() {
    echo <<<EOT
    <div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 text-left">
                        <div class="big">Cikkajánló</div>
                    </div>
                </div>
            </div>

            <div class="panel-footer">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Cikkek</label>
                        <input class="form-control"  type="checkbox" name="article_ok">
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" name="harticle_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Dátum:</p>
                        <input class="form-control"  type="text" name="harticle_date">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Szöveg:</p>
                        <textarea class="form-control" rows="2" name="harticle_text" form="travelo_nl_edit"></textarea>
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="harticle_link"  data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" name="harticle_analytics">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" name="article_1_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Dátum:</p>
                        <input class="form-control"  type="text" name="article_1_date">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="article_1_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" name="article_1_analytics">
                    </div>
                    <hr>
                    <div class="form-group">
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" name="article_2_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Dátum:</p>
                        <input class="form-control"  type="text" name="article_2_date">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="article_2_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" name="article_2_analytics">
                    </div>            
                    <hr>
                    <div class="form-group">
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" name="article_3_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Dátum:</p>
                        <input class="form-control"  type="text" name="article_3_date">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="article_3_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" name="article_3_analytics">
                    </div>
                    <hr>
                    <div class="form-group">
                        <p class="help-block">Cím:</p>
                        <input class="form-control"  type="text" name="article_4_title">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Dátum:</p>
                        <input class="form-control"  type="text" name="article_4_date">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Link:</p>
                        <input class="form-control"  type="url" name="article_4_link" data-bv-uri-message="A formátum nem megfelelő!">
                    </div>
                    <div class="form-group">
                        <p class="help-block">Analytics:</p>
                        <input class="form-control"  type="text" name="article_4_analytics">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
EOT;
}

function traveloInputFormAd1 () {
    echo <<<EOT
    <div class="row">
    <div class="col-md-12">
        <h4 class="page-header">Hirdetések 1</h4>

        <div class="row"> 
            <div class="col-md-12">
                <div class="alert alert-info" style="min-height: 53px;">
                    <div class="form-group col-md-3">
                        <label for="null2" class="radio-inline">
                            <input type="radio" id="null2" name="ad2_ok" value="null">Nincs hirdetés</label></div>
                    <div class="form-group col-md-3">
                        <label for="b_b" class="radio-inline">
                            <input type="radio" id="b_b" name="ad2_ok" value="b_b">Banner1 + Banner2</label></div>
                    <div class="form-group col-md-3">
                        <label for="b2_sz" class="radio-inline">                                
                            <input type="radio" id="b2_sz" name="ad2_ok" value="b2_sz">Banner1 + Szöveges1</label></div>
                    <div class="form-group col-md-3">
                        <label for="sz_sz" class="radio-inline"><input type="radio" id="sz_sz" name="ad2_ok2" value="sz_sz">Szöveges1 + Szöveges2</label>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-9 text-left">
                                <div class="big">Szöveges</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Szöveges 1</label>
                                <p class="help-block">Kép:</p>
                                <input class="form-control"  type="file" name="textad2_pic">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Cím:</p>
                                <input class="form-control"  type="text" name="textad2_title">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Szöveg:</p>
                                <textarea class="form-control" rows="5" name="textad2_text" form="travelo_nl_edit" ></textarea>
                            </div>
                            <div class="form-group">
                                <p class="help-block">Link:</p>
                                <input class="form-control"  type="url" name="textad2_link" data-bv-uri-message="A formátum nem megfelelő!">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Analitycs:</p>
                                <input class="form-control"  type="text" name="textad2_analytics">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Szöveges 2</label>
                                <p class="help-block">Kép:</p>
                                <input class="form-control"  type="file" name="textad2_2_pic">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Cím:</p>
                                <input class="form-control"  type="text" name="textad2_2_title">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Szöveg:</p>
                                <textarea class="form-control" rows="5" name="textad2_2_text" form="travelo_nl_edit" ></textarea>
                            </div>
                            <div class="form-group">
                                <p class="help-block">Link:</p>
                                <input class="form-control"  type="url" name="textad2_2_link" data-bv-uri-message="A formátum nem megfelelő!">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Analitycs:</p>
                                <input class="form-control"  type="text" name="textad2_2_analytics">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-9 text-left">
                                <div class="big">Bannerek</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banner 1</label>
                                <p class="help-block">Kép:</p>
                                <input class="form-control"  type="file" name="banner2_1_pic">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Link:</p>
                                <input class="form-control"  type="url" name="banner2_1_link" data-bv-uri-message="A formátum nem megfelelő!">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Analytics:</p>
                                <input class="form-control"  type="text" name="banner2_1_analytics">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banner 1</label>
                                <p class="help-block">Kép:</p>
                                <input class="form-control"  type="file" name="banner2_2_pic">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Link:</p>
                                <input class="form-control"  type="url" name="banner2_2_link" data-bv-uri-message="A formátum nem megfelelő!">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Analytics:</p>
                                <input class="form-control"  type="text" name="banner2_2_analytics">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>

            </div>
        </div>
EOT;
}

function traveloInputFormAd2 () {
    echo <<<EOT
    <div class="row">
    <div class="col-md-12">
        <h4 class="page-header">Hirdetések 2</h4>

        <div class="row">

            <div class="col-md-12">
                <div class="alert alert-info" style="min-height: 53px;">
                    <div class="form-group col-md-3">
                        <label for="null2" class="radio-inline">
                            <input type="radio" id="null2" name="ad_ok" value="null">Nincs hirdetés</label></div>
                    <div class="form-group col-md-3">
                        <label for="b_b" class="radio-inline">
                            <input type="radio" id="t_b" name="ad_ok" value="t_b">Turpan + Banner</label></div>
                    <div class="form-group col-md-3">
                        <label for="b2_sz" class="radio-inline">                                
                            <input type="radio" id="b2_sz" name="ad_ok" value="b_sz" >Banner + Szöveges</label></div>
                    <div class="form-group col-md-3">
                        <label for="sz_sz" class="radio-inline"><input type="radio" id="t_sz" name="ad_ok" value="t_sz">Turpan + Szöveges</label>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-9 text-left">
                                <div class="big">Szöveges - Banner - Turpan</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Szöveges</label>
                                <p class="help-block">Kép:</p>
                                <input class="form-control"  type="file" name="textad_pic">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Cím:</p>
                                <input class="form-control"  type="text" name="textad_title">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Szöveg:</p>
                                <textarea class="form-control" rows="5"  name="textad_text" form="travelo_nl_edit"></textarea>
                            </div>
                            <div class="form-group">
                                <p class="help-block">Link:</p>
                                <input class="form-control"  type="url" name="textad_link" data-bv-uri-message="A formátum nem megfelelő!">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Analitycs:</p>
                                <input class="form-control"  type="text" name="textad_analytics">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Banner</label>
                                <p class="help-block">Kép:</p>
                                <input class="form-control"  type="file" name="banner_pic">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Link:</p>
                                <input class="form-control"  type="url" name="banner_link" data-bv-uri-message="A formátum nem megfelelő!">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Analytics:</p>
                                <input class="form-control"  type="text" name="banner_analytics">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Turpan</label>
                                <p class="help-block">Cím:</p>
                                <input class="form-control"  type="text" name="turpan_1_title">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Link:</p>
                                <input class="form-control"  type="text"  name="turpan_1_link" data-bv-uri-message="A formátum nem megfelelő!">
                            </div>
                            <hr>
                            <div class="form-group">
                                <p class="help-block">Cím:</p>
                                <input class="form-control"  type="text" name="turpan_2_title">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Link:</p>
                                <input class="form-control"  type="text"  name="turpan_2_link" data-bv-uri-message="A formátum nem megfelelő!">
                            </div>
                            <hr>
                            <div class="form-group">
                                <p class="help-block">Cím:</p>
                                <input class="form-control"  type="text" name="turpan_3_title">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Link:</p>
                                <input class="form-control"  type="text"  name="turpan_3_link" data-bv-uri-message="A formátum nem megfelelő!">
                            </div>
                            <hr>
                            <div class="form-group">
                                <p class="help-block">Cím:</p>
                                <input class="form-control"  type="text" name="turpan_4_title">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Link:</p>
                                <input class="form-control"  type="text"  name="turpan_4_link" data-bv-uri-message="A formátum nem megfelelő!">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>

            </div>
        </div>
EOT;
}

function traveloInputFormFoot () {
    echo <<<EOT
    <div class="row">
        <div class="col-md-12">
            <div id="submit">
                <input class="btn btn-primary btn-lg" id="submit" type="submit" value="Hírlevél készítése">
            </div>
        </div>
    </div>
</form> 
EOT;
}