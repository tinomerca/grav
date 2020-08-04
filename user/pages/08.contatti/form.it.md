---
title: Contatti
process:
    markdown: true
    twig: true
---

<div class="topmargin p-l-lg-60 p-r-lg-80">
<div class="form-widget">
        <div class="form-result"></div>
        <form id="template-contactform" action="/canvas/include/form.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
            <div class="form-process"></div>
            <div class="col_one_third form-group">
                <label>Nome:</label>
                <input type="text" name="template-contactform-nome" id="template-contactform-nome" class="form-control required" value="" placeholder="">
            </div>
            <div class="col_one_third form-group">
                <label>Email:</label>
                <input type="email" name="template-contactform-email" id="template-contactform-email" class="form-control required" value="" placeholder="">
            </div>
            <div class="col_one_third col_last form-group">
                <label>Telefono:</label><br>
                <input type="text" name="template-contactform-telefono" id="template-contactform-phone" class="form-control required" value="" placeholder="">
            </div>
            <div class="w-100"></div>
            <div class="col_full form-group">
                <label>Oggetto:</label><br>
                <input type="text" name="template-contactform-oggetto" id="template-contactform-oggetto" class="form-control" value="" >
            </div>
            <div class="col_full form-group">
                <label>Richiesta:</label>
                <textarea class="required form-control" id="template-contactform-richiesta" name="template-contactform-richiesta" rows="6" cols="30"></textarea>
            </div>
            <div class="col_full form-group">
            <input type="checkbox" id="privacy" id="template-contactform-privacy" name="template-contactform-privacy" class="required">
                <span>Accetta la privacy policy <a href="privacy">Leggi </a></span>
                
            </div>
            <div class="col_full">
                <button type="submit" name="template-contactform-submit" class="button button-3d nomargin">Invia</button>
            </div>
            <div class="col-12 hidden">
				<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control" />
			</div>
			<!-- Form Settings -->
          <input type="hidden" name="replyto" value="template-contactform-email">
    			<input type="hidden" name="autoresponder" value="true">
    			<input type="hidden" name="prefix" value="template-contactform-">
    			<input type="hidden" name="subject" value="Richiesta dal sito">
    			<input type="hidden" name="ar_message" value="Gentile {template-contactform-nome}, la tua <b>richiesta &eacute; stata inoltrata all'ufficio di competenza</b>. Verrai ricontattato il prima possibile.<br><br>Cordialmente">
    			<input type="hidden" name="ar_subject" value="Conferma ricezione richiesta">
    			<input type="hidden" name="ar_title" value="Grazie per averci contattato.">
    			<input type="hidden" name="ar_footer" value="Copyright Nizzo">
        </form>
    </div>
 </div>
