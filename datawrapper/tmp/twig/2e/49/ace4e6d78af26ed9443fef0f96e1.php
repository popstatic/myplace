<?php

/* login.twig */
class __TwigTemplate_2e49ace4e6d78af26ed9443fef0f96e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('login', $context, $blocks);
    }

    public function block_login($context, array $blocks = array())
    {
        // line 2
        echo "
    <div class=\"modal hide\" id=\"dwLoginForm\">
        <!--<div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h2>&nbsp;</h2>
        </div>-->
        <div class=\"modal-body\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <div class=\"row\">
                <div class=\"span";
        // line 11
        if ((isset($context["noSignup"]) ? $context["noSignup"] : null)) {
            echo "4";
        } else {
            echo "3";
        }
        echo " row-login\">

                    <h3>Login</h3>

                    <p>";
        // line 15
        echo __("We're glad to see you again. Login to access your charts, and create new ones.");
        echo "</p>

                    <div class=\"login-form form-vertical\">
                        <div class=\"control-group\"><input class=\"login-email input-xxlarge span3\" type=\"email\" value=\"\" placeholder=\"";
        // line 18
        echo __("email");
        echo "\" /></div>
                        <div class=\"control-group\"><input class=\"login-pwd input-xxlarge span3\" type=\"password\" value=\"\" placeholder=\"";
        // line 19
        echo __("password");
        echo "\" /></div>

                        <div class=\"row\">
                            <div class=\"span2\" style=\"padding-bottom:10px\">
                                <a class=\"btn btn-login btn-primary btn-large\">
                                    <i class=\"icon-user icon-white\"></i> ";
        // line 24
        echo __("Login");
        // line 25
        echo "                                </a>
                                <a style=\"display:none\" class=\"btn btn-send-pw btn-info\">
                                    ";
        // line 27
        echo __("Send new password");
        // line 28
        echo "                                </a>
                            </div>
                            <div class=\"span2\">
                                <label class=\"checkbox\" for=\"keep-login\">
                                    <input id=\"keep-login\" class=\"keep-login\" type=\"checkbox\" checked=\"checked\"> ";
        // line 32
        echo __("Remember login?");
        // line 33
        echo "                                </label>
                                <a id=\"forgot-password\" href=\"#\">";
        // line 34
        echo __("Can't recall your password?");
        echo "</a>
                                <a id=\"send-pw-cancel\" style=\"display:none\" href=\"#\">";
        // line 35
        echo __("Return to login...");
        echo "</a>
                            </div>
                        </div>
                    </div>

                </div>
                ";
        // line 41
        if ((!(isset($context["noSignup"]) ? $context["noSignup"] : null))) {
            // line 42
            echo "                <div class=\"span3 row-signup\">
                    <h3>";
            // line 43
            echo __("Create a new account");
            echo "</h3>
                    <p>";
            // line 44
            echo __("Datawrapper is 100&#37; free and creating an account takes less than a minute. Just enter your email and pick a password, and you're done!");
            echo "</p>
                    <div class=\"signup-form form-vertcal\">
                        <div class=\"control-group\">
                            <input type=\"email\" class=\"input-xlarge span2 register-email\" placeholder=\"";
            // line 47
            echo __("email");
            echo "\" />
                        </div>
                        <div class=\"control-group\">
                            <input type=\"password\" class=\"input-xlarge span2 register-pwd\" placeholder=\"";
            // line 50
            echo __("password");
            echo "\" />
                        </div>
                        <div class=\"control-group\">
                            <input type=\"password\" class=\"input-xlarge span2 register-pwd-2\" placeholder=\"";
            // line 53
            echo __("repeat password");
            echo "\" />
                        </div>
                        <a class=\"btn-register btn btn-large\"><i class=\"icon-pencil\"></i> ";
            // line 55
            echo __("Sign Up");
            echo "</a>
                    </div>
                </div>
                ";
        } else {
            // line 59
            echo "                <style>
                #dwLoginForm {
                    width: 420px;
                    margin-left: -210px;
                    box-shadow: 0 0 20px rgba(0,0,0, 0.3);
                    border: 0;
                    position: relative;
                }
                </style>
                ";
        }
        // line 69
        echo "            </div>
            ";
        // line 70
        if (call_user_func_array($this->env->getFunction('has_hook')->getCallable(), array("alternative_signin"))) {
            // line 71
            echo "            <div style=\"padding:10px 13px 0;border-top:1px solid #eee;text-align:center\">
               ";
            // line 72
            echo __("Alternatively you can sign in via: ");
            // line 73
            echo "                <div style=\"margin-top:4px\">
                    ";
            // line 74
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), array("alternative_signin")), "html", null, true);
            echo "
                </div>
            </div>
            ";
        }
        // line 78
        echo "        </div>

    </div>

        <script type=\"text/javascript\">
        \$(function() {
            //\$('a').click(console.log);
            \$('#forgot-password').click(function(e) {
                e.preventDefault();
                var form = \$(e.target).parents('.modal');
                \$('.login-pwd', form).hide();
                \$('.btn-login', form).hide();
                \$('label[for=keep-login]', form).hide();
                \$('#forgot-password', form).hide();
                \$('.btn-send-pw', form).fadeIn();
                \$('#send-pw-cancel', form).fadeIn();
            });

            \$('#send-pw-cancel').click(function(e) {
                e.preventDefault();
                var form = \$(e.target).parents('.modal');
                \$('.login-pwd', form).fadeIn();
                \$('.btn-login', form).fadeIn();
                \$('label[for=keep-login]', form).fadeIn();
                \$('#forgot-password', form).fadeIn();
                \$('.btn-send-pw', form).hide();
                \$('#send-pw-cancel', form).hide();
            });

            \$('.btn-send-pw').click(function(e) {
                if (\$('.login-email').val().trim() == '') {
                    \$('.login-email').parent().addClass('error');
                    return false;
                }
                \$('.login-email').parent().removeClass('error');
                \$.ajax({
                    url: '/api/account/reset-password',
                    type: 'POST',
                    contentType: 'application/json',
                    dataType: 'json',
                    data: JSON.stringify({
                        email: \$('.login-email').val()
                    }),
                    success: function(res) {
                        if (res.status == 'ok') {
                            dw.backend.logMessage(res.data, \$(e.target).parent());
                        } else {
                            if (res.code == 'login-email-unknown') {
                                \$('.login-email').parent().addClass('error');
                            }
                            dw.backend.logError(res.message, \$(e.target).parent());
                        }
                    }
                });
            });
        });
        </script>

