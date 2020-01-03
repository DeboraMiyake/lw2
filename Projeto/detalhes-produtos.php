    <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Bolsas</title>
        <link rel="stylesheet" type="text/css" href="css.css" />
    </head>
    <body>
      <nav> 
      <div class= "menu">
      <h2>bags2love</h2>
      </div>
      </nav>  
    <?php
	$item = $_GET['id_produto'];
    $produtos = array();
	$produtos[1]=
    "<div class='detalhes'>
    <aside>
    <img src='img/bolsa1.png' alt='Bolsa Chanel' width='400' height='400'/>
    </aside>
    <div class='descricao'>
    <h1>Bolsa Woc Verniz</h1>
    <h2>CHANEL</h2>
    <p>Código: FSR21</p>
    <p>Material: Verniz</p>
    <p>Fecho: Botão de pressão</p>
    <p>Cor: Verde água</p>
    <p>Origem: França</p>
    <h3>R$ 6.390,00</h3>
    <br/>
    <a href='https://www.etiquetaunica.com.br/bolsas/com-alcas/bolsa-chanel-woc-verniz-verde-fsr21-890153'><img src='img/botao1.png' alt='Comprar' width='240' height='40'/></a> <a href='produtos.php'><img src='img/botao2.png' alt='Catálogo' width='240' height='40'/></a>
    </div>
    <div class='info'>
    <hr/>
    <p><h4>Mais informações</h4></p>
    <p> Bolsa com acabamento matelassê, o modelo possui alça fina em corrente prata com couro entrelaçado, três compartimentos internos sendo um com zíper, um bolso interno e seis divisórias para cartões. Acompanha cartão de autenticidade da marca.</p><br/>
    </div>
    </div>";
	$produtos[2]=
    "<div class='detalhes'>
    <aside>
    <img src='img/bolsa2.png' alt='Bolsa Burberry' width='400' height='400'/>
    </aside>
    <div class='descricao'>
    <h1>The Medium Vintage Check and Leather D-ring Bag</h1>
    <h2>BURBERRY</h2>
    <p>Código: 4076659</p>
    <p>Material: Pele de cabra 100%, algodão 70%, poliéster 30%</p>
    <p>Cor: Black</p>
    <p>Origem: Itália</p>
    <h3>R$ 11.402</h3>
    <br/>
    <a href='https://www.farfetch.com/br/shopping/women/burberry-the-medium-vintage-check-and-leather-d-ring-bag-item-12975715.aspx?storeid=9319'><img src='img/botao1.png' alt='Comprar' width='240' height='40'/></a> <a href='produtos.php'><img src='img/botao2.png' alt='Catálogo' width='240' height='40'/></a>
    </div>
    <div class='info'>
    <hr/>
    <p><h4>Mais informações</h4></p>
    <p> O produto Burberry Feminino é sinônimo de elegância atemporal da clássica marca britânica. Sofisticada e versátil, a grife traz silhuetas definidas e tecidos estruturados, que refletem o lifestyle da mulher contemporânea. O consagrado trench coat Burberry é peça desejo entre as roupas da moda feminina atual, além do cobiçado xadrez da marca.</p><br/>
    </div>
    </div>";
	$produtos[3]= 
    "<div class='detalhes'>
    <aside>
    <img src='img/bolsa3.png' alt='Bolsa Prada' width='400' height='400'/>
    </aside>
    <div class='descricao'>
    <h1>Bolsa de couro saffiano</h1>
    <h2>PRADA</h2>
    <p>Código: 1BP012VDWONZV</p>
    <p>Material: Couro de napa e Metal 100%</p>
    <p>Fecho: zíper</p>
    <p>Cor: Dark Pink Mordore</p>
    <p>Origem: Itália</p>
    <h3>R$ 6.600</h3>
    <br/>
    <a href='https://www.farfetch.com/br/shopping/women/prada-bolsa-de-couro-saffiano-item-13025544.aspx?storeid=10927&rtype=certona_portal_pdp_generic_anon_a&rpos=2'><img src='img/botao1.png' alt='Comprar' width='240' height='40'/></a> <a href='produtos.php'><img src='img/botao2.png' alt='Catálogo' width='240' height='40'/></a>
    </div>
    <div class='info'>
    <hr/>
    <p><h4>Mais informações</h4></p>
    <p> De um fabricante de produtos de couro em 1913 até se tornar uma das Maisons luxo mais cobiçadas do mundo, foi necessário que Miuccia Prada, neta de um dos fundadores, assumisse o negócio de família e o expandisse. Como Diretora criativa da Prada, Miuccia fez uma verdadeira revolução, desde a inovação nos materiais usados nos produtos até lançar sua própria coleção prêt-à-porter na década de 90. A partir de então o renome da Prada só cresce e a coloca como marca premium, em conjunto com sua vasta linha de produtos e coleções.</p><br/>
    </div>
    </div>";
	$produtos[4]=
    "<div class='detalhes'>
    <aside>
    <img src='img/bolsa4.png' alt='Bolsa Gucci' width='400' height='400'/>
    </aside>
    <div class='descricao'>
    <h1>Bolsa mini 'Broadway' de couro</h1>
    <h2>GUCCI</h2>
    <p>Código: 453778DVUDT</p>
    <p>Material: Seda, couro, perólas e cristal 100%</p> 
    <p>Bolso: Interno</p>
    <p>Cor: 1096 Black</p>
    <p>Origem: Itália</p>
    <h3>R$ 12.520</h3>
    <br/>
    <a href='https://www.farfetch.com/br/shopping/women/gucci-bolsa-mini-broadway-de-couro-item-12517720.aspx?storeid=10564'><img src='img/botao1.png' alt='Comprar' width='240' height='40'/></a> <a href='produtos.php'><img src='img/botao2.png' alt='Catálogo' width='240' height='40'/></a>
    </div>
    <div class='info'>
    <hr/>
    <p><h4>Mais informações</h4></p>
    <p> Bolsa mini com aplicação de esferas peroladas e detalhe metálico de abelha. O corpo da abelha é realçado por listras esmaltadas em azul e cristais vermelhos e suas asas apresentam tachas peroladas. A abelha - vista pela primeira vez no ready-to-wear da Gucci nos anos 70 - foi retirada dos arquivos da marca e reintroduzida na coleção Outono-Inverno 2015. Confeccionada em couro preto com pérolas. Possui bolso interno, alça de ombro removível Sylvie Web com 25 cm, fecho magnético e forro em seda.</p><br/>
    </div>
    </div>";
	$produtos[5]=    
     "<div class='detalhes'>
    <aside>
    <img src='img/bolsa5.png' alt='Bolsa Louis Vuitton' width='400' height='400'/>
    </aside>
    <div class='descricao'>
    <h1>CITY MALLE</h1>
    <h2>LOUIS VUITTON</h2>
    <p>Código: M43595</p>
    <p>Material: Acabamento em couro de vitelo e forro de microfibra preto</p>
    <p>Acompanha: Duas alças Toron de couro e corrente dourada com cadeado e chave </p>
    <p>Cor: LV BLACK</p>
    <p>Origem: Itália</p>
    <h3>R$ 11.600</h3>
    <br/><br/>
    <a href='https://br.louisvuitton.com/por-br/produtos/city-malle-mm-nvprod750004v'><img src='img/botao1.png' alt='Comprar' width='240' height='40'/></a> <a href='produtos.php'><img src='img/botao2.png' alt='Catálogo' width='240' height='40'/></a>
    </div>
    <div class='info'>
    <hr/>
    <p><h4>Mais informações</h4></p>
    <p> O formato de bolsa escolar estruturada da nova City Malle é a companheira diária organizada e elegante da mulher profissional. Em canvas Monogram Reverse, a bolsa tem acabamento em couro de vitelo liso e é adornada com rebites e corrente dourados para um toque moderno.</p><br/>
    </div>
    </div>";
	$produtos[6]=
     "<div class='detalhes'>
    <aside>
    <img src='img/bolsa6.png' alt='Bolsa Saint Laurent' width='400' height='400'/>
    </aside>
    <div class='descricao'>
    <h1>Bolsa tiracolo 'Kate'</h1>
    <h2>SAIN LAURENT</h2>
    <p>Código: 3560950HYA7</p>
    <p>Material: Couro de cabra 100% </p>
    <p>Detalhe: parte superior dobrável com fecho de encaixe</p>
    <p>Cor: 2216 BROWN</p>
    <p>Origem: Itália</p>
    <h3>R$ 9.870</h3>
    <br/><br/>
    <a href='https://www.farfetch.com/br/shopping/women/saint-laurent-bolsa-tiracolo-kate-de-camurca-item-13000432.aspx?storeid=10814'><img src='img/botao1.png' alt='Comprar' width='240' height='40'/></a> <a href='produtos.php'><img src='img/botao2.png' alt='Catálogo' width='240' height='40'/></a>
    </div>
    <div class='info'>
    <hr/>
    <p><h4>Mais informações</h4></p>
    <p> Bolsa tiracolo 'Kate' de camurça marrom, Saint Laurent. Possui alça de ombro em corrente dourada, parte superior dobrável com fecho de encaixe, bolso interno e detalhe de acabamento dourado.Reconhecido por criar moda ready-to-wear de luxo, até hoje as coleções da grife francesa prestam homenagem ao fundador Yves Saint Laurent, preservando sua visão moderna e os princípios de juventude e liberdade. Atualmente, a marca está sob o comando de Anthony Vaccarello, que dá continuidade ao legado de Saint Laurent, ressaltando a herança e as raízes da grife.</p><br/>
    </div>
    </div>";
	echo $produtos[$item];
	?>
    <div id="footer">
        <div class="footerdetalhes">
          <table>
            <tr>
              <td><a href="http://portal.ifspguarulhos.edu.br/"><img src="img/IFSP.png" alt="IFSP"/></a></td>
              <td><p>Débora Tiemy Miyake</p>
                  <p>1800272</p>
                  <p>Informática para Internet</p></td>
            </tr>
          </table>
        </div>
          <hr />
          <h2>2018</h2>
     </div>
	</body>
</html>






