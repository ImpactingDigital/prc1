<?php
/**
 * The template for the integrated form to capture emails for the newsletter to the Smarkio/Primavera Academy
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>


<form class="form-newsletter" data-smk-form action="https://primaveracademy.smark.io/api.php/directlead/f05d5c7b131eb6d8d9f69005b6ba7422539d78c3" method="post">
	<input type="hidden" name="redirect_ok" value="http://id-prc1-04.azurewebsites.net/obrigada/">
    <input type="hidden" name="redirect_error" value="http://id-prc1-04.azurewebsites.net/not_found/">
    <label for="nl-frm-nome">O seu nome</label>  <input id="nl-frm-nome" type="text" name="lead[first_name]" required="required" placeholder=""><br>
    <label for="nl-frm-email">O seu e-mail</label> <input id="nl-frm-email" type="email" name="lead[email]" required="required" placeholder="email@email.com"><br>
	<input type="submit" value="Subescrever">
</form>
