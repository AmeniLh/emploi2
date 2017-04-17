<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_67a36d4611a1b09da5ef628ca05231f83b680939de227e5be142ce63790ae146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/loginBase.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/loginBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f56b4ff4f711ad29b329d0ca5f25d067e1a390eb482f07a1be76bfed3966e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f56b4ff4f711ad29b329d0ca5f25d067e1a390eb482f07a1be76bfed3966e16->enter($__internal_1f56b4ff4f711ad29b329d0ca5f25d067e1a390eb482f07a1be76bfed3966e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f56b4ff4f711ad29b329d0ca5f25d067e1a390eb482f07a1be76bfed3966e16->leave($__internal_1f56b4ff4f711ad29b329d0ca5f25d067e1a390eb482f07a1be76bfed3966e16_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_315bf08651674a057968e3ff7e51cfc6d6c3302b9b814025ef068b8fb9f4123b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315bf08651674a057968e3ff7e51cfc6d6c3302b9b814025ef068b8fb9f4123b->enter($__internal_315bf08651674a057968e3ff7e51cfc6d6c3302b9b814025ef068b8fb9f4123b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_315bf08651674a057968e3ff7e51cfc6d6c3302b9b814025ef068b8fb9f4123b->leave($__internal_315bf08651674a057968e3ff7e51cfc6d6c3302b9b814025ef068b8fb9f4123b_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2ebf08a75764ca081887f5183660774331603a8a2b1708ab3f3529ede923c3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebf08a75764ca081887f5183660774331603a8a2b1708ab3f3529ede923c3be->enter($__internal_2ebf08a75764ca081887f5183660774331603a8a2b1708ab3f3529ede923c3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_2ebf08a75764ca081887f5183660774331603a8a2b1708ab3f3529ede923c3be->leave($__internal_2ebf08a75764ca081887f5183660774331603a8a2b1708ab3f3529ede923c3be_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca08eadae79b65e77da4dbcdc09a0edcf41443053a8dbdcdbc0e524dba7253ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca08eadae79b65e77da4dbcdc09a0edcf41443053a8dbdcdbc0e524dba7253ab->enter($__internal_ca08eadae79b65e77da4dbcdc09a0edcf41443053a8dbdcdbc0e524dba7253ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo.jpg"), "html", null, true);
        echo "\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t";
        // line 13
        $this->displayBlock('user_auth_contents', $context, $blocks);
        // line 14
        echo "\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t";
        
        $__internal_ca08eadae79b65e77da4dbcdc09a0edcf41443053a8dbdcdbc0e524dba7253ab->leave($__internal_ca08eadae79b65e77da4dbcdc09a0edcf41443053a8dbdcdbc0e524dba7253ab_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_a1fa49f9221dbb3cfecb289f1631779a8d929055a8474bd2c96fe05cbb255fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fa49f9221dbb3cfecb289f1631779a8d929055a8474bd2c96fe05cbb255fbe->enter($__internal_a1fa49f9221dbb3cfecb289f1631779a8d929055a8474bd2c96fe05cbb255fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_a1fa49f9221dbb3cfecb289f1631779a8d929055a8474bd2c96fe05cbb255fbe->leave($__internal_a1fa49f9221dbb3cfecb289f1631779a8d929055a8474bd2c96fe05cbb255fbe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  83 => 14,  81 => 13,  72 => 9,  68 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/loginBase.html.twig' %}

{% block title %}{{ site_name }}{% endblock %}

{% block page_content %}
\t{% block fos_user_content %}
\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"{{ path('homepage') }}\"><img src=\"{{ asset('bundles/app/images/logo.jpg') }}\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t{% block user_auth_contents %} {% endblock %}
\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t{% endblock %}
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\wamp\\www\\emploi2\\src\\SalexUserBundle/Resources/views/layout.html.twig");
    }
}
