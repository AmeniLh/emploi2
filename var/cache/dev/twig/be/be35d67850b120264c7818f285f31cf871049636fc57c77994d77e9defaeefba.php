<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7a2fe93ae54848465617a9d83d1e96615d38be8fd7149abf067b7c3474702588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1d4aa024667afe731148bb93a3b4391dcb9185010a27654faf4d396c2b46f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d4aa024667afe731148bb93a3b4391dcb9185010a27654faf4d396c2b46f4a->enter($__internal_a1d4aa024667afe731148bb93a3b4391dcb9185010a27654faf4d396c2b46f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1d4aa024667afe731148bb93a3b4391dcb9185010a27654faf4d396c2b46f4a->leave($__internal_a1d4aa024667afe731148bb93a3b4391dcb9185010a27654faf4d396c2b46f4a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_577550a1d836fcaf8795b329b17ecca91706f332102282919040e68a0d4a578d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577550a1d836fcaf8795b329b17ecca91706f332102282919040e68a0d4a578d->enter($__internal_577550a1d836fcaf8795b329b17ecca91706f332102282919040e68a0d4a578d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_577550a1d836fcaf8795b329b17ecca91706f332102282919040e68a0d4a578d->leave($__internal_577550a1d836fcaf8795b329b17ecca91706f332102282919040e68a0d4a578d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9dae28e60de61dd2adac9a1f485dbdd93f64fcd83b04b7410c7b32039a5a99bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dae28e60de61dd2adac9a1f485dbdd93f64fcd83b04b7410c7b32039a5a99bf->enter($__internal_9dae28e60de61dd2adac9a1f485dbdd93f64fcd83b04b7410c7b32039a5a99bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9dae28e60de61dd2adac9a1f485dbdd93f64fcd83b04b7410c7b32039a5a99bf->leave($__internal_9dae28e60de61dd2adac9a1f485dbdd93f64fcd83b04b7410c7b32039a5a99bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b90009b47b507fa5b4d616920c9e93c6011eaf8a7a4418810f35cc30000d6602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90009b47b507fa5b4d616920c9e93c6011eaf8a7a4418810f35cc30000d6602->enter($__internal_b90009b47b507fa5b4d616920c9e93c6011eaf8a7a4418810f35cc30000d6602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b90009b47b507fa5b4d616920c9e93c6011eaf8a7a4418810f35cc30000d6602->leave($__internal_b90009b47b507fa5b4d616920c9e93c6011eaf8a7a4418810f35cc30000d6602_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\emploi2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
