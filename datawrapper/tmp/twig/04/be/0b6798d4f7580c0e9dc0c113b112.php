<?php

/* header.twig */
class __TwigTemplate_04be0b6798d4f7580c0e9dc0c113b112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_nav_dropdown_link' => array($this, 'block_header_nav_dropdown_link'),
            'header_li_a' => array($this, 'block_header_li_a'),
            'header_nav_link' => array($this, 'block_header_nav_link'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('header_nav_dropdown_link', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('header_li_a', $context, $blocks);
        // line 35
        echo "

";
        // line 37
        $this->displayBlock('header_nav_link', $context, $blocks);
        // line 63
        echo "

";
        // line 65
        $this->displayBlock('header', $context, $blocks);
    }

    // line 2
    public function block_header_nav_dropdown_link($context, array $blocks = array())
    {
        // line 3
        echo "
    ";
        // line 4
        if (((isset($context["slink"]) ? $context["slink"] : null) == "divider")) {
            // line 5
            echo "        <li class=\"divider\"></li>
    ";
        } elseif ($this->getAttribute((isset($context["slink"]) ? $context["slink"] : null), "dropdown")) {
            // line 7
            echo "        <li class=\"dropdown-submenu\">
            <a tabindex=\"-1\" href=\"#\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slink"]) ? $context["slink"] : null), "title"), "html", null, true);
            echo "</a>
            <ul class=\"dropdown-menu\">
                ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["slink"]) ? $context["slink"] : null), "dropdown"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["slink"]) {
                // line 11
                echo "                    ";
                $this->displayBlock("header_nav_dropdown_link", $context, $blocks);
                echo "
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "            </ul>
        </li>
    ";
        } else {
            // line 16
            echo "        <li>
            <a ";
            // line 17
            if ($this->getAttribute((isset($context["slink"]) ? $context["slink"] : null), "data")) {
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["slink"]) ? $context["slink"] : null), "data"));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo "data-";
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo "href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slink"]) ? $context["slink"] : null), "url"), "html", null, true);
            echo "\">";
            if ($this->getAttribute((isset($context["slink"]) ? $context["slink"] : null), "icon")) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slink"]) ? $context["slink"] : null), "icon"), "html", null, true);
                echo "\"></i>
             ";
            }
            // line 18
            echo $this->getAttribute((isset($context["slink"]) ? $context["slink"] : null), "title");
            echo "</a>
        </li>
    ";
        }
        // line 21
        echo "
