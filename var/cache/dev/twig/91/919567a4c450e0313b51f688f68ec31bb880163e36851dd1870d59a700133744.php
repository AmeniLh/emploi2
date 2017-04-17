<?php

/* default/dashboard.html.twig */
class __TwigTemplate_3db3817cb2d00c8cf6e2ccfc70e9cfbb4e1c8388ad019a7961f446178c19da86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "default/dashboard.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c3cb8e0518bea492334316601c7e2f2dde5f35f793ab9d3bda4931c73b9cad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3cb8e0518bea492334316601c7e2f2dde5f35f793ab9d3bda4931c73b9cad9->enter($__internal_5c3cb8e0518bea492334316601c7e2f2dde5f35f793ab9d3bda4931c73b9cad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c3cb8e0518bea492334316601c7e2f2dde5f35f793ab9d3bda4931c73b9cad9->leave($__internal_5c3cb8e0518bea492334316601c7e2f2dde5f35f793ab9d3bda4931c73b9cad9_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4ef840b8b22d8b7f94a2f3b7c172464d81da038f904762e74cdd02ee84de532b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef840b8b22d8b7f94a2f3b7c172464d81da038f904762e74cdd02ee84de532b->enter($__internal_4ef840b8b22d8b7f94a2f3b7c172464d81da038f904762e74cdd02ee84de532b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_4ef840b8b22d8b7f94a2f3b7c172464d81da038f904762e74cdd02ee84de532b->leave($__internal_4ef840b8b22d8b7f94a2f3b7c172464d81da038f904762e74cdd02ee84de532b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c23828108d4dcf9397939a805137e31f6ac4ac32b262718fee1e8adf04e24231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23828108d4dcf9397939a805137e31f6ac4ac32b262718fee1e8adf04e24231->enter($__internal_c23828108d4dcf9397939a805137e31f6ac4ac32b262718fee1e8adf04e24231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_c23828108d4dcf9397939a805137e31f6ac4ac32b262718fee1e8adf04e24231->leave($__internal_c23828108d4dcf9397939a805137e31f6ac4ac32b262718fee1e8adf04e24231_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/base-layout.html.twig' %}
{% block page_title %}Dashboard{% endblock %}
{% block page_content %}
\t
{% endblock %}", "default/dashboard.html.twig", "C:\\wamp\\www\\emploi2\\app\\Resources\\views\\default\\dashboard.html.twig");
    }
}
