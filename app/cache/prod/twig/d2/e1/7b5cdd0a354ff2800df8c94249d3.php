<?php

/* FapescTutorialBundle:Contrapartida:contrapartidas.html.twig */
class __TwigTemplate_d2e17b5cdd0a354ff2800df8c94249d3 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "FapescTutorialBundle:Fapesc:info.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Contrapartidas";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"content\">
    <div id=\"sidebar\">
        <p><b>Instruções:</b><br /><br />Cada comprovante de dispêndio (ex: nota fiscal de compra de itens de consumo) deverá ser cadastrado individualmente.<br /><br />O valor \"Orçamento NL\" se refere ao valor da Nota de Liberação em questão, informado na aba \"Dados Iniciais\".<br /><br />Para incluir um novo empenho, selecione a categoria de melhor enquadramento e clique em \"Empenhar novo item\".<br /><br />Para editar um dispêndio já cadastrado, clique na descrição do mesmo.<br /><br />O botão \"X\", em cinza, exclui um registro definitivamente.</p>
        <p>Antes de iniciar o cadastro de novos empenhos, sugerimos a leitura do <a href=\"http://www.fapesc.sc.gov.br/index.php?option=com_docman&task=doc_download&gid=247&Itemid=42\">Guia Básico para Prestação de Contas da FAPESC</a><br /><br />Em caso de dúvida sobre a validade ou o melhor enquadramento de um dispêndio, entre em contato com a Gerência de Projetos ds FAPESC.</p>
    </div><!-- #sidebar -->
    <div id=\"main-content\">
        <h1>:: Contrapartidas</h1>
        <div id=\"budget-panel\">
            <table>
                <tr>
                    <th>Orçamento NL:</th>
                    <th>Total Empenhado:</th>
                    <th>Disponível:</th>
                </tr>
                <tr>
                    <td title=\"Valor total da nota de liquidação\">R\$ ";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, 'orcamento'), "html");
        echo "</td>
                    <td title=\"Valor total já empenhado\">R\$ ";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, 'empenhado'), "html");
        echo "</td>
                    <td title=\"Valor disponível para empenho\"><b>R\$ ";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, 'disponivel'), "html");
        echo "</b></td>
                </tr>
            </table>
        </div>
        <form class=\"form-container\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatorioContrapartidasPost", array("idRelatorio" => $this->getContext($context, 'idRelatorio'))), "html");
        echo "\" method=\"POST\">
            <table class=\"submit\" width=\"90%\">
                <tr>
                    <td width=\"90%\" style=\"text-align:right; padding-right:10px;\">Categoria:</td>
                    <td>
                        <select name=\"categoria\" title=\"Selecione a categoria de item a empenhar\">
                            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'opcoes'));
        foreach ($context['_seq'] as $context['_key'] => $context['opcao']) {
            // line 34
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'opcao'), "value", array(), "any", false), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'opcao'), "text", array(), "any", false), "html");
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcao'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "                        </select>
                    </td>
                    <td><input type=\"submit\" value=\"Registrar\" title=\"\" /></td>
                </tr>
            </table>
        </form>

        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'categorias'));
        foreach ($context['_seq'] as $context['_key'] => $context['categoria']) {
            // line 44
            echo "        ";
            if (($this->getAttribute($this->getContext($context, 'categoria'), "categoria", array(), "any", false) == "passagem")) {
                // line 45
                echo "        <p style=\"font-size:12px;\"><b>:: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'categoria'), "descricao", array(), "any", false), "html");
                echo "</b></p>
        <table id=\"budget-pledged\" class=\"form\" width=\"90%\" cellspacing=\"5\" cellpadding=\"5\">
            <tr>
                <th width=\"30%\">Origem</th>
                <th width=\"5%\">Destino</th>
                <th width=\"30%\">Tipo</th>
                <th width=\"16%\">Valor Total</th>
                <th width=\"3%\"></th>
            </tr>
            ";
                // line 54
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'categoria'), "itens", array(), "any", false));
                foreach ($context['_seq'] as $context['_key'] => $context['item']) {
                    // line 55
                    echo "            <tr>
                <td><a href=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatorioContrapartida", array("idRelatorio" => $this->getContext($context, 'idRelatorio'), "idContrapartida" => $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false), "categoria" => $this->getAttribute($this->getContext($context, 'categoria'), "categoria", array(), "any", false))), "html");
                    echo "\" title=\"Clique para editar item empenhado\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "origem", array(), "any", false), "html");
                    echo "</a></td>
                <td>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "destino", array(), "any", false), "html");
                    echo "</td>
                <td>";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'item'), "tipos", array(), "any", false), $this->getAttribute($this->getContext($context, 'item'), "tipo", array(), "any", false), array(), "array", false), "html");
                    echo "</td>
                <td style=\"text-align:right;\">R\$ ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "valor", array(), "any", false), "html");
                    echo "</td>
                <td style=\"text-align:center;\"><a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatorioContrapartidaDelete", array("idRelatorio" => $this->getContext($context, 'idRelatorio'), "idContrapartida" => $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false), "categoria" => $this->getAttribute($this->getContext($context, 'categoria'), "categoria", array(), "any", false))), "html");
                    echo "\" title=\"Deletar item\" onclick=\"return confirm('Tem certeza que deseja excluir este item?\\nEsta ação não poderá ser desfeita.')\" ><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/excluir-pq.png"), "html");
                    echo "\" alt=\"Deletar\"></a></td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 63
                echo "        </table>
        ";
            } else {
                // line 65
                echo "        ";
                if (($this->getAttribute($this->getContext($context, 'categoria'), "categoria", array(), "any", false) == "bolsa")) {
                    // line 66
                    echo "        <p style=\"font-size:12px;\"><b>:: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'categoria'), "descricao", array(), "any", false), "html");
                    echo "</b></p>
        <table id=\"budget-pledged\" class=\"form\" width=\"90%\" cellspacing=\"5\" cellpadding=\"5\">
            <tr>
                <th width=\"30%\">Bolsista</th>
                <th width=\"5%\">Tipo</th>
                <th width=\"16%\">Instituição</th>
                <th width=\"16%\">Valor Total</th>
                <th width=\"3%\"></th>
            </tr>
            ";
                    // line 75
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'categoria'), "itens", array(), "any", false));
                    foreach ($context['_seq'] as $context['_key'] => $context['item']) {
                        // line 76
                        echo "            <tr>
                <td><a href=\"";
                        // line 77
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatorioContrapartida", array("idRelatorio" => $this->getContext($context, 'idRelatorio'), "idContrapartida" => $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false), "categoria" => $this->getAttribute($this->getContext($context, 'categoria'), "categoria", array(), "any", false))), "html");
                        echo "\" title=\"Clique para editar item empenhado\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'item'), "bolsista", array(), "any", false), "nome", array(), "any", false), "html");
                        echo "</a></td>
                <td>";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'item'), "bolsista", array(), "any", false), "tipos", array(), "any", false), $this->getAttribute($this->getAttribute($this->getContext($context, 'item'), "bolsista", array(), "any", false), "tipo", array(), "any", false), array(), "array", false), "html");
                        echo "</td>
                <td>";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'item'), "bolsista", array(), "any", false), "instituicao", array(), "any", false), "html");
                        echo "</td>
                <td style=\"text-align:right;\">R\$ ";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "valor", array(), "any", false), "html");
                        echo "</td>
                <td style=\"text-align:center;\"><a href=\"";
                        // line 81
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatorioContrapartidaDelete", array("idRelatorio" => $this->getContext($context, 'idRelatorio'), "idContrapartida" => $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false), "categoria" => $this->getAttribute($this->getContext($context, 'categoria'), "categoria", array(), "any", false))), "html");
                        echo "\" title=\"Deletar item\" onclick=\"return confirm('Tem certeza que deseja excluir este item?\\nEsta ação não poderá ser desfeita.')\" ><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/excluir-pq.png"), "html");
                        echo "\" alt=\"Deletar\"></a></td>
            </tr>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 84
                    echo "        </table>
        ";
                } else {
                    // line 86
                    echo "        <p style=\"font-size:12px;\"><b>:: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'categoria'), "descricao", array(), "any", false), "html");
                    echo "</b></p>
        <table id=\"budget-pledged\" class=\"form\" width=\"90%\" cellspacing=\"5\" cellpadding=\"5\">
            <tr>
                <th width=\"30%\">Item</th>
                <th width=\"5%\">Quantidade</th>
                <th width=\"16%\">Valor Unitário</th>
                <th width=\"16%\">Valor Total</th>
                <th width=\"3%\"></th>
            </tr>
            ";
                    // line 95
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'categoria'), "itens", array(), "any", false));
                    foreach ($context['_seq'] as $context['_key'] => $context['item']) {
                        // line 96
                        echo "            <tr>
                <td><a href=\"";
                        // line 97
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatorioContrapartida", array("idRelatorio" => $this->getContext($context, 'idRelatorio'), "idContrapartida" => $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false), "categoria" => $this->getAttribute($this->getContext($context, 'categoria'), "categoria", array(), "any", false))), "html");
                        echo "\" title=\"Clique para editar item empenhado\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "descricao", array(), "any", false), "html");
                        echo "</a></td>
                <td style=\"text-align:center;\">";
                        // line 98
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "quantidade", array(), "any", false), "html");
                        echo "</td>
                <td style=\"text-align:right;\">R\$ ";
                        // line 99
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "unitario", array(), "any", false), "html");
                        echo "</td>
                <td style=\"text-align:right;\">R\$ ";
                        // line 100
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "total", array(), "any", false), "html");
                        echo "</td>
                <td style=\"text-align:center;\"><a href=\"";
                        // line 101
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatorioContrapartidaDelete", array("idRelatorio" => $this->getContext($context, 'idRelatorio'), "idContrapartida" => $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false), "categoria" => $this->getAttribute($this->getContext($context, 'categoria'), "categoria", array(), "any", false))), "html");
                        echo "\" title=\"Deletar item\" onclick=\"return confirm('Tem certeza que deseja excluir este item?\\nEsta ação não poderá ser desfeita.')\" ><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/excluir-pq.png"), "html");
                        echo "\" alt=\"Deletar\"></a></td>
            </tr>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 104
                    echo "        </table>
        ";
                }
                // line 106
                echo "        ";
            }
            // line 107
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 108
        echo "    </div><!-- #main-content -->
</div><!-- #content -->
";
    }

    public function getTemplateName()
    {
        return "FapescTutorialBundle:Contrapartida:contrapartidas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