";
    }

    // line 24
    public function block_header_li_a($context, array $blocks = array())
    {
        // line 25
        echo "        <li class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "id"), "html", null, true);
        if ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "dropdown")) {
            echo " dropdown";
        }
        if ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "active")) {
            echo " active";
        }
        if ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "justicon")) {
            echo " icon";
        }
        if ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "class")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "class"), "html", null, true);
        }
        echo "\">
            <a ";
        // line 26
        if ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "tooltip")) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "tooltip"), "html", null, true);
            echo "\"";
        }
        echo " id=\"dw-header-link-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "id"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "url"), "html", null, true);
        echo "\" ";
        if ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "dropdown")) {
            echo "class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
        } elseif ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "modal")) {
            echo " data-toggle=\"modal\"";
        }
        echo ">
                ";
        // line 27
        if ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "icon")) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "icon"), "html", null, true);
            echo "\"></i> ";
        }
        // line 28
        echo "                ";
        if (((!$this->getAttribute((isset($context["link"]) ? $context["link"] : null), "icon")) || (!$this->getAttribute((isset($context["link"]) ? $context["link"] : null), "justicon")))) {
            // line 29
            echo "                ";
            echo $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "title");
            echo "
                ";
        }
        // line 31
        echo "                ";
        if ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "tooltip")) {
            // line 32
            echo "                <span class=\"tt\">";
            echo $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "tooltip");
            echo "</span>
                ";
        }
    }

    // line 37
    public function block_header_nav_link($context, array $blocks = array())
    {
        // line 38
        echo "
    ";
        // line 39
        if (((isset($context["link"]) ? $context["link"] : null) == "divider")) {
            // line 40
            echo "
        <li class=\"divider-vertical\"></li>

    ";
        } elseif ($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "dropdown")) {
            // line 44
            echo "
        ";
            // line 45
            $this->displayBlock("header_li_a", $context, $blocks);
            echo "
                <b class=\"caret\"></b>
            </a>
            <ul class=\"dropdown-menu\">
                ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "dropdown"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["slink"]) {
                // line 50
                echo "                    ";
                $this->displayBlock("header_nav_dropdown_link", $context, $blocks);
                echo "
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </ul>
        </li>

    ";
        } else {
            // line 56
            echo "
        ";
            // line 57
            $this->displayBlock("header_li_a", $context, $blocks);
            echo "
            </a>
        </li>

    ";
        }
    }

    // line 65
    public function block_header($context, array $blocks = array())
    {
        // line 66
        echo "
    <div class=\"navbar navbar-static-top";
        // line 67
        if ((isset($context["invert_navbar"]) ? $context["invert_navbar"] : null)) {
            echo " navbar-inverse";
        }
        echo "\">
        <div class=\"navbar-inner\">
            <div class=\"container\" style=\"position:relative\">
                <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>

                <a class=\"brand\" href=\"/\">
                    ";
        // line 77
        if ((isset($context["custom_logo"]) ? $context["custom_logo"] : null)) {
            // line 78
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["custom_logo"]) ? $context["custom_logo"] : null), "html", null, true);
            echo "\" />
                    ";
        }
        // line 80
        echo "                    ";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "custom_title")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "custom_title"), "html", null, true);
        } else {
            echo "Datawrapper";
        }
        echo "<span class=\"beta\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "custom_title_tag"), "html", null, true);
        echo "</span>
                </a>

                <div class=\"nav-collapse\">
                    <ul class=\"nav dw-header-nav pull-right\">

                    ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headlinks"]) ? $context["headlinks"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 87
            echo "                        ";
            $this->displayBlock("header_nav_link", $context, $blocks);
            echo "
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
    \$(function() {
        \$('.navbar li.icon a[title]').mouseenter(function() {
            \$('.navbar-static-top .tooltip').hide();
        });
        \$('.navbar-static-top li a[title]').tooltip({
            placement: 'bottom',
            container: '.navbar-static-top',
            delay: 0
        });
    });
    </script>


";
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function getDebugInfo()
    {
        return array (  365 => 89,  348 => 87,  331 => 86,  315 => 80,  309 => 78,  276 => 57,  273 => 56,  267 => 52,  223 => 44,  217 => 40,  215 => 39,  212 => 38,  209 => 37,  201 => 32,  198 => 31,  192 => 29,  183 => 27,  165 => 26,  147 => 25,  139 => 21,  133 => 18,  109 => 17,  106 => 16,  101 => 13,  84 => 11,  67 => 10,  62 => 8,  59 => 7,  53 => 4,  50 => 3,  47 => 2,  43 => 65,  33 => 35,  23 => 1,  162 => 74,  157 => 72,  154 => 71,  152 => 70,  149 => 69,  137 => 59,  130 => 55,  125 => 53,  119 => 50,  113 => 47,  103 => 43,  100 => 42,  98 => 41,  89 => 35,  85 => 34,  82 => 33,  74 => 28,  68 => 25,  66 => 24,  58 => 19,  54 => 18,  48 => 15,  37 => 37,  26 => 2,  20 => 1,  386 => 171,  382 => 169,  376 => 167,  370 => 163,  366 => 162,  362 => 161,  326 => 127,  322 => 125,  318 => 123,  307 => 77,  303 => 120,  300 => 119,  298 => 118,  295 => 117,  292 => 67,  289 => 66,  286 => 65,  272 => 111,  268 => 110,  250 => 50,  248 => 108,  237 => 104,  233 => 49,  228 => 100,  226 => 45,  220 => 96,  203 => 82,  199 => 81,  189 => 28,  181 => 69,  175 => 66,  171 => 63,  169 => 78,  159 => 73,  153 => 55,  144 => 24,  140 => 52,  131 => 51,  127 => 50,  124 => 49,  118 => 47,  116 => 46,  111 => 43,  107 => 44,  97 => 34,  86 => 25,  80 => 32,  55 => 5,  21 => 68,  14 => 65,  75 => 33,  72 => 27,  49 => 1,  42 => 8,  39 => 63,  36 => 6,  34 => 5,  31 => 24,  28 => 23,);
    }
}
