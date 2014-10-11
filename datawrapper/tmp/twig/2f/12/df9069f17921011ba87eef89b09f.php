<?php

/* core.twig */
class __TwigTemplate_2f12df9069f17921011ba87eef89b09f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("login.twig");
        // line 65
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."login.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("header.twig");
        // line 68
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."header.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->env->loadTemplate("messages.twig");
        // line 166
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."messages.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>Datawrapper";
        // line 5
        if (((isset($context["title"]) ? $context["title"] : null) && ((isset($context["title"]) ? $context["title"] : null) != "Datawrapper"))) {
            echo " :: ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        }
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Datawrapper is an open source tool helping everyone to create simple, correct and embeddable charts in minutes.\">
    <meta name=\"author\" content=\"Mirko Lorenz, Nicolas Kayser-Bril, Gregor Aisch\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=8\" />

    <!-- Le styles -->
    <link href=\"/static/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/static/vendor/bootstrap/css/bootstrap-responsive.min.css\" rel=\"stylesheet\">
    <link href=\"/static/css/datawrapper.css\" rel=\"stylesheet\">
    <link href=\"/static/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
      <script src=\"/static/vendor/json-js/json2.min.js\"></script>
      <link href=\"/static/css/datawrapper-ie.css\" rel=\"stylesheet\">
    <![endif]-->

    ";
        // line 24
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "custom_css")) {
            echo "<link href=\"/static/custom/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "custom_css"), "html", null, true);
            echo "\" rel=\"stylesheet\">";
        }
        // line 25
        echo "
    <script type=\"text/javascript\" src=\"/static/vendor/require-js/require-2.1.8.min.js\"></script>
    <script type=\"text/javascript\">
        require.config({
            baseUrl: '/static',
            paths: {
                dw: 'js/dw',
                handsontable: 'vendor/handsontable/jquery.handsontable.full'
            },
            urlArgs: 'v=";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["DW_VERSION"]) ? $context["DW_VERSION"] : null), "html", null, true);
        echo "'
        });
    </script>
    <script type=\"text/javascript\" src=\"/static/vendor/jquery/jquery-1.10.2.min.js\"></script>
    <script type=\"text/javascript\" src=\"/static/vendor/underscore/underscore-1.5.2.min.js\"></script>
    <script type=\"text/javascript\" src=\"/static/vendor/cryptojs/hmac-sha256.js\"></script>
    <script type=\"text/javascript\" src=\"/static/vendor/globalize/globalize.js\"></script>
    <script type=\"text/javascript\" src=\"/static/vendor/globalize/cultures/globalize.culture.";
        // line 41
        echo twig_escape_filter($this->env, strtr((isset($context["locale"]) ? $context["locale"] : null), array("_" => "-")), "html", null, true);
        echo ".js\"></script>
    ";
        // line 43
        echo "    <script type=\"text/javascript\" src=\"/static/js/dw-2.0.js\"></script>
    <script type=\"text/javascript\" src=\"/static/js/dw-backend.js\"></script>

    ";
        // line 46
        if ((isset($context["page_css"]) ? $context["page_css"] : null)) {
            // line 47
            echo "    <link href=\"/static/css/";
            echo twig_escape_filter($this->env, (isset($context["page_css"]) ? $context["page_css"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugin_js"]) ? $context["plugin_js"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 51
            echo "    <script type=\"text/javascript\" src=\"/static/plugins/";
            echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugin_css"]) ? $context["plugin_css"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 53
            echo "    <link href=\"/static/plugins/";
            echo twig_escape_filter($this->env, (isset($context["css"]) ? $context["css"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
  </head>


  <body class=\"dw ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["pageClass"]) ? $context["pageClass"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : null), "html", null, true);
        echo "\" data-locale=\"";
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
        echo "\">


    ";
        // line 62
        if ((!(isset($context["noHeader"]) ? $context["noHeader"] : null))) {
            // line 63
            echo "
    <header class=\"header\">
      ";
            // line 66
            echo "      ";
            $this->displayBlock("login", $context, $blocks);
            echo "

      ";
            // line 69
            echo "      ";
            $this->displayBlock("header", $context, $blocks);
            echo "
    </header>

    ";
        }
        // line 73
        echo "
    <div class=\"container\">



    <!--[if lt IE 9]>
    <div style=\"position:relative\">
        <div id=\"disclaimer\" class=\"alert alert-warning span8 offset2\" style=\"font-size:14px;line-height:22px\" style=\"color:#821\">
            <h3>";
        // line 81
        echo __("Your browser is not supported");
        echo "</h3>
            <p>";
        // line 82
        echo __("You are using a browser that is not supported at the moment. Please use one of the following browsers instead. Note that this only applies to the chart editor. The charts itself can be viewed with any major browser.");
        echo "</p>

            <div style=\"text-align:center\">
                <a href=\"http://mozilla.org/firefox/\" title=\"Firefox\" class=\"browser firefox\"></a>
                <a href=\"http://google.com/chrome\" title=\"Chrome\" class=\"browser chrome\"></a>
                <a href=\"http://www.opera.com/\" title=\"Opera\" class=\"browser opera\"></a>
                <a href=\"http://www.apple.com/safari/\" title=\"Safari\" class=\"browser safari\"></a>
                <a href=\"http://windows.microsoft.com/en-US/internet-explorer/help/ie-9/9-reasons-to-get-internet-explorer-9\" title=\"Internet Explorer 9.0\" class=\"browser msie\"></a>
            </div>
        </div>
    </div>
    <![endif]-->


      ";
        // line 96
        $this->displayBlock("content", $context, $blocks);
        echo "


    ";
        // line 99
        if ((!(isset($context["noFooter"]) ? $context["noFooter"] : null))) {
            // line 100
            echo "      <footer class=\"footer\">

        <p class=\"pull-right\" style=\"text-align:right\">
          <a href=\"#top\">";
            // line 103
            echo __("Back to top");
            echo "</a>
          <span class=\"version\">version <a href=\"https://github.com/datawrapper/datawrapper/blob/master/CHANGELOG.md#";
            // line 104
            echo twig_escape_filter($this->env, strtr((isset($context["DW_VERSION"]) ? $context["DW_VERSION"] : null), array("." => "")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["DW_VERSION"]) ? $context["DW_VERSION"] : null), "html", null, true);
            echo "</a> ";
            echo (isset($context["BRANCH"]) ? $context["BRANCH"] : null);
            echo "</span>
        </p>

        <p>
          ";
            // line 108
            if ((isset($context["footer"]) ? $context["footer"] : null)) {
                // line 109
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["footer"]) ? $context["footer"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 110
                    echo "              ";
                    $template = $this->env->resolveTemplate((isset($context["line"]) ? $context["line"] : null));
                    $template->display($context);
                    // line 111
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "          ";
            } else {
                // line 113
                echo "            ";
                echo __("Datawrapper is an <a href=\"http://github.com/datawrapper/datawrapper\">open source</a> project by <a href=\"http://abzv.de\">ABZV</a> - a German training institution for newspaper journalists.");
                // line 116
                echo "          ";
            }
            // line 117
            echo "        </p>
        ";
            // line 118
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "footer_links")) {
                // line 119
                echo "        <div class=\"footer-links\">
          ";
                // line 120
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "footer_links"));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 121
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "url"), array("%lang" => (isset($context["language"]) ? $context["language"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "title"), (isset($context["language"]) ? $context["language"] : null), array(), "array"), "html", null, true);
                    echo "</a>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "        </div>
        ";
            }
            // line 125
            echo "      </footer>
    ";
        }
        // line 127
        echo "
    </div>

    <div id=\"alertModal\" class=\"modal hide\">
      <div class=\"modal-body\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <div class=\"bg\">
          <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\"> <path id=\"light-bulb-18-icon\" d=\"M292.2,381.263h-72.511c-5.082,0-9.201,4.12-9.201,9.203c0,5.082,4.119,9.201,9.201,9.201H292.2
c5.083,0,9.202-4.119,9.202-9.201C301.402,385.383,297.283,381.263,292.2,381.263z M290.546,411.9h-69.201
c-5.082,0-9.201,4.121-9.201,9.202c0,5.083,4.119,9.202,9.201,9.202h69.201c5.082,0,9.201-4.119,9.201-9.202
C299.747,416.021,295.628,411.9,290.546,411.9z M221.82,442.111C239.735,458.673,241.58,462,248.731,462h13.774
c6.99,0,8.714-3.084,27.564-19.889H221.82z M360.699,221.629c0,62.305-53.581,97.22-53.581,146.388h-24.4
c0.021-60.599,53.142-92.516,53.142-146.388c0-100.84-159.828-100.998-159.828,0c0,53.823,52.2,84.366,53.409,146.388h-24.668
c0-49.168-53.581-84.083-53.581-146.388C151.191,87.725,360.699,87.589,360.699,221.629z M269.203,95.112H244.14V50h25.063V95.112z
M355.264,73.97L333.18,62.12l-22.056,41.103l22.085,11.85L355.264,73.97z M419.355,136.042l-14.599-20.372l-40.099,28.739
l14.598,20.371L419.355,136.042z M423.781,294.141l-45.115-18.278l-9.409,23.229l45.116,18.277L423.781,294.141z M438.789,205.555
h-51.125v25.062h51.125V205.555z M200.876,103.223L178.82,62.12l-22.084,11.85l22.055,41.103L200.876,103.223z M147.344,144.409
l-40.101-28.739l-14.599,20.372l40.1,28.738L147.344,144.409z M143.178,296.9L132.9,274.043l-45.116,20.283l10.276,22.857
L143.178,296.9z M124.338,205.555H73.211v25.062h51.127V205.555z\"></path> </svg>
        </div>
        <div class=\"message\"></div>
        <div class=\"buttons\">
        </div>
      </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script type=\"text/javascript\" src=\"/static/vendor/bootstrap/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\">

\$(function() {
  dw.backend.__chartCacheDomain = '";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["DW_CHART_CACHE_DOMAIN"]) ? $context["DW_CHART_CACHE_DOMAIN"] : null), "html", null, true);
        echo "';
  dw.backend.__domain = '";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["DW_DOMAIN"]) ? $context["DW_DOMAIN"] : null), "html", null, true);
        echo "';
  dw.backend.__asset_domain = '";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["ASSET_DOMAIN"]) ? $context["ASSET_DOMAIN"] : null), "html", null, true);
        echo "';
});
    </script>
    ";
        // line 167
        echo "    ";
        $this->displayBlock("messages", $context, $blocks);
        echo "

    ";
        // line 169
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), array("core_after_body")), "html", null, true);
        echo "
    ";
        // line 171
        echo "    ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), array("after_core_body")), "html", null, true);
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 171,  382 => 169,  376 => 167,  370 => 163,  366 => 162,  362 => 161,  326 => 127,  322 => 125,  318 => 123,  307 => 121,  303 => 120,  300 => 119,  298 => 118,  295 => 117,  292 => 116,  289 => 113,  286 => 112,  272 => 111,  268 => 110,  250 => 109,  248 => 108,  237 => 104,  233 => 103,  228 => 100,  226 => 99,  220 => 96,  203 => 82,  199 => 81,  189 => 73,  181 => 69,  175 => 66,  171 => 63,  169 => 62,  159 => 59,  153 => 55,  144 => 53,  140 => 52,  131 => 51,  127 => 50,  124 => 49,  118 => 47,  116 => 46,  111 => 43,  107 => 41,  97 => 34,  86 => 25,  80 => 24,  55 => 5,  21 => 68,  14 => 65,  75 => 33,  72 => 32,  49 => 1,  42 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 166,);
    }
}
