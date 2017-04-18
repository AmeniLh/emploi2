<?php

/* eleve/new.html.twig */
class __TwigTemplate_39f632bf49bb81eb76721ba38a28f92e8521ff678622977bac21e65416e1c98e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "eleve/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        $__internal_faf4fc6cd3a0a118a6154d9b38ff350f43531c519bee35e061a7430f2d82324b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf4fc6cd3a0a118a6154d9b38ff350f43531c519bee35e061a7430f2d82324b->enter($__internal_faf4fc6cd3a0a118a6154d9b38ff350f43531c519bee35e061a7430f2d82324b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "eleve/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faf4fc6cd3a0a118a6154d9b38ff350f43531c519bee35e061a7430f2d82324b->leave($__internal_faf4fc6cd3a0a118a6154d9b38ff350f43531c519bee35e061a7430f2d82324b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_caeddc7871826cfe86e33f6fcee47823764a23c11dad691fa1fd0a3428c094b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caeddc7871826cfe86e33f6fcee47823764a23c11dad691fa1fd0a3428c094b9->enter($__internal_caeddc7871826cfe86e33f6fcee47823764a23c11dad691fa1fd0a3428c094b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        $this->displayBlock('page_title', $context, $blocks);
        echo "</h1>
";
        // line 5
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_caeddc7871826cfe86e33f6fcee47823764a23c11dad691fa1fd0a3428c094b9->leave($__internal_caeddc7871826cfe86e33f6fcee47823764a23c11dad691fa1fd0a3428c094b9_prof);

    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7c1ad63c0b4a7600b6c00211e5a2c6d7fa6d2128ba0d427d5b791168c5a0d830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1ad63c0b4a7600b6c00211e5a2c6d7fa6d2128ba0d427d5b791168c5a0d830->enter($__internal_7c1ad63c0b4a7600b6c00211e5a2c6d7fa6d2128ba0d427d5b791168c5a0d830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Eleve creation";
        
        $__internal_7c1ad63c0b4a7600b6c00211e5a2c6d7fa6d2128ba0d427d5b791168c5a0d830->leave($__internal_7c1ad63c0b4a7600b6c00211e5a2c6d7fa6d2128ba0d427d5b791168c5a0d830_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c3dd7b5387188587e737e980b9d901fc1331fe1e55e35b3f05b118c3b3b286e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dd7b5387188587e737e980b9d901fc1331fe1e55e35b3f05b118c3b3b286e4->enter($__internal_c3dd7b5387188587e737e980b9d901fc1331fe1e55e35b3f05b118c3b3b286e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eleve_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c3dd7b5387188587e737e980b9d901fc1331fe1e55e35b3f05b118c3b3b286e4->leave($__internal_c3dd7b5387188587e737e980b9d901fc1331fe1e55e35b3f05b118c3b3b286e4_prof);

    }

    public function getTemplateName()
    {
        return "eleve/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 13,  82 => 9,  77 => 7,  72 => 6,  66 => 5,  54 => 4,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block body %}
    <h1>{% block page_title %}Eleve creation{% endblock %}</h1>
{% block page_content %}
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('eleve_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
{% endblock %}
", "eleve/new.html.twig", "C:\\wamp\\www\\emploi2\\app\\Resources\\views\\eleve\\new.html.twig");
    }
}
