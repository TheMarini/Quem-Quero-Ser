<?php wp_footer(); ?>
<footer id="Footer" class="_center-child">
    <p>© <?php echo date('Y'); ?> Quem Quero Ser</p>
    <p> Desenvolvido por <a href="">New Program</a></p>
</footer>
</main>
</body>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>
    (function($) {
        window.fnames = new Array();
        window.ftypes = new Array();
        fnames[0] = 'EMAIL';
        ftypes[0] = 'email';
        /**
         * Translated default messages for the $ validation plugin.
         * Locale: PT_PT
         */
        $.extend($.validator.messages, {
            required: "Campo de preenchimento obrigatório",
            remote: "Por favor, corrija este campo.",
            email: "Por favor, preencha com um e-mail válido."
        });
    }(jQuery));
    var $mcj = jQuery.noConflict(true);

</script>
</html>