";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 74,  157 => 72,  154 => 71,  152 => 70,  149 => 69,  137 => 59,  130 => 55,  125 => 53,  119 => 50,  113 => 47,  103 => 43,  100 => 42,  98 => 41,  89 => 35,  85 => 34,  82 => 33,  74 => 28,  68 => 25,  66 => 24,  58 => 19,  54 => 18,  48 => 15,  37 => 11,  26 => 2,  20 => 1,  386 => 171,  382 => 169,  376 => 167,  370 => 163,  366 => 162,  362 => 161,  326 => 127,  322 => 125,  318 => 123,  307 => 121,  303 => 120,  300 => 119,  298 => 118,  295 => 117,  292 => 116,  289 => 113,  286 => 112,  272 => 111,  268 => 110,  250 => 109,  248 => 108,  237 => 104,  233 => 103,  228 => 100,  226 => 99,  220 => 96,  203 => 82,  199 => 81,  189 => 73,  181 => 69,  175 => 66,  171 => 63,  169 => 78,  159 => 73,  153 => 55,  144 => 53,  140 => 52,  131 => 51,  127 => 50,  124 => 49,  118 => 47,  116 => 46,  111 => 43,  107 => 44,  97 => 34,  86 => 25,  80 => 32,  55 => 5,  21 => 68,  14 => 65,  75 => 33,  72 => 27,  49 => 1,  42 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 166,);
    }
}
