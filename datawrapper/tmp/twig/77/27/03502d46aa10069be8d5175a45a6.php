<?php

/* home.twig */
class __TwigTemplate_772703502d46aa10069be8d5175a45a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("core.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "core.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "custom_home")) {
            // line 6
            echo "
        ";
            // line 7
            $template = $this->env->resolveTemplate((("custom/" . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "custom_home")) . ".twig"));
            $template->display($context);
            // line 8
            echo "        ";
            $this->displayBlock("home", $context, $blocks);
            echo "

    ";
        } else {
            // line 11
            echo "
        <div class=\"row\">

             <div class=\"span8 offset2\">
                <p style=\"font-size:36px;font-weight:300;line-height:42px\">Congratulations! You have successfully installed Datawrapper.</p>
                <h2>Customize this page</h2>
                <p>To create a custom homepage for your Datawrapper installation
                    you have to do the following steps:</p>
                <ol>
                    <li>Create a new <a href=\"http://twig.sensiolabs.org/\">Twig template</a> (that is basically an HTML file with
                        some special tags) and store it into <b>/templates/custom/</b>, e.g. <b>my-home-template.twig</b>.</li>
                    <li>Edit <b>config.yaml</b> and add the following line. Replace <i>my-home-template</i>
                        with the filename of your new Twig template (without the extension .twig):
                        <pre>custom_home: my-home-template</pre>
                    <li>That's it</li>
                </ol>

            </div>
        </div>

    ";
        }
        // line 32
        echo "
";
        // line 33
        $this->displayParentBlock("content", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 33,  72 => 32,  49 => 11,  42 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
