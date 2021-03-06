<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_928808fc2b856d5add0faa63ff99feca4bd1431e281e019b974fb6ac3693d124 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88224c643c42391ef46eedf67504237a3002f002ae84d1bccadb042a4eaf2772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88224c643c42391ef46eedf67504237a3002f002ae84d1bccadb042a4eaf2772->enter($__internal_88224c643c42391ef46eedf67504237a3002f002ae84d1bccadb042a4eaf2772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88224c643c42391ef46eedf67504237a3002f002ae84d1bccadb042a4eaf2772->leave($__internal_88224c643c42391ef46eedf67504237a3002f002ae84d1bccadb042a4eaf2772_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e6d2496dd3a4cfbfb6cffcd3b56fbfe778cffac47832595075ed71c62c0039e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6d2496dd3a4cfbfb6cffcd3b56fbfe778cffac47832595075ed71c62c0039e->enter($__internal_7e6d2496dd3a4cfbfb6cffcd3b56fbfe778cffac47832595075ed71c62c0039e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e6d2496dd3a4cfbfb6cffcd3b56fbfe778cffac47832595075ed71c62c0039e->leave($__internal_7e6d2496dd3a4cfbfb6cffcd3b56fbfe778cffac47832595075ed71c62c0039e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0f84a4d42df5eed78f37c11d9bdf83b41681eb31e189deb2393889a67cb6dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f84a4d42df5eed78f37c11d9bdf83b41681eb31e189deb2393889a67cb6dfc->enter($__internal_e0f84a4d42df5eed78f37c11d9bdf83b41681eb31e189deb2393889a67cb6dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e0f84a4d42df5eed78f37c11d9bdf83b41681eb31e189deb2393889a67cb6dfc->leave($__internal_e0f84a4d42df5eed78f37c11d9bdf83b41681eb31e189deb2393889a67cb6dfc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1268a6c1b4ba4f7d0876d17e478d7e6c9c0380b5fbd1214f17b9dc7becf6d613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1268a6c1b4ba4f7d0876d17e478d7e6c9c0380b5fbd1214f17b9dc7becf6d613->enter($__internal_1268a6c1b4ba4f7d0876d17e478d7e6c9c0380b5fbd1214f17b9dc7becf6d613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1268a6c1b4ba4f7d0876d17e478d7e6c9c0380b5fbd1214f17b9dc7becf6d613->leave($__internal_1268a6c1b4ba4f7d0876d17e478d7e6c9c0380b5fbd1214f17b9dc7becf6d613_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\emploi2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
