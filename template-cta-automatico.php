<!-- Template de Call o action simples no fim da página baseado na categoria -->
	<div class="cta-category-large">
		<?php 
			if (in_category('compras-vendas')){
				echo '<div class="cta-compras-vendas">
						<div class="bloco-texto">
							Venda mais e compre melhor com as certificações PRIMAVERA
							<a class="link-compra" href="http://pt.primaverabss.com/pt/certificacao-primavera-purchases-and-inventory/">Compras</a>
							<a href="http://pt.primaverabss.com/pt/certificacao-primavera-sales/">Vendas</a>
						</div>
					  </div>';
			}
			elseif (in_category('contabilidade')){
				echo '<div class="cta-contabilidade">
						<div class="bloco-texto">
							<a class="link-contabilidade" href="http://pt.primaverabss.com/pt/certificacao-primavera-accounting-and-fiscal/">
							Venda mais e compre melhor com a certificação PRIMAVERA
							Contabilidade</a>
						</div>
					  </div>';
			}
			elseif (in_category('gestao-pessoas')){

				echo '<div class="cta-pessoas">
						<div class="bloco-texto">
							<a class="link-pessoas" href="http://pt.primaverabss.com/pt/certificacao-primavera-human-resources/">
							Venda mais e compre melhor com a certificação PRIMAVERA
							Recursos Humanos</a>
						</div>
					  </div>';
			}
			elseif (in_category('tesouraria')){
				echo '<div class="cta-tesouraria">
						<div class="bloco-texto">
							<a class="link-tesouraria" href="http://pt.primaverabss.com/pt/certificacao-primavera-treasury/">
							Venda mais e compre melhor com a certificação PRIMAVERA
							Tesouraria</a>
						</div>
					  </div>';
			}
		?>
	</div><!-- cta-category-large -->