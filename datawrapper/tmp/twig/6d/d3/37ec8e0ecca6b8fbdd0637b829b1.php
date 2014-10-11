<?php

/* messages.twig */
class __TwigTemplate_6dd337ec8e0ecca6b8fbdd0637b829b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = array())
    {
        // line 2
        echo "<script type=\"text/javascript\">

    dw.backend.messages = {

        needMoreSpace: \"";
        // line 6
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, __("Watch out: Your chart needs more space. To get rid of the scrollbars just [resize iFrame to chart]"), "js"), "html", null, true);
        echo "\",

        provideCurPwd: \"";
        // line 8
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, __("For security reasons, please provide your current password."), "js"), "html", null, true);
        echo "\",

        pwdTooShort: \"";
        // line 10
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, __("Your password doesn't meet our security guidelines. Please provide at least 4 characters."), "js"), "html", null, true);
        echo "\",

        pwdMismatch: \"";
        // line 12
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, __("The password and the repeated password must not differ."), "js"), "html", null, true);
        echo "\",

        noData: \"";
        // line 14
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, __("Awesome charts need awesome data. If you just want to try out things you can select one of our sample datasets."), "js"), "html", null, true);
        echo "\",

        insufficientData: \"";
        // line 16
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, __("<h4>Insufficient data</h4>The visualization needs at least one column of the type <b>%type</b> to populate axis <i>%key</i>. Please make sure that your data is recognized correctly in the previous step."), "js"), "html", null, true);
        echo "\",

        liveEditSuccess: \"";
        // line 18
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, __("Your changes have been saved. In the [Check & Describe] step you can restore the original dataset using the <b>revert</b> button."), "js"), "html", null, true);
        echo "\"

    };

</script>
";
    }

    public function getTemplateName()
    {
        return "messages.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  52 => 14,  32 => 6,  365 => 89,  348 => 87,  331 => 86,  315 => 80,  309 => 78,  276 => 57,  273 => 56,  267 => 52,  223 => 44,  217 => 40,  215 => 39,  212 => 38,  209 => 37,  201 => 32,  198 => 31,  192 => 29,  183 => 27,  165 => 26,  147 => 25,  139 => 21,  133 => 18,  109 => 17,  106 => 16,  101 => 13,  84 => 11,  67 => 10,  62 => 18,  59 => 7,  53 => 4,  50 => 3,  47 => 12,  43 => 65,  33 => 35,  23 => 1,  162 => 74,  157 => 72,  154 => 71,  152 => 70,  149 => 69,  137 => 59,  130 => 55,  125 => 53,  119 => 50,  113 => 47,  103 => 43,  100 => 42,  98 => 41,  89 => 35,  85 => 34,  82 => 33,  74 => 28,  68 => 25,  66 => 24,  58 => 19,  54 => 18,  48 => 15,  37 => 8,  26 => 2,  20 => 1,  386 => 171,  382 => 169,  376 => 167,  370 => 163,  366 => 162,  362 => 161,  326 => 127,  322 => 125,  318 => 123,  307 => 77,  303 => 120,  300 => 119,  298 => 118,  295 => 117,  292 => 67,  289 => 66,  286 => 65,  272 => 111,  268 => 110,  250 => 50,  248 => 108,  237 => 104,  233 => 49,  228 => 100,  226 => 45,  220 => 96,  203 => 82,  199 => 81,  189 => 28,  181 => 69,  175 => 66,  171 => 63,  169 => 78,  159 => 73,  153 => 55,  144 => 24,  140 => 52,  131 => 51,  127 => 50,  124 => 49,  118 => 47,  116 => 46,  111 => 43,  107 => 44,  97 => 34,  86 => 25,  80 => 32,  55 => 5,  21 => 68,  14 => 65,  75 => 33,  72 => 27,  49 => 1,  42 => 10,  39 => 63,  36 => 6,  34 => 5,  31 => 24,  28 => 23,);
    }
}
